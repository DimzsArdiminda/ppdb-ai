<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.css') }}">
    <script src="asset/bootstrap/js/bootstrap.js"></script>

    {{-- logo --}}
    <link rel="icon" href="{{ asset('asset/img/logo/logo.png') }}">

    {{-- animate css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    {{-- sewett alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .warna-susu {
            background-color: #F6F4EB;
        }

        .warna-biru-muda {
            background-color: #91C8E4;
        }

        .warna-biru-abu {
            background-color: #749BC2;
        }

        .warna-biru-abu {
            background-color: #4682A9;
        }
    </style>

    <title>Pendaftaran Peserta didik @yield('title')</title>
</head>

<body style="background-color: darkgray ">
    {{-- navbar --}}
    <nav class="nav mt-3 justify-content-center">
        <div class="container text-center mb-3"><a href="{{ url('/dashboard') }}" class="btn btn-info">kembali ke menu utama</a></div>
        <ul class="nav nav-tabs ">
            <li class="nav-item">
                <a class="nav-link @yield("data-diri") " aria-current="page" href="{{ url('PPDB/pengisian-data-diri') }}">Pengisian data diri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield("upload-berkas")" href="{{ url('PPDB/pengisian-berkas') }}">Upload berkas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield("pengecekan-data-diri")" href="{{ url('PPDB/pengecekan-ulang-berkas') }}">Pengecekan data diri dan dokumentasi</a>
            </li>

        </ul>
    </nav>
    {{-- end of navbar --}}
    @yield('konten')
</body>
</html>