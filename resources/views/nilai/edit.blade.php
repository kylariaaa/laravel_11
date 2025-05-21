@extends('layout')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Edit Nilai Siswa</h2>

    <form action="{{ route('nilai.update', $nilai->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="siswa_id" class="form-label">Nama Siswa:</label>
            <select name="siswa_id" id="siswa_id" class="form-select" required>
                @foreach ($siswas as $siswa)
                    <option value="{{ $siswa->id }}" {{ $nilai->siswa_id == $siswa->id ? 'selected' : '' }}>
                        {{ $siswa->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="mapel" class="form-label">Mapel:</label>
            <input type="text" name="mapel" id="mapel" value="{{ $nilai->mapel }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nilai" class="form-label">Nilai:</label>
            <input type="number" name="nilai" id="nilai" value="{{ $nilai->nilai }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
