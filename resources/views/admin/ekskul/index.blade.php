@extends('layouts.app')

@section('title', 'Data Ekskul')

@section('header')
<header class="bg-white dark:bg-gray-800 shadow mb-4">
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
        <h1 class="text-xl font-bold text-gray-900 dark:text-white">Data Ekskul</h1>
    </div>
</header>
@endsection

@section('content')
@if (session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Sistem Absensi Ekskul</h6>
        </div>
        <div class="card-body">
            <a class="btn btn-primary mb-3" href="{{ route('ekskul.create') }}">Tambah Ekskul</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ekskul</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ekskul as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->nama_ekskul }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ url('ekskul/' . $item->id_ekskul . '/edit') }}">Edit</a>
                                    <form action="{{ url('ekskul/' . $item->id_ekskul) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
