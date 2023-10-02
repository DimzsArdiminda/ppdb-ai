@extends('layout.ppdb-layout')
@section('upload-berkas', 'active')
@section('konten')
<div class="container">
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-sm-6">
                <form action="" method="post">
                    {{-- scan ijazah --}}
                    <div class="input-group">
                        <div class="mb-3">
                            <label for="file-ijazah" class="form-label">Scan Ijazah</label>
                            <input class="form-control" type="file" id="file-ijazah" name="Ijazah">
                        </div>
                    </div>
                    {{-- scan pas foto 3 * 5 --}}
                    <div class="input-group">
                        <div class="mb-3">
                            <label for="file-foto" class="form-label">Scan Pas foto 3 * 5</label>
                            <input class="form-control" type="file" id="file-foto" name="foto">
                        </div>
                    </div>
                    {{-- scan prestasi --}}
                    <div class="input-group">
                        <div class="mb-3">
                            <label for="prestasi" class="form-label">Scan sertifikart prestasi</label>
                            <input class="form-control" type="file" id="prestasi" name="prestasi">
                        </div>
                    </div>
                    {{-- scan kk --}}
                    <div class="input-group">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Scan sertifikart prestasi</label>
                            <input class="form-control" type="file" id="formFile" name="prestasi">
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
                    <small>semua penguploadn berkas <b>wajib berformat pdf</b></small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection