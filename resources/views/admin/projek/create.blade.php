@extends('admin.layouts.sidebar')
@section('title', 'Tambah Projek')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4 text-primary">Tambah Projek</h2>

    <div class="card shadow-lg p-4">
        <form action="{{ route('admin.projek.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="judul_projek" class="form-label fw-bold">Judul Projek</label>
                <input type="text" class="form-control" id="judul_projek" name="judul_projek" 
                    placeholder="Masukkan judul projek" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi_projek" class="form-label fw-bold">Deskripsi Projek</label>
                <textarea class="form-control" id="deskripsi_projek" name="deskripsi_projek" 
                    placeholder="Masukkan Deskripsi Projek" required></textarea> </div>

            <div class="mb-3">
                <label for="foto" class="form-label fw-bold">Upload Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.projek.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-save"></i> Simpan
                </button>
            </div>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
</div>
@endsection