@extends('admin.layout')

@section('content')

<h1 class="text-3xl font-bold mb-6">Daftar User</h1>

<a href="/admin/users/create"
   class="bg-indigo-600 text-white px-4 py-2 rounded-lg shadow hover:bg-indigo-700">
   + Tambah User
</a>

@if(session('success'))
    <p class="mt-4 p-3 bg-green-100 text-green-700 rounded border">
        {{ session('success') }}
    </p>
@endif

<div class="mt-6 bg-white p-6 rounded-xl shadow">

    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-3 text-left">Nama</th>
                <th class="p-3 text-left">Email</th>
                <th class="p-3 text-left">Role</th>
                <th class="p-3 text-left">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $u)
            <tr class="border-b hover:bg-gray-50">
                <td class="p-3">{{ $u->name }}</td>
                <td class="p-3">{{ $u->email }}</td>
                <td class="p-3 capitalize">{{ $u->role }}</td>

                <td class="p-3 flex gap-3">
                    <a href="/admin/users/edit/{{ $u->id }}" class="text-blue-500">Edit</a>
                    <a href="/admin/users/delete/{{ $u->id }}" class="text-red-500">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
