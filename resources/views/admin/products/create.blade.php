@extends('admin.layout')

@section('content')

<h1 class="text-3xl font-bold mb-6">Tambah Produk</h1>

<form action="/admin/products/store" method="POST" class="bg-white p-6 rounded-xl shadow">
    @csrf

    <label class="block mb-3 font-semibold">Nama Produk</label>
    <input type="text" name="name" class="w-full p-3 border rounded mb-4">

    <label class="block mb-3 font-semibold">Harga</label>
    <input type="number" name="price" class="w-full p-3 border rounded mb-4">

    <label class="block mb-3 font-semibold">Stok</label>
    <input type="number" name="stock" class="w-full p-3 border rounded mb-4">

    <button class="mt-4 bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
        Simpan
    </button>
</form>

@endsection
