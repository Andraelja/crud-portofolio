@extends('admin.layouts.sidebar')
@section('title', 'Edit Pelatihan')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

@section('content')
    <div class="container mt-4">
        <h2 class="text-center mb-4 text-primary">Edit Pendidikan</h2>

        <div class="card shadow-lg p-4">
            <form action="{{ route('admin.pelatihan.update', $pelatihan->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="judul_pelatihan" class="form-label fw-bold">Judul Pelatihan</label>
                    <input type="text" class="form-control" id="judul_pelatihan" name="judul_pelatihan"
                        value="{{ $pelatihan->judul_pelatihan }}" required>
                </div>

                <div class="mb-3">
                    <label for="tahun" class="form-label fw-bold">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" value="{{ $pelatihan->tahun }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="keterangan" class="form-label fw-bold">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" rows="4"
                        required>{{ old('keterangan', default: $pelatihan->keterangan) }}</textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.pelatihan.index') }}" class="btn btn-secondary">
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
