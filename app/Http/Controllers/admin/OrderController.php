<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');
        $orders = Order::with('user')
            ->when($q, function ($qbuilder) use ($q) {
                $qbuilder->where('id', $q)->orWhere('status','like',"%{$q}%");
            })
            ->latest()
            ->paginate(12);

        return view('admin.orders.index', compact('orders','q'));
    }

    public function show(Order $order)
    {
        return view('admin.orders.show', compact('order'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $data = $request->validate([
           'status' => 'required|in:pending,processing,shipped,completed,cancelled'
        ]);
        $order->update($data);
        return redirect()->back()->with('success','Status pesanan diperbarui.');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.orders.index')->with('success','Order dihapus.');
    }
}
