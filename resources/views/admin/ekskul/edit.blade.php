@extends('layouts.app')

@section('title', 'Edit Ekskul')

@section('header')
<header class="bg-white dark:bg-gray-800 shadow mb-4">
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
        <h1 class="text-xl font-bold text-gray-900 dark:text-white">Formulir Edit Ekskul</h1>
    </div>
</header>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ url('ekskul/' . $data->id_ekskul) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card shadow mb-4">
                    <div class="card-header bg-warning text-white">
                        <h5 class="mb-0">Edit Ekskul</h5>
                    </div>
                    <div class="card-body bg-light dark:bg-dark text-dark dark:text-white">
                        <div class="form-group mb-3">
                            <label for="nama_ekskul">Nama Ekskul</label>
                            <input type="text" class="form-control" id="nama_ekskul" name="nama_ekskul" value="{{ $data->nama_ekskul }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password Ekskul</label>
                            <input type="password" class="form-control" id="password" name="password" value="{{ $data->password }}" required>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
