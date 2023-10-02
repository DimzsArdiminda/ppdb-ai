@extends('layout.master-layout')
@section('dashboard', 'active')
@section("title", "Dashboard")
@section('konten')
    
    
    {{-- carousel --}}
    <div class="">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="asset/img/carousel/welkom.png" class="d-block w-100" alt="welkom">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Welcome to The Islam High School International</h5>
                        <p>together to create faith-based education</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="asset/img/carousel/slogan.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>international standard Islamic school</h5>
                        <p>embrace globalization within Islamic norms</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="asset/img/carousel/visi.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Visi Misi</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    {{-- end of crousel --}}
    
    {{-- ucapakan selamat datang --}}
    <div class="container mt-5">
        <div class="container">
            {{-- ucapan selamat datang --}}
            <div class="row text-center">
                <h3>Welcome to SMAN ISLAM INTERNASIONAL</h3>
                <P>Be bright in Islam Community</P>
            </div>
            {{-- end of ucapan selamat datang --}}
            
            {{-- ucapan selamat datang dari kepala sekolah --}}
            <div class="container mb-5">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="container">
                            <h4>Assalamualaikum Wr Wb</h4>
                            <br>
                            <p>Selamat datang di SMA Islam Internasional! Kami sangat senang Anda bergabung dengan
                                komunitas
                                pendidikan kami yang dinamis. Kami berkomitmen untuk memberikan pendidikan berkualitas
                                tinggi yang berlandaskan nilai-nilai Islam. Bersama-sama, mari kita berusaha untuk
                                mencapai
                                prestasi yang luar biasa dan membentuk masa depan yang cerah. Selamat belajar!"
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card d-flex justify-content-center" style="width: 100%;">
                            <img src="asset/img/struktur/kepsek.jpg" alt="kepsek" class="rounded-3 ms-5" width="100rem">
                            <div class="card-body">
                                <p>Bambang Sarmita, ST, MT, PhD</p>
                                <small>Kepala sekolah 2023 - 2028</small>
                            </div>
                        </div>
                        
                        
                        <div class="container">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Ringkasan Statistika sekolah --}}
    <div class="container mb-5">
        <div class="container">
            <div class="row">
                <h5>Progres Tahun Ajaran 2022 - 2023</h5>
                <div class="container">
                    {{-- prestasi --}}
                    <div class="container mb-3">
                        <h6>Peningkatan prestasi dari tahun 2021 - 2022 </h6>
                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="87"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-success" style="width: 87%">87%</div>
                    </div>
                </div>
                
                {{-- Jumlah Lulusn di terima di PTN negeri angkatan 2022 --}}
                <div class="container mb-3">
                    <h6>Jumlah Lulusn di terima di PTN negeri angkatan 2022 </h6>
                    <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="96"
                    aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar bg-info text-dark" style="width: 96%">96%</div>
                </div>
            </div>
            
        </div>
    </div>
    
    {{-- Nilai rata rata  --}}
    <h5 class="mt-5">Grafik Nilai rata rata kelas 12 Mipa TP2022 - 2023 </h5>
    
    <!-- Tempatkan elemen grafik di sini -->
    <canvas id="IPA" width="400" height="200"></canvas>
    
    <h5 class="mt-3">Grafik Nilai rata rata kelas 12 Ips TP2022 - 2023</h5>
    <!-- Tempatkan elemen grafik di sini -->
    <canvas id="IPS" width="400" height="200"></canvas>
    
    <h5 class="mt-5">Grafik Nilai rata rata kelas 11 Mipa TP2022 - 2023 </h5>
    <!-- Tempatkan elemen grafik di sini -->
    <canvas id="IPA-11" width="400" height="200"></canvas>
    
    <h5 class="mt-3">Grafik Nilai rata rata kelas 11 Ips TP2022 - 2023</h5>
    <!-- Tempatkan elemen grafik di sini -->
    <canvas id="IPS-11" width="400" height="200"></canvas>
    
    <h5 class="mt-3">Grafik Nilai rata rata kelas 10 Mipa TP2022 - 2023</h5>
    <!-- Tempatkan elemen grafik di sini -->
    <canvas id="IPA-10" width="400" height="200"></canvas>
    
    <h5 class="mt-3">Grafik Nilai rata rata kelas 10 IPS TP2022 - 2023</h5>
    <!-- Tempatkan elemen grafik di sini -->
    <canvas id="IPS-10" width="400" height="200"></canvas>
    {{-- Kalender akademik dan  --}}

            {{-- Ekstarkurikuler --}}
            <div class="row mt-5 d-flex justify-content-center">
                <h5>Ekstarkurikuler di SMAN Islam Nasional</h5>
                {{-- voly --}}
                <div class="col-xl-1 d-flex justify-content-center " style="width: 20rem">
                    <div class="container">
                        <div class="card mt-2 mb-2" style="width: 18rem">
                            <img src="asset/img/ekskul/voli.jpeg" alt="voli">
                            <div class="card-body">
                                <h5>Voli</h5>
                                <hr>
                                <p>didirakan pada tahun 2009, Ekstarkurikuler Voli sudah mengantongi banyak piala sperti
                                    Polri CUP 2022, Piala Gubernur 2021, dan lain lain</p>
                                    
                                    <a href="#" class="btn btn-primary">Ketua Ekstakr Voli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Badminton --}}
                    <div class="col-xl-1 d-flex justify-content-center " style="width: 20rem">
                        <div class="container">
                            <div class="card mt-2 mb-2" style="width: 18rem">
                                <img src="asset/img/ekskul/badminton.jpeg" alt="voli">
                                <div class="card-body">
                                    <h5>badminton</h5>
                                    <hr>
                                    {{-- caption badminton --}}
                                    <p>Ekstarkurikuler yang akan mendidik para murid menjadi pemain profesional dan sudah
                                        memiliki pelatih yang
                                        yang memiliki rekam jejak yang epic
                                    </p>
                                    
                                    <a href="#" class="btn btn-primary">Ketua Ekstakr Voli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- basket  --}}
                    <div class="col-xl-1 d-flex justify-content-center " style="width: 20rem">
                        <div class="container">
                            <div class="card mt-2 mb-2" style="width: 18rem">
                                <img src="asset/img/ekskul/basket.jpg" alt="basket">
                                <div class="card-body">
                                    <h5>Voli</h5>
                                    <hr>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos consequuntur
                                        perspiciatis quae ea reiciendis obcaecati, laborum</p>

                                        <a href="#" class="btn btn-primary">Ketua Ekstakr Voli</a>
                                    </div>
                                </div>
                            </div>
                </div>
                
            </div>
            
            {{-- ekskul 2 --}}
            {{-- Ekstarkurikuler --}}
            <div class="row mt-5 d-flex justify-content-center">
                {{-- voly --}}
                <div class="col-xl-1 d-flex justify-content-center " style="width: 20rem">
                    <div class="container">
                        <div class="card mt-2 mb-2" style="width: 18rem">
                            <img src="asset/img/ekskul/voli.jpeg" alt="voli">
                            <div class="card-body">
                                <h5>Voli</h5>
                                <hr>
                                <p>didirakan pada tahun 2009, Ekstarkurikuler Voli sudah mengantongi banyak piala sperti
                                    Polri CUP 2022, Piala Gubernur 2021, dan lain lain</p>

                                <a href="#" class="btn btn-primary">Ketua Ekstakr Voli</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Badminton --}}
                <div class="col-xl-1 d-flex justify-content-center " style="width: 20rem">
                    <div class="container">
                        <div class="card mt-2 mb-2" style="width: 18rem">
                            <img src="asset/img/ekskul/badminton.jpeg" alt="voli">
                            <div class="card-body">
                                <h5>badminton</h5>
                                <hr>
                                {{-- caption badminton --}}
                                <p>Ekstarkurikuler yang akan mendidik para murid menjadi pemain profesional dan sudah
                                    memiliki pelatih yang
                                    yang memiliki rekam jejak yang epic
                                </p>

                                <a href="#" class="btn btn-primary">Ketua Ekstakr Voli</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- basket  --}}
                <div class="col-xl-1 d-flex justify-content-center " style="width: 20rem">
                    <div class="container">
                        <div class="card mt-2 mb-2" style="width: 15rem">
                            <img src="asset/img/ekskul/basket.jpg" alt="basket">
                            <div class="card-body">
                                <h5>Voli</h5>
                                <hr>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos consequuntur
                                    perspiciatis quae ea reiciendis obcaecati, laborum</p>

                                <a href="#" class="btn btn-primary">Ketua Ekstakr Voli</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Ekstarkurikuler --}}
                <div class="row mt-5 d-flex justify-content-center">
                    {{-- voly --}}
                    <div class="col-xl-1 d-flex justify-content-center " style="width: 20rem">
                        <div class="container">
                            <div class="card mt-2 mb-2" style="width: 18rem">
                                <img src="asset/img/ekskul/voli.jpeg" alt="voli">
                                <div class="card-body">
                                    <h5>Voli</h5>
                                    <hr>
                                    <p>didirakan pada tahun 2009, Ekstarkurikuler Voli sudah mengantongi banyak piala
                                        sperti
                                        Polri CUP 2022, Piala Gubernur 2021, dan lain lain</p>

                                    <a href="#" class="btn btn-primary">Ketua Ekstakr Voli</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Badminton --}}
                    <div class="col-xl-1 d-flex justify-content-center " style="width: 20rem">
                        <div class="container">
                            <div class="card mt-2 mb-2" style="width: 18rem">
                                <img src="asset/img/ekskul/badminton.jpeg" alt="voli">
                                <div class="card-body">
                                    <h5>badminton</h5>
                                    <hr>
                                    {{-- caption badminton --}}
                                    <p>Ekstarkurikuler yang akan mendidik para murid menjadi pemain profesional dan
                                        sudah memiliki pelatih yang
                                        yang memiliki rekam jejak yang epic
                                    </p>

                                    <a href="#" class="btn btn-primary">Ketua Ekstakr Voli</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- basket  --}}
                    <div class="col-xl-1 d-flex justify-content-center " style="width: 20rem">
                        <div class="container">
                            <div class="card mt-2 mb-2" style="width: 15rem">
                                <img src="asset/img/ekskul/basket.jpg" alt="basket">
                                <div class="card-body">
                                    <h5>Voli</h5>
                                    <hr>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos consequuntur
                                        perspiciatis quae ea reiciendis obcaecati, laborum</p>

                                    <a href="#" class="btn btn-primary">Ketua Ekstakr Voli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end of ekstrakkurikuler --}}



            {{-- script grafik --}}
            <script>
                // Data grafik (contoh data)
                var data = {
                    labels: ["12 - MIPA 1", "12 - MIPA 2", "12 - MIPA 3", "12 - MIPA 4", "12 - MIPA 5",
                        "12 - MIPA 6"
                    ],
                    datasets: [{
                        label: "Nilai",
                        data: [90, 88, 98, 96, 85, 83],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                };

                // Konfigurasi grafik
                var options = {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                };

                // Inisialisasi grafik menggunakan Chart.js
                var ctx = document.getElementById('IPA').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: data,
                    options: options
                });

                // ips
                // Data grafik (contoh data)
                var data = {
                    labels: ["12 - IPS 1", "12 - IPS 2", "12 - IPS 3", "12 - IPS 4", "12 - IPS 5", "12 - IPS 6"],
                    datasets: [{
                        label: "Nilai",
                        data: [88, 99, 90, 87, 83, 85],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                };

                // Konfigurasi grafik
                var options = {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                };

                // Inisialisasi grafik menggunakan Chart.js
                var ctx = document.getElementById('IPS').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: data,
                    options: options
                });

                // kelas 11
                // Data grafik (contoh data)
                var data = {
                    labels: ["11 - MIPA 1", "11 - MIPA 2", "11 - MIPA 3", "11 - MIPA 4", "11 - MIPA 5",
                        "11 - MIPA 6"
                    ],
                    datasets: [{
                        label: "Nilai",
                        data: [90, 88, 98, 96, 85, 83],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                };

                // Konfigurasi grafik
                var options = {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                };

                // Inisialisasi grafik menggunakan Chart.js
                var ctx = document.getElementById('IPA-11').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: data,
                    options: options
                });

                // ips
                // Data grafik (contoh data)
                var data = {
                    labels: ["11 - IPS 1", "11 - IPS 2", "11 - IPS 3", "11 - IPS 4", "11 - IPS 5", "11 - IPS 6"],
                    datasets: [{
                        label: "Nilai",
                        data: [88, 99, 90, 87, 83, 85],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                };

                // Konfigurasi grafik
                var options = {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                };

                // Inisialisasi grafik menggunakan Chart.js
                var ctx = document.getElementById('IPS-11').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: data,
                    options: options
                });


                // kelas 10
                // Data grafik (contoh data)
                var data = {
                    labels: ["10 - MIPA 1", "10 - MIPA 2", "10 - MIPA 3", "10 - MIPA 4", "10 - MIPA 5",
                        "10 - MIPA 6"
                    ],
                    datasets: [{
                        label: "Nilai",
                        data: [90, 88, 98, 96, 85, 83],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                };

                // Konfigurasi grafik
                var options = {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                };

                // Inisialisasi grafik menggunakan Chart.js
                var ctx = document.getElementById('IPA-10').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: data,
                    options: options
                });

                // ips
                // Data grafik (contoh data)
                var data = {
                    labels: ["10 - IPS 1", "10 - IPS 2", "10 - IPS 3", "10 - IPS 4", "10 - IPS 5", "10 - IPS 6"],
                    datasets: [{
                        label: "Nilai",
                        data: [88, 99, 90, 87, 83, 85],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                };

                // Konfigurasi grafik
                var options = {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                };

                // Inisialisasi grafik menggunakan Chart.js
                var ctx = document.getElementById('IPS-10').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: data,
                    options: options
                });
            </script>
            {{-- end of nilai rata rata --}}
        </div>
    </div>
    {{-- end of ringkasan Statistika sekolah --}}
@endsection
