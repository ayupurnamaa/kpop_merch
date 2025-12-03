@extends('admin.layout')

@section('content')

<h1 class="text-3xl font-bold mb-6">Tambah User</h1>

<form action="/admin/users/store" method="POST" class="bg-white p-6 rounded-xl shadow w-full max-w-xl">
    @csrf

    <label class="font-semibold">Nama</label>
    <input type="text" name="name" class="w-full p-3 border rounded mb-4">

    <label class="font-semibold">Email</label>
    <input type="email" name="email" class="w-full p-3 border rounded mb-4">

    <label class="font-semibold">Password</label>
    <input type="password" name="password" class="w-full p-3 border rounded mb-4">

    <label class="font-semibold">Role</label>
    <select name="role" class="w-full p-3 border rounded mb-4">
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>

    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">Simpan</button>

</form>

@endsection
