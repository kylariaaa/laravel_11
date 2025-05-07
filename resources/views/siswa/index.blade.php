@extends('layout')

@section('content')
<h2>Data Siswa</h2>
<a href="{{ route('siswa.create') }}">+ Tambah Siswa</a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>
    @foreach ($siswas as $i => $siswa)
    <tr>
        <td>{{ $i + 1 }}</td>
        <td>{{ $siswa->nama }}</td>
        <td>{{ $siswa->kelas }}</td>
        <td>
            <a href="{{ route('siswa.edit', $siswa->id) }}">Edit</a> |
            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
