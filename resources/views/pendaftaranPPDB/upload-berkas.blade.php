@extends('layout.ppdb-layout')
@section('upload-berkas', 'active')
@section('konten')
<div class="container">
    <div class="container">
        <div class="row mt-5 d-flex mb-5 justify-content-center">
            <div class="col-sm-6">
                <form action="{{ url('/upload-file') }}" method="post">
                    @csrf
                    {{-- scan ijazah --}}
                    <div class="input-group">
                        <div class="mb-3">
                            <label for="Ijazah" class="form-label">Scan Ijazah</label>
                            <input class="form-control" type="file" id="Ijazah" name="Ijazah">
                            @error('Ijazah')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- scan pas foto 3 * 5 --}}
                    <div class="input-group">
                        <div class="mb-3">
                            <label for="foto" class="form-label">Scan Pas foto 3 * 5</label>
                            <input class="form-control" type="file" id="foto" name="foto">
                            @error('foto')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- scan prestasi --}}
                    <div class="input-group">
                        <div class="mb-3">
                            <label for="prestasi" class="form-label">Scan sertifikart prestasi</label>
                            <input class="form-control" type="file" id="prestasi" name="prestasi">
                            @error('prestasi')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- scan kk --}}
                    <div class="input-group">
                        <div class="mb-3">
                            <label for="KK" class="form-label">Scan KK</label>
                            <input class="form-control" type="file" id="KK" name="KK">
                            @error('KK')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- KTP ORANGTUA --}}
                    <div class="input-group">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Scan KTP Orang tua</label>
                            <input class="form-control" type="file" id="formFile" name="KTP-ORANGTUA">
                            @error('KTP-ORANGTUA')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">kirim</button>
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
                    <small>semua upload berkas <br> <b>wajib berformat pdf</b></small> <br>
                    <small>format nama file sebagai berikut <br><b> scan_ijazah.pdf
                        <br> scan_foto.pdf <br> scan_prestasi.pdf <br> scan_kk.pdf <br> scan_ktp_orangtua.pdf
                        </b>
                    </small>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection