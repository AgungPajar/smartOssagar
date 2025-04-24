@extends('layouts.app')
@section('content')
    <form action="{{ url('ekskul/' . $data->id_ekskul) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6>Formulir Edit Ekskul</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Ekskul</label>
                            <input type="text" class="form-control" name="nama_ekskul"
                                   value="{{ $data->nama_ekskul }}" required>
                        </div>
                        <div class="form-group">
                            <label>Password Ekskul</label>
                            <input type="password" class="form-control" name="password"
                                   value="{{ $data->password }}" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
