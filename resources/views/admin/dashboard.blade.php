@extends('admin.layout')

@section('content')

<h1 class="text-3xl font-bold mb-6">Dashboard</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

  <div class="bg-white p-6 rounded-xl shadow card-hover">
    <h2 class="text-xl font-semibold text-gray-600">Total Produk</h2>
    <p class="text-4xl font-bold mt-2 text-indigo-600">{{ $totalproduk ?? 0 }}</p>
  </div>

  <div class="bg-white p-6 rounded-xl shadow card-hover">
    <h2 class="text-xl font-semibold text-gray-600">Total User</h2>
    <p class="text-4xl font-bold mt-2 text-indigo-600">{{ $totaluser ?? 0 }}</p>
  </div>

  <div class="bg-white p-6 rounded-xl shadow card-hover">
    <h2 class="text-xl font-semibold text-gray-600">Total Pesanan</h2>
    <p class="text-4xl font-bold mt-2 text-indigo-600">{{ $totalorder ?? 0 }}</p>
  </div>

</div>

@endsection
