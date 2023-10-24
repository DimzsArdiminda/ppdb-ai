@extends('layout.ppdb-layout')
@section('data-diri','active')
@section('title','isi data diri')

@section('konten')

{{-- start content --}}
<div class="container mt-5">
    <div class="container mt-5">
        {{-- row notifikasi --}}
        <div class="row mt-5 mb-5">
            {{-- sapaan --}}
            <div class="col-sm-4 col-xl-l4 bg-primary rounded-3 ">
                <div class="container">
                    <div class="container mt-3 ">
                        <H4>Hi there</H4>
                        <p>selamat datang di portal pendaftaran online peserta didik baru SMAN ISLAM NASIONAL</p>
                        <small>Silahkan isi form pendaftaran di samping</small>
                        <div class="container">
                            <h5><Strong>Jadwal pendaftaran</Strong></h5>
                            <p>Pengumuman dalam setiap tahapan dapat di lihat di h+1 akhir tanggal pendaftaran di
                                setiap
                                tahapan</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list-group-item-action">
                                    <div class="container">
                                        <Strong>Pembukaan pendaftaran</Strong>
                                        <p> 15 Januari - 30 Januari 2023
                                        </p>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action">
                                    <Strong>Tahap Wawancara</Strong>
                                    <p>2 Febuary - 15 Febuary 2023</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- isian form --}}

            <div class="col-sm-8 col-xl-8">
                <div class="conatiner">
                    <div class="container ms-2">
                        <form action="{{ url('/send-data-diri') }}" method="post">
                            @csrf
                            {{-- nama --}}
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Dimas Ardiminda Edia Putra" value="{{ old('nama') }}">
                                @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- email  --}}
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="ardiminda@gmail.com" value="{{ old('email') }}">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Tempat Lahir --}}
                            <div class="mb-3">
                                <label for="Tempat_lahir" class="form-label">Kota/Kab Tempat Lahir</label>
                                <input type="text" class="form-control" id="Tempat_lahir" name="Tempat_lahir"
                                    value="{{ old('Tempat_lahir') }}" placeholder="Pasuruan">
                                @error('Tempat_lahir')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- tanggal lahir --}}
                            <div class="mb-3">
                                <label for="Tanggal_Lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="Tanggal_Lahir" name="Tanggal_Lahir"
                                    value="{{ old('Tanggal_Lahir') }}">
                                @error('Tanggal_Lahir')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- alamat rumah --}}
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" rows="3"
                                    name="alamat">@if(old("alamat")){{ old("alamat") }}@endif</textarea>
                                @error('alamat')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mb-3">submit</button>
                        </form>
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- row kedua --}}

    </div>
</div>
{{-- end of content --}}

<script>
    function confirmFormSubmission() {
        Swal.fire({
            title: 'Apakah Pengisian sudah benar?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Ya!',
            denyButtonText: 'Belum nih',
        }).then((result) => {
            if (result.isConfirmed) {
                // Menggunakan jQuery untuk mengambil data formulir
                var formData = new FormData($('#myForm')[0]);

                // Kirim data ke metode IsianPPDB menggunakan POST
                $.ajax({
                    url: '{{ url(' / send - data - diri ') }}',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        Swal.fire('Data berhasil terkirim!', '', 'success').then(() => {
                            // Redirect atau lakukan tindakan lain setelah pengiriman berhasil
                            // window.location.href = '/halaman-lain'; // Ganti dengan URL halaman yang sesuai
                        });
                    },
                    error: function () {
                        Swal.fire('Terjadi kesalahan!', '', 'error');
                    }
                });
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info');
            }
        });
    }
</script>
@endsection