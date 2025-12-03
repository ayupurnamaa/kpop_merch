@extends('admin.layout')

@section('content')

<h1 class="text-3xl font-bold mb-6">Daftar Produk</h1>

<a href="/admin/products/create"
   class="bg-indigo-600 text-white px-4 py-2 rounded-lg shadow hover:bg-indigo-700">
   + Tambah Produk
</a>

@if(session('success'))
    <p class="mt-4 p-3 bg-green-100 border border-green-400 text-green-600 rounded">
        {{ session('success') }}
    </p>
@endif

<div class="mt-6 bg-white p-6 rounded-xl shadow">

    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="p-3">Nama</th>
                <th class="p-3">Harga</th>
                <th class="p-3">Stok</th>
                <th class="p-3">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($products as $p)
            <tr class="border-b hover:bg-gray-50">
                <td class="p-3">{{ $p->name }}</td>
                <td class="p-3">Rp {{ number_format($p->price, 0, ',', '.') }}</td>
                <td class="p-3">{{ $p->stock }}</td>
                <td class="p-3 flex gap-3">
                    <a href="/admin/products/edit/{{ $p->id }}" class="text-blue-500">Edit</a>
                    <a href="/admin/products/delete/{{ $p->id }}" class="text-red-500">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
