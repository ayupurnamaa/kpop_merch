@extends('admin.layout')

@section('content')

<h1 class="text-3xl font-bold mb-6">Edit User</h1>

<form action="/admin/users/update/{{ $user->id }}" method="POST" class="bg-white p-6 rounded-xl shadow w-full max-w-xl">
    @csrf

    <label class="font-semibold">Nama</label>
    <input type="text" name="name" value="{{ $user->name }}" class="w-full p-3 border rounded mb-4">

    <label class="font-semibold">Email</label>
    <input type="email" name="email" value="{{ $user->email }}" class="w-full p-3 border rounded mb-4">

    <label class="font-semibold">Password (boleh kosong)</label>
    <input type="password" name="password" class="w-full p-3 border rounded mb-4">

    <label class="font-semibold">Role</label>
    <select name="role" class="w-full p-3 border rounded mb-4">
        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
    </select>

    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">Update</button>

</form>

@endsection
