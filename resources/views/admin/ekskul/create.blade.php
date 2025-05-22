@extends('layouts.app')

@section('title', 'Tambah Ekskul')

@section('header')
<header class="bg-white dark:bg-gray-800 shadow mb-4">
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
        <h1 class="text-xl font-bold text-gray-900 dark:text-white">Formulir Tambah Ekskul</h1>
    </div>
</header>
@endsection

@section('content')
<form action="{{ route('ekskul.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Ekskul</label>
                        <input type="text" class="form-control" name="nama_ekskul" value="{{ old('nama_ekskul') }}" required>
                    </div>
                    <div class="form-group">
                        <label>Password Ekskul</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
