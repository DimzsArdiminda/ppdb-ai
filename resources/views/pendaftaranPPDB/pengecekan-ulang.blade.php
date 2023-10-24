@extends('layout.ppdb-layout')
@section('pengecekan-data-diri', 'active')
@section('title', 'Pengecekan Ulang data diri')

@section('konten')
<form action="{{ url('/save-data-ppdb') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container mt-5">
        <div class="container">
            <div class="row d-flex mb-5 justify-content-center">
                {{-- isian berkas pribadi  --}}
                <div class="col-sm-5">
                    {{-- nama --}}
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="{{ session('data.nama') }}">
                    </div>
                    {{-- email  --}}
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ session('data.email') }}">
                    </div>

                    {{-- Tempat Lahir --}}
                    <div class="mb-3">
                        <label for="Tempat_lahir" class="form-label">Kota/Kab Tempat Lahir</label>
                        <input type="text" class="form-control" id="Tempat_lahir" name="Tempat_lahir"
                            value="{{ session('data.Tempat_lahir') }}">
                    </div>

                    {{-- tanggal lahir --}}
                    <div class="mb-3">
                        <label for="Tanggal_Lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="Tanggal_Lahir" name="Tanggal_Lahir"
                            value="{{ session('data.Tanggal_Lahir') }}">
                    </div>

                    {{-- alamat rumah --}}
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3" name="alamat">{{ session('data.alamat') }}</textarea>
                    </div>
                </div>
                {{-- isian form data diri --}}
                <div class="col-sm-5">
                    {{-- Scan Ijazah --}}
                    <div class="input-group">
                        <div class="mb-3">
                            <label for="Ijazah" class="form-label">Scan Ijazah</label>
                            @if (session()->has('berkas.Ijazah'))
                            <div class="card shadow bg-primary">
                                <div class="container mt-2 mb-2">
                                    <p>File Ijazah yang diunggah:</p>
                                    <p>{{ session('berkas.Ijazah') }}</p>
                                    <a href="{{ url('hapus-berkas/Ijazah') }}" class="btn btn-outline-danger">Hapus</a>
                                </div>
                            </div>
                            @else
                            <input class="form-control" type="file" id="Ijazah" name="Ijazah">
                            @endif
                        </div>
                    </div>
                    {{-- Scan Pas Foto 3 * 5 --}}
                    <div class="input-group">
                        <div class="mb-3">
                            <label for="foto" class="form-label">Scan Pas foto 3 * 5</label>
                            @if (session()->has('berkas.foto'))
                            <div class="card shadow bg-primary">
                                <div class="container mt-2 mb-2">
                                    <p>File Pas Foto yang diunggah:</p>
                                    <p>{{ session('berkas.foto') }}</p>
                                    <a href="{{ url('hapus-berkas/foto') }}" class="btn btn-outline-danger">Hapus</a>
                                </div>
                            </div>
                            @else
                            <input class="form-control" type="file" id="foto" name="foto">
                            @endif
                        </div>
                    </div>
                    {{-- Scan Prestasi --}}
                    <div class="input-group">
                        <div class="mb-3">
                            <label for="prestasi" class="form-label">Scan sertifikat prestasi</label>
                            @if (session()->has('berkas.prestasi'))
                            <div class="card shadow bg-primary">
                                <div class="container mt-2 mb-2">
                                    <p>File Sertifikat Prestasi yang diunggah:</p>
                                    <p>{{ session('berkas.prestasi') }}</p>
                                    <a href="{{ url('hapus-berkas/prestasi') }}"
                                        class="btn btn-outline-danger">Hapus</a>
                                </div>
                            </div>
                            @else
                            <input class="form-control" type="file" id="prestasi" name="prestasi">
                            @endif
                        </div>
                    </div>
                    {{-- Scan KK --}}
                    <div class="input-group">
                        <div class="mb-3">
                            <label for="KK" class="form-label" class="btn btn-outline-danger">Scan KK</label>
                            @if (session()->has('berkas.KK'))
                            
                            <div class="card shadow bg-primary">
                                <div class="container mt-2 mb-2">
                                    <p>File KK yang diunggah:</p>
                                    <p>{{ session('berkas.KK') }}</p>
                                    <a href="{{ url('hapus-berkas/KK') }}" class="btn btn-outline-danger">Hapus</a>
                                </div>
                            </div>
                            @else
                            <input class="form-control" type="file" id="KK" name="KK">
                            @endif
                        </div>
                    </div>
                    {{-- KTP ORANGTUA --}}
                    <div class="input-group">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Scan KTP Orang tua</label>
                            @if (session()->has('berkas.KTPORANGTUA'))
                            <div class="card shadow bg-primary">
                                <div class="container mt-2 mb-2">
                                    <p>File KTP Orang Tua yang diunggah:</p>
                                    <p>{{ session('berkas.KTPORANGTUA') }}</p>
                                    <a href="{{ url('hapus-berkas/KTPORANGTUA') }}"
                                        class="btn btn-outline-danger">Hapus</a>
                                </div>
                            </div>
                            @else
                            <input class="form-control" type="file" id="formFile" name="KTPORANGTUA">
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">kirim</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection