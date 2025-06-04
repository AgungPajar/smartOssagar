@extends('admin.layouts.app')

@section('title', 'Tambah Ekskul')

@section('header')
<header class="bg-white dark:bg-gray-800 shadow mb-4">
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
        <h1 class="text-xl font-bold text-gray-900 dark:text-white">Formulir Tambah Ekskul</h1>
    </div>
</header>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('ekskul.store') }}" method="POST">
                @csrf
                <div class="card shadow mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Tambah Ekskul</h5>
                    </div>
                    <div class="card-body bg-light dark:bg-dark text-dark dark:text-white">
                        <div class="form-group mb-3">
                            <label for="nama_ekskul">Nama Ekskul</label>
                            <input type="text" class="form-control" id="nama_ekskul" name="nama_ekskul" value="{{ old('nama_ekskul') }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password Ekskul</label>
                            <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" required>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
