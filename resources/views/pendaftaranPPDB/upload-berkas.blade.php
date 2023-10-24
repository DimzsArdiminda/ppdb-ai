@extends('layout.ppdb-layout')
@section('upload-berkas', 'active')
@section('konten')
<div class="container">
    <div class="container">
        <div class="row mt-5 d-flex mb-5 justify-content-center">
            <div class="col-sm-6">
                <form action="{{ url('/upload-file') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- Scan Ijazah --}}
                    <div class="mb-3">
                        <label for="Ijazah" class="form-label">Scan Ijazah</label>
                        <input class="form-control" type="file" id="Ijazah" name="Ijazah" >
                        @error('Ijazah')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Scan Pas Foto 3 * 5 --}}
                    <div class="mb-3">
                        <label for="foto" class="form-label">Scan Pas Foto 3 * 5</label>
                        <input class="form-control" type="file" id="foto" name="foto">
                        @error('foto')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Scan Prestasi --}}
                    <div class="mb-3">
                        <label for="prestasi" class="form-label">Scan Sertifikat Prestasi</label>
                        <input class="form-control" type="file" id="prestasi" name="prestasi">
                        @error('prestasi')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Scan KK (Kartu Keluarga) --}}
                    <div class="mb-3">
                        <label for="KK" class="form-label">Scan KK (Kartu Keluarga)</label>
                        <input class="form-control" type="file" id="KK" name="KK">
                        @error('KK')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Scan KTP Orang Tua --}}
                    <div class="mb-3">
                        <label for="KTPORANGTUA" class="form-label">Scan KTP Orang Tua</label>
                        <input class="form-control" type="file" id="KTPORANGTUA" name="KTPORANGTUA">
                        @error('KTPORANGTUA')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <button type="submit" class="btn btn-outline-primary">Kirim</button>
                </form>
            </div>
            <div class="col-sm-4 bg-info rounded-3">
                <div class="container mt-2 mb-2">
                    <h4>Isi form berikut dengan mengapload: </h4>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">1. Scan Ijazah </li>
                        <li class="list-group-item list-group-item-action">2. Scan Pas Foto 3 * 5 </li>
                        <li class="list-group-item list-group-item-action">3. Scan prestasi jika ada </li>
                        <li class="list-group-item list-group-item-action">4. Scan KK </li>
                    </ul>
                    <small>semua upload berkas <br> <b>wajib berformat pdf</b> kecuali pas foto harus jpg</small> <br>
                    <small>format nama file sebagai berikut <br><b> scan_Ijazah.pdf
                            <br> pas_foto.jpg <br> scan_prestasi.pdf <br> scan_kk.pdf <br> scan_ktp_orangtua.pdf
                        </b>
                    </small>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection