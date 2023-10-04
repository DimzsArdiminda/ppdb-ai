<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootsrtap --}}
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.css') }}">
    <script src="asset/bootstrap/js/bootstrap.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    {{-- logo --}}
    <link rel="icon" href="{{ asset('asset/img/logo/logo.png') }}">

    {{-- datatables --}}
    <link rel="" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>


    <title>Admin @yield('title')</title>
    <style>
        .mt-7 {
            margin-bottom: 7rem !important;
        }
    </style>
</head>

<body style="background-color: darkgray">
    {{-- navbar --}}
    <nav class="navbar bg-body-tertiary fixed-top bg-transparent mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ADMIN </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Admin Sekolah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link @yield('daf-akun')" aria-current="page" href="{{ url('admin/daftar-akun') }}">Daftar Akun</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('peserta-baru')" href="{{ url('admin/daftar-ppdb') }}">Peserta didik baru</a>
                        </li>
                        {{-- dropdown 1 --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Data sekolah
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item disabled  @yield('daf-murid')" href="#">Daftar Murid</a></li>
                                <li><a class="dropdown-item disabled @yield('daf-gur-gaw')" href="#">Daftar guru dan pegawai</a>
                                </li>
                                <li><a class="dropdown-item disabled @yield('daf-ket')" href="#">Daftar Ketua Organisasi</a>
                                </li>
                                <li><a class="dropdown-item disabled @yield('track-rec')" href="#">Track Record Alumni</a></li>
                            </ul>
                        </li>
                        {{-- end of dropdown 1 --}}
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    {{-- end of navbar --}}


    <div class="container" style="margin-top: 7rem">
        <div class="container">
            <div class="container">
                <div class="row text-start">
                    <h5>HALO ADMIN</h5>
                    <div id="clock"></div>
                </div>
                {{-- konten --}}
                @yield('konten')
                {{-- end of konten --}}
            </div>
        </div>
    </div>


    {{-- script --}}
    <script>
        // jam
        function updateClock() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;

            var timeString = hours + ':' + minutes + ':' + seconds;

            document.getElementById('clock').innerHTML = timeString;

            setTimeout(updateClock, 1000);
        }

        // Memanggil fungsi untuk pertama kali
        updateClock();

        // data tabel
        // masukan tabel ke id di div
        $(document).ready(function () {
            $('#tabel').DataTable();
        });
        // end of tabel 
    </script>

    {{-- end of script --}}
</body>

</html>