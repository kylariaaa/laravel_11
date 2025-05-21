@extends('layout')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Tambah Nilai Siswa</h2>

    <form action="{{ route('nilai.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="siswa_id" class="form-label">Nama Siswa:</label>
            <select name="siswa_id" id="siswa_id" class="form-select" required>
                <option value="">-- Pilih Siswa --</option>
                @foreach ($siswas as $siswa)
                    <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="mapel" class="form-label">Mapel:</label>
            <input type="text" name="mapel" id="mapel" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nilai" class="form-label">Nilai:</label>
            <input type="number" name="nilai" id="nilai" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
