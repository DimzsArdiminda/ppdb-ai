@extends('layout.ppdb-layout')
@section('upload-berkas', 'active')
@section('konten')
<div class="container">
    <div class="container">
        @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        <div class="row mt-5 d-flex mb-5 justify-content-center  ">
            <div class="col-sm-6 bg-primary rounded-3 bg-opacity-50 ">
                <form action="{{ url('/upload-file') }}" method="post" enctype="multipart/form-data">
                    @csrf
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
                        <textarea class="form-control" id="alamat" rows="3"
                            name="alamat">{{ session('data.alamat') }}</textarea>
                    </div>

            </div>
            <div class="col-sm-6 bg-info rounded-3">
                <div class="container mt-2 mb-2">
                    {{-- Scan Ijazah --}}
                    <div class="mb-3">
                        <label for="Ijazah" class="form-label">Scan Ijazah</label>
                        <input class="form-control" type="file" id="Ijazah" name="berkasIjazah">
                        @error('berkasIjazah')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Scan Pas Foto 3 * 5 --}}
                    <div class="mb-3">
                        <label for="foto" class="form-label">Scan Pas Foto 3 * 5</label>
                        <input class="form-control" type="file" id="foto" name="berkasFoto" accept="image/jpg">
                        @error('berkasFoto')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Scan Prestasi --}}
                    <div class="mb-3">
                        <label for="prestasi" class="form-label">Scan Sertifikat Prestasi</label>
                        <input class="form-control" type="file" id="prestasi" name="berkasPrestasi">
                        @error('berkasPrestasi')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Scan KK (Kartu Keluarga) --}}
                    <div class="mb-3">
                        <label for="KK" class="form-label">Scan KK (Kartu Keluarga)</label>
                        <input class="form-control" type="file" id="KK" name="berkasKK">
                        @error('berkasKK')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Scan KTP Orang Tua --}}
                    <div class="mb-3">
                        <label for="KTPORANGTUA" class="form-label">Scan KTP Orang Tua</label>
                        <input class="form-control" type="file" id="KTPORANGTUA" name="berkasKTPOrangTua">
                        @error('berkasKTPOrangTua')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="button" class="btn btn-primary mb-3" onclick="confirmUpload()">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection