<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstarp --}}
    <link rel="stylesheet" href="{{ asset("asset/bootstrap/css/bootstrap.css") }}">
    <script src="{{ asset("asset/bootstrap/js/bootstrap.js") }}"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="container mt-5">
            <h2>
                Terimakasih sudah login
            </h2>
            <h4>
                Silahkan login ulang  <a href="{{ url('/Pendaftaran/login') }}" class="btn btn-outline-primary">disini</a>
            </h4>
        </div>
    </div>
</body>
</html>