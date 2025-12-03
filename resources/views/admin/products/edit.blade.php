@extends('admin.layout')

@section('content')

<h1 class="text-3xl font-bold mb-6">Edit Produk</h1>

<form action="/admin/products/update/{{ $product->id }}" method="POST" class="bg-white p-6 rounded-xl shadow">
    @csrf

    <label class="block mb-3 font-semibold">Nama Produk</label>
    <input type="text" name="name" value="{{ $product->name }}" class="w-full p-3 border rounded mb-4">

    <label class="block mb-3 font-semibold">Harga</label>
    <input type="number" name="price" value="{{ $product->price }}" class="w-full p-3 border rounded mb-4">

    <label class="block mb-3 font-semibold">Stok</label>
    <input type="number" name="stock" value="{{ $product->stock }}" class="w-full p-3 border rounded mb-4">

    <button class="mt-4 bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
        Update
    </button>
</form>

@endsection
