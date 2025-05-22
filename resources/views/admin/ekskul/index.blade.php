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
<div class="container">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white">
            <h5 class="mb-0">Sistem Absensi Ekskul</h5>
            <a class="btn btn-light btn-sm" href="{{ route('ekskul.create') }}">Tambah Ekskul</a>
        </div>
        <div class="card-body bg-light dark:bg-dark text-dark dark:text-white">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover text-center" id="dataTable" width="100%">
                    <thead class="thead-dark">
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
                                    <a class="btn btn-sm btn-warning" href="{{ url('ekskul/' . $item->id_ekskul . '/edit') }}">Edit</a>
                                    <form action="{{ url('ekskul/' . $item->id_ekskul) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</button>
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
