@extends('layouts.admin.app')

@section('content')
<div class="py-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah User</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Tambah User</h1>
            <p class="mb-0">Form untuk menambahkan data user baru.</p>
        </div>
        <div>
            <a href="{{ route('user.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

<div class="card card-body border-0 shadow mb-4">
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="row">
            <!-- Name Input -->
            <div class="col-md-6 mb-3">
                <label for="name">Name</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="Masukkan nama" required>
            </div>

            <!-- Password Input -->
            <div class="col-md-6 mb-3">
                <label for="password">Password</label>
                <input class="form-control" id="password" name="password" type="password" placeholder="Masukkan password" required>
            </div>
        </div>

        <div class="row">
            <!-- Email Input -->
            <div class="col-md-6 mb-3">
                <label for="email">Email</label>
                <input class="form-control" id="email" name="email" type="email" placeholder="Masukkan email" required>
            </div>

            <!-- Confirm Password Input -->
            <div class="col-md-6 mb-3">
                <label for="password_confirmation">Confirm Password</label>
                <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" placeholder="Konfirmasi password" required>
            </div>
        </div>

        <div class="mt-3">
            <button class="btn btn-gray-800" type="submit">Simpan</button>
            <a href="{{ route('user.index') }}" class="btn btn-link text-gray-600">Batal</a>
        </div>
    </form>
</div>
@endsection