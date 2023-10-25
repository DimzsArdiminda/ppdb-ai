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

    <!-- Include SweetAlert2 CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Pendaftaran - @yield('title')</title>
</head>

<body>
    @yield('konten')
    <script>
        // lihat passwoard
        function validatePassword() {
            var pas = document.getElementById("password1").value
            var pas2 = document.getElementById("password2").value

            if (pas2 != pas) {
                alert("Password dan Konfirmasi Password tidak cocok!");
                return false
            }

            return true
        }

        // tampilkan sandi

        function togglePassword() {
            var passwordInput = document.getElementById("password");
            var toggleCheckbox = document.getElementById("togglePassword");

            passwordInput.type = toggleCheckbox.checked ? "text" : "password";
        }
    </script>
</body>

</html>