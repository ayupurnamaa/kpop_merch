@extends('layouts.admin')

@section('content')
<div class="flex items-center justify-between mb-6">
  <h2 class="text-2xl font-bold">Kelola Pesanan</h2>
  <form method="GET" class="flex items-center">
    <input type="text" name="q" value="{{ $q ?? '' }}" placeholder="Cari ID / status..." class="px-3 py-1 rounded-l border bg-white">
    <button class="bg-pink-500 px-3 rounded-r text-white">Cari</button>
  </form>
</div>

@include('admin._messages')

<table class="w-full bg-white rounded shadow overflow-hidden">
  <thead>
    <tr class="text-left">
      <th class="p-3">ID</th>
      <th class="p-3">User</th>
      <th class="p-3">Total</th>
      <th class="p-3">Status</th>
      <th class="p-3">Tanggal</th>
      <th class="p-3">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
      <tr class="border-t">
        <td class="p-3">{{ $order->id }}</td>
        <td class="p-3">{{ $order->user ? $order->user->name : 'Guest' }}</td>
        <td class="p-3">Rp {{ number_format($order->total,0,',','.') }}</td>
        <td class="p-3">{{ ucfirst($order->status) }}</td>
        <td class="p-3">{{ $order->created_at->format('d M Y') }}</td>
        <td class="p-3">
          <a href="{{ route('admin.orders.show', $order) }}" class="text-blue-600">Detail</a>
          <form action="{{ route('admin.orders.destroy', $order) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus order?')">
            @csrf @method('DELETE')
            <button class="text-red-600 ml-3">Hapus</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

<div class="mt-4">
  {{ $orders->links() }}
</div>
@endsection
