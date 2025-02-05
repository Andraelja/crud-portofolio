@extends('admin.layouts.sidebar')
@section('title', 'Edit Pendidikan')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

@section('content')
    <div class="container mt-4">
        <h2 class="text-center mb-4 text-primary">Edit Pendidikan</h2>

        <div class="card shadow-lg p-4">
            <form action="{{ route('admin.pendidikan.update', $pendidikan->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_instansi" class="form-label fw-bold">Nama Instansi</label>
                    <input type="text" class="form-control" id="nama_instansi" name="nama_instansi"
                        value="{{ $pendidikan->nama_instansi }}" required>
                </div>

                <div class="mb-3">
                    <label for="jurusan" class="form-label fw-bold">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan"
                        value="{{ $pendidikan->jurusan }}" required>
                </div>

                <div class="mb-3">
                    <label for="tahun" class="form-label fw-bold">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name="tahun"
                        value="{{ $pendidikan->tahun }}" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.pendidikan.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-save"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
