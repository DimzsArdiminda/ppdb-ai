@extends('layout.form-user')
@section('title', 'Akun Baru')

@section('konten')
    <div class="container">
        <div class="contaner mt-5">
            <form action="{{ url('kirim-data-user-baru') }}" method="post"  onsubmit="return validatePassword()">
                @csrf
                <div class="row">
                    <div class="text-center">
                        <h4>Selamat Datang</h4>
                        <small>Silahkan masukkan data diri Anda</small>
                    </div>
                    {{-- pengisian pertama --}}
                    <div class="col-sm-5 mx-auto">
                        <div class="card bg-transparent  mt-5">
                            <div class="container">
                                <div class="container mb-3">
                                    {{-- nama --}}
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="nama"
                                            placeholder="Masukan nama lengkap">
                                    </div>
                                    {{-- tanggal lahir --}}
                                    <div class="form-group mt-2">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                                    </div>
                                    {{-- nomer hp --}}
                                    <div class="form-group mt-2">
                                        <label for="nomer_hp">Nomer HP</label>
                                        <input type="text" name="no_hp" class="form-control" id="nomer_hp">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--isian kedua --}}
                    <div class="col-sm-5 mx-auto">
                        <div class="card bg-transparent mx-auto mt-5">
                            <div class="container ">
                                <div class="container mb-3">
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="dimasardiminda@gmail.com">
                                    </div>

                                    <div class="form-group mt-2 mb-2">
                                        <label for="password1">Password</label>
                                        <input type="password"  class="form-control " id="password1">
                                    </div>
                                    <div class="form-group mt-2 mb-2">
                                        <label for="password2">Konfirmasi Ulang Password</label>
                                        <input type="password" name="pass" class="form-control " id="password2">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="container mt-2">
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection