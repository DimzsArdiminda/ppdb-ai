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

    {{-- chart.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

    <!-- Include SweetAlert2 CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Home - @yield("title")</title>
    <style>
        .highlight {
            background-color: yellow;
            font-weight: bold;
        }
    </style>

</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="#">SMAN 1 ISLAM NASIONAL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @yield('dashboard')" aria-current="page"
                            href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('sej')" href="{{ url('sejarah') }}">Sejarah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('ppdb')" href="{{ url('PPDB') }}">PPDB</a>
                    </li>
                </ul>
                <!-- ... (bagian lain dari kode HTML) ... -->
                <form class="d-flex" role="search" onsubmit="return handleSearch()">
                    <input class="form-control me-2" type="search" id="searchInput" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <!-- ... (bagian lain dari kode HTML) ... -->


            </div>
        </div>
    </nav> {{-- end of navbar --}}
    @yield('konten')

    <script>
        function handleSearch() {
            var query = document.getElementById('searchInput').value.toLowerCase();
            var pageContent = document.body.innerHTML;

            // Menyimpan nilai asli dari konten halaman
            var originalContent = pageContent;

            // Mengganti konten halaman dengan versi tanpa highlight
            pageContent = pageContent.replace(new RegExp('<span class="highlight">', 'gi'), '');
            pageContent = pageContent.replace(new RegExp('</span>', 'gi'), '');

            // Menambahkan highlight pada kata yang ditemukan
            pageContent = pageContent.replace(new RegExp(query, 'gi'), function (match) {
                return '<span class="highlight">' + match + '</span>';
            });

            // Memasukkan konten yang telah diubah kembali ke dalam halaman
            document.body.innerHTML = pageContent;

            // Mencari elemen yang pertama kali ditemukan
            var highlightedElement = document.querySelector('.highlight');

            if (highlightedElement) {
                // Menggulir halaman ke posisi elemen yang ditemukan
                highlightedElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center',
                    inline: 'center'
                });
            } else {
                // Mengembalikan nilai asli jika tidak ditemukan
                document.body.innerHTML = originalContent;
                alert('Kata atau kalimat tidak ditemukan di halaman.');
            }

            // Mengembalikan false agar form tidak benar-benar dikirim
            return false;
        }
    </script>

<script>
    function confirmUpload() {
        Swal.fire({
            title: 'Konfirmasi',
            text: 'Apakah file yang diupload sudah benar?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, lanjutkan!',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna menyetujui, lanjutkan dengan mengirim formulir
                document.querySelector('form').submit();
            }
        });
    }
</script>


</body>

</html>