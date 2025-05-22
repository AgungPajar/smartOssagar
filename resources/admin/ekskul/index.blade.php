@extends('layouts.app')
@section('content')
@if (session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Data Ekskul</h1>
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
