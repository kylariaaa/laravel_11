<!DOCTYPE html>
<html>
<head>
    <title>CRUD Siswa Nilai Laravel</title>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav>
        <a href="{{ route('siswa.index') }}">Siswa</a> |
        <a href="{{ route('nilai.index') }}">Nilai</a>
    </nav>
    <hr>
    @yield('content')
</body>
</html>
