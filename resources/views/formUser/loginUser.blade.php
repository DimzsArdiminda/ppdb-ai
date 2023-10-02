<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.css') }}">
    <script src="{{ asset('asset/bootstrap/js/bootstrap.js') }}"></script>

    {{-- logo --}}
    <link rel="icon" href="{{ asset('asset/img/logo/logo.png') }}">

    {{-- animate css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Pendaftaran - Akun Baru</title>

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            var toggleCheckbox = document.getElementById("togglePassword");

            passwordInput.type = toggleCheckbox.checked ? "text" : "password";
        }
    </script>
</head>

<body style="background-color: darkgray">
    <div class="container">
        <div class="contaner mt-5">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="text-center">
                        <h4>Selamat Datang</h4>
                        <small>Silahkan masukkan data diri Anda</small>
                    </div>
                    <div class="card bg-transparent mx-auto mt-5" style="width: 30rem">
                        <div class="container">
                            <div class="container">
                                <form method="POST" class="mb-4 mt-5" onsubmit="togglePassword();">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                            with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                    </div>
                                    <div class="form-check mt-2">
                                        <input type="checkbox" class="form-check-input" id="togglePassword"
                                            onclick="togglePassword()">
                                        <label class="form-check-label" for="togglePassword">Lihat Password</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
