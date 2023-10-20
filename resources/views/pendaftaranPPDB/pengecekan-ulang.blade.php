@extends('layout.ppdb-layout')
@section('pengecekan-data-diri', 'active')
@section('title', 'Pengecekan Ulang data diri')

@section('konten')
<div class="container mt-5">
    <div class="container">
        <div class="row d-flex mb-5 justify-content-center">
            {{-- isian berkas pribadi  --}}
            <div class="col-sm-5">
                {{-- nama --}}
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ session('data.nama') }}">
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
                        value="{{ session('data.alamat') }}"></textarea>
                </div>
            </div>
            {{-- isian form data diri --}}
            <div class="col-sm-5">
                    @csrf
                    {{-- scan ijazah --}}
                    <div class="input-group">
                        <div class="mb-3">
                            <label for="Ijazah" class="form-label">Scan Ijazah</label>
                            <input class="form-control" type="file" id="Ijazah" name="Ijazah">
                        </div>
                    </div>
                    {{-- scan pas foto 3 * 5 --}}
                    <div class="input-group">
                        <div class="mb-3">
                            <label for="foto" class="form-label">Scan Pas foto 3 * 5</label>
                            <input class="form-control" type="file" id="foto" name="foto">
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
                            <label for="KK" class="form-label">Scan KK</label>
                            <input class="form-control" type="file" id="KK" name="KK">
                        </div>
                    </div>
                    {{-- KTP ORANGTUA --}}
                    <div class="input-group">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Scan KTP Orang tua</label>
                            <input class="form-control" type="file" id="formFile" name="KTP-ORANGTUA">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">kirim</button>
                </form>
            </div>


        </div>
    </div>
</div>
@endsection