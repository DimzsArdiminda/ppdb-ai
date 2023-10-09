
@extends('layout.form-user')

@section('title', 'Login User')
@section('konten')
    <div class="container">
        <div class="contaner mt-5">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="text-center">
                        <h4>Selamat Datang</h4>
                        <small>Silahkan masukkan data diri Anda</small>
                        <br><a href="{{ url('/') }}" class="btn btn-info">kembali ke awal</a>
                    </div>
                    <div class="card bg-transparent mx-auto mt-3" style="width: 30rem">
                        <div class="container">
                            <div class="container">
                                <form method="POST" class="mb-4 mt-5" onsubmit="togglePassword();">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                            with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                    </div>
                                    <div class="form-check mt-2">
                                        <input type="checkbox" class="form-check-input" id="togglePassword"
                                            onclick="togglePassword()">
                                        <label class="form-check-label" for="togglePassword">Lihat Password</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <p> lupa sandi? <a href="{{ url('Pendaftaran/reset-akun') }}" class="btn btn-outline-secondary"> reset disini </a> </p> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

