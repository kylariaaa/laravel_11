@extends('layout')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Data Nilai Siswa</h2>
        <a href="{{ route('nilai.create') }}" class="btn btn-primary">+ Tambah Nilai</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Mapel</th>
                <th>Nilai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilais as $i => $nilai)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $nilai->siswa->nama }}</td>
                <td>{{ $nilai->mapel }}</td>
                <td>{{ $nilai->nilai }}</td>
                <td>
                    <a href="{{ route('nilai.edit', $nilai->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('nilai.destroy', $nilai->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
