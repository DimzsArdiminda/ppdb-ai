@extends('layout.form-user')
@section('title', 'Reset Sandi')


@section('konten')
<div class="container mt-5">
    <div class="container">
        <div>
            
            <div class="text-center">
                <h4>Reset Sandi</h4>
                <small>Silahkan masukan email anda dan tanggal lahir</small>
            </div>
            {{-- box --}}
            <div class="row bg-transparent">
                <div class="card  bg-transparent ">
                    <form action="" method="post">
                        <div class=" mt-3 mb-3">
                            <div class="container">
                                <div class="container mb-3">
                                    {{-- masukan akun --}}
                                    <div class="form-group">
                                        <label for="akun">masukan akun anda</label>
                                        <input type="email" name="akun" class="form-control" id="akun"
                                            placeholder="dimasardiminda@gmail.com">
                                    </div>
                                    {{-- tanggal lahir --}}
                                    <div class="form-group mt-2">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-5 mb-3">
                            <button type="submit" class="btn btn-outline-primary">cari </button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- end of box --}}
        </div>
    </div>
</div>
@endsection