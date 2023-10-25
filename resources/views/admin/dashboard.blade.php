@extends('layout.admin-layout')
@section('daf-akun', 'active')
@section('title', '- Dashboard Utama')

@section('konten')
<div class="text-center">
    <h5>Data Akun baru</h5>

    <div class="row bg-primary bg-opacity-50 rounded-4 d-flex ">
        <div class="table-responsive b5 mt-3">
            <table class="table table-striped rounded-4" id="tabel">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>nama</th>
                        <th>email</th>
                        <th>Tempat Lahir</th>
                        <th>tanggal lahir</th>
                        <th>alamat</th>
                        <th>ijazah</th>
                        <th>path foto 3x5</th>
                        <th>prestasi</th>
                        <th>KK</th>
                        <th>KTP</th>
                        <th>created at</th>
                        <th>update at</th>
                        <th>action</th>
                    </tr>
                </thead>
                {{-- baris isi --}}
                @forelse ($banyak_data as $item)
                <thead>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->Tempat_lahir }}</td>
                        <td>{{ $item->Tanggal_Lahir }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->berkasIjazah }}</td>
                        <td>{{ $item->berkasFoto }}</td>
                        <td>{{ $item->berkasPrestasi }}</td>
                        <td>{{ $item->berkasKK }}</td>
                        <td>{{ $item->berkasIjazah }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>
                            <div class="container">
                                <div class="row mt-2">
                                    {{-- terima --}}
                                    <a href="#" class="btn btn-primary"> terima </a>
                                </div>
                                <div class="row mt-2">
                                    <a href="#" class="btn btn-secondary"> tolak </a>
                                </div>
                                <div class="row mt-2">
                                    <a href="#" class="btn btn-success"> tandai </a>
                                </div>
                                <div class="row mt-2">
                                    <a href="#" class="btn btn-success"> hapus </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <td colspan="14" class="text-center">Tidak ada data...</td>
                    @endforelse
                </thead>
        </div>
    </div>
</div>
</div>

@endsection