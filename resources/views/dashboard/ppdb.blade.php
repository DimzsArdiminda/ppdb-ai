@extends("layout.master-layout")
@section("ppdb", "active")
@section("title", "PPDB")

@section("konten")
<div class="container">
    <div class="container">
        <h4 class="text-center mt-5 animate__animated animate__fadeInDown  mb-5">SELAMAT DATANG CALON PEMIMPIN DI ERA
            5.0</h4>

            @if(session('success'))
            <div class="alert alert-success mt-3 mb-3">
                {{ session('success') }}
            </div>
            @endif
        {{-- KONTEN --}}
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-sm-5">
                <h5 class="text-center">Syarat dan Ketentuan</h5>
                <hr>
                <div class="container">
                    <small>berikut adalah syarat dan ketentuan pendaftran peserta didik baru</small>
                    <ul>
                        <li>
                            lulus ujian nasional dengan minimal nilai rata rata 85
                        </li>
                        <li>
                            memiliki nilai rata rata rapor minimal 85
                        </li>
                        <li>
                            tidak memiliki catatan kriminal
                        </li>
                        <li>
                            fotocopy KK dan Rapot ujian
                        </li>
                    </ul>
                </div>
            </div>
            {{-- verikal line --}}

            <div class="col-sm-5">
                <h5 class="text-center">Jadwal</h5>
                <hr>
                <div class="container">
                    <div class="container">
                        <p>Pengumuman dalam setiap tahapan dapat di lihat di h+1 akhir tanggal pendaftaran di setiap
                            tahapan</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <Strong>Pembukaan pendaftaran</Strong>
                                <p> 15 Januari - 30 Januari 2023
                                </p>
                            </li>
                            <li class="list-group-item">
                                <Strong>Tahap Wawancara</Strong>
                                <p>2 Febuary - 15 Febuary 2023</p>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-outline-info mt-3"> Download Jadwal Pendaftaran</a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-2 mb-5">
                <h6>Sudah siap dengan perkembangan teknologi sekarang???
                    <br>
                    Daftarkan dirimu segera dan jadi bagian dari perkembangan teknologi bernuansa islami
                </h6>
                <a href="{{ url('PPDB/pengisian-data-diri') }}" class="btn btn-light mt-3">DAFTAR SEKARANG !!!</a>
            </div>

        </div>
    </div>
</div>
@endsection