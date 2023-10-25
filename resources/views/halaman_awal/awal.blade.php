<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.css') }}">
    <script src="asset/bootstrap/js/bootstrap.js"></script>

    {{-- logo --}}
    <link rel="icon" href="{{ asset('asset/img/logo/logo.png') }}">

    <title>Portal awal</title>
    <style>
        /* font */
        @font-face {
            font-family: "font";
            src: url("asset/font/Roboto-Regular.ttf");

        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .vertical-center {
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }
    </style>
</head>

<body style="background-color: darkgrey">
    <div class="container">
        <div class="container mb-5">
            <div class="container mt-5 text-center" style="font-family: 'Times New Roman', Times, serif;">
                <div class="row">
                    <div class="col">
                        {{-- ucapan selamat datang --}}
                        <h3> SELAMAT DATANG DI PENDAFTRAAN ONLINE </h3>
                        <h2> PESERTA DIDIK BARU SMAN ISLAM NAISONAL </h2>
                    </div>
                </div>
            </div>
            {{-- logo --}}
            <div class="container mt-2 row">
                <div class="row">
                    <div class="col">
                        <img src="asset/img/logo/LOGO.png" alt="logo" class="" style="width: 20rem; display: block;
                        margin-left: auto;
                        margin-right: auto;
                        ">
                    </div>
                </div>
            </div>
            {{-- notifikasi --}}
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            {{-- button pilihan --}}
            <div class="container mt-3">
                <div class="row">
                    <div class="col-sm-3 col-md-4 col-xl-3">
                    </div>
                    <div class="col-sm-2 col-md-4 col-xl-3">
                        <a class="btn btn-secondary" href="{{ url('Pendaftaran/Akun-Baru') }}"> Daftar </a>
                        <a href="{{ url('Pendaftaran/login') }}" class="btn btn-primary">Masuk</a>
                    </div>
                    <div class="col-sm-3 col-md-4 col-xl-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>