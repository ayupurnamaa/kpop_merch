@extends('layouts.admin')

@section('content')
<h2 class="text-2xl font-bold mb-4">Detail Pesanan #{{ $order->id }}</h2>

@include('admin._messages')

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
  <div class="bg-white p-6 rounded shadow">
    <h3 class="font-semibold mb-2">Info Pembeli</h3>
    <p><strong>User:</strong> {{ $order->user ? $order->user->name : 'Guest' }}</p>
    <p><strong>Alamat:</strong> {{ $order->address }}</p>
    <p><strong>Catatan:</strong> {{ $order->notes }}</p>
  </div>

  <div class="bg-white p-6 rounded shadow">
    <h3 class="font-semibold mb-2">Status & Total</h3>
    <p><strong>Total:</strong> Rp {{ number_format($order->total,0,',','.') }}</p>

    <form action="{{ route('admin.orders.updateStatus', $order) }}" method="POST" class="mt-4">
      @csrf
      <label class="block mb-2">Update Status</label>
      <select name="status" class="border p-2 rounded w-full">
        @foreach(['pending','processing','shipped','completed','cancelled'] as $s)
          <option value="{{ $s }}" @selected($order->status === $s)>{{ ucfirst($s) }}</option>
        @endforeach
      </select>
      <div class="mt-3 text-right">
        <button class="bg-green-600 px-4 py-2 rounded text-white">Simpan</button>
      </div>
    </form>
  </div>
</div>
@endsection
