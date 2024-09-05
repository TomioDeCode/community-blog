<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @yield('menuSiswa')" href="/siswa">Data Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('menuGuru')" href="/guru">Data Guru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('menuGallery')" href="{{ route('gambar') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('info', ['fakultas' => 'FMIPA', 'jurusan' => 'Matematika']) }}">Info</a>
                </li>
            </ul>
        </div>
    </nav>

    @section('content')
        <div class="alert alert-primary text-center">
            Sistem Informasi Mahasiswa
        </div>
    @show

    <footer class="bg-dark py-5 my-6 text-white mt-4">
        <div class="container">
            <a href="{{ url('informasi/FMIPA/Matematika') }}">Jurusan Matematika</a> |
            Sistem Informasi Mahasiswa | Copyright © {{ date('Y') }} TomioDeCode
        </div>
    </footer>
    {{-- Script --}}
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
