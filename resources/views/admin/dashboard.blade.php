@extends('layout.admin-layout')
@section('peserta-baru', 'active')
@section('title', '- Dashboard Utama')

@section('konten')
<div class="text-center">
    {{-- notifikasi --}}
    @if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif


    {{-- tabel --}}

    <h5>Data Murid Baru {{ date('Y')-1 }}/{{ date('Y') }}</h5>
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
                        <td> <a href="{{ $item->berkasIjazah }}" class="btn btn-outline-info">File berkas Ijazah di sini</a></td>
                        <td><a href="{{ $item->berkasFoto }}" class="btn btn-outline-info">File berkas foto</a></td>
                        <td> <a href="{{ $item->berkasPrestasi }}" class="btn btn-outline-info"> File berkas prestasi</a></td>
                        <td><a href="{{ $item->berkasKK }}" class="btn btn-outline-info">File berkas KK</a></td>
                        <td><a href="{{ $item->berkasIjazah }}" class="btn btn-outline-info">File Berkas Ijazah</a></td>
                        <td> {{ $item->created_at }} </td>
                        <td>{{ $item->updated_at }}</td>
                        <td>
                            <div class="container">
                                {{-- terima --}}
                                <div class="row mt-2">
                                    <button class="btn btn-primary terima-button" data-item-id="{{ $item->id }}">Terima</button>
                                </div>                               
                                {{-- tolak --}}
                                <div class="row mt-2">
                                    <button type="submit" class="btn btn-danger tolak-button"  data-item-id="{{ $item->id }}">tolak</button>
                                </div>
                                {{-- tandai --}}
                                <div class="row mt-2">
                                    <button class="btn btn-secondary tandai-button" data-item-id="{{ $item->id }}">Tandai</button>
                                </div>                                
                                {{-- hapus --}}
                                <div class="row mt-2">
                                    <form action="{{ route('admin.CabutLaporan', $item) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-warning" onclick="Swal.fire({
                                        title: 'Hapus data?',
                                        showCancelButton: true,
                                        reverseButtons: false,
                                      }).then((result) => {
                                        if (result.value) {
                                          this.form.submit();
                                        }
                                      })">Cabut berkas</button>
                                    </form>
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

<script src="https://unpkg.com/sweetalert@2"></script>

<script>
    // terima-button
    document.querySelectorAll('.terima-button').forEach(function(button) {
        button.addEventListener('click', function() {
            // Ambil ID unik dari atribut data
            var itemId = this.getAttribute('data-item-id');

            // Tampilkan SweetAlert popup dengan ID unik
            Swal.fire({
                title: 'Kirim Email - Terima Peserta didik', 
                html:
                    '<form id="emailForm-' + itemId + '" action="{{ url('kirim-notifikasi-terima') }}" method="get">' +
                    '@csrf' +
                    '<input type="type" class="swal2-input" name="email">' + // Isi email sesuai data baris
                    '</form>',
                showCancelButton: true,
                confirmButtonText: 'Kirim',
                preConfirm: () => {
                    // Otomatis submit formulir yang sesuai dengan tombol yang diklik
                    document.querySelector('#emailForm-' + itemId).submit();
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire('Email sedang dikirim...', '', 'info');
                }
            });
        });
    });

    // tolak
    document.querySelectorAll('.tolak-button').forEach(function(button) {
        button.addEventListener('click', function() {
            // Ambil ID unik dari atribut data
            var tolak = this.getAttribute('data-item-id');

            // Tampilkan SweetAlert popup dengan ID unik
            Swal.fire({
                title: 'Kirim Email - Tolak Peserta didik',
                html:
                    '<form id="emailForm-' + tolak + '" action="{{ url('kirim-notifikasi-tolak') }}" method="get">' +
                    '@csrf' +
                    '<input type="type" class="swal2-input" name="email">' + // Isi email sesuai data baris
                    '</form>',
                showCancelButton: true,
                confirmButtonText: 'Kirim',
                preConfirm: () => {
                    // Otomatis submit formulir yang sesuai dengan tombol yang diklik
                    document.querySelector('#emailForm-' + tolak).submit();
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire('Email sedang dikirim...', '', 'info');
                }
            });
        });
    });

    // tandai-button
  document.querySelectorAll('.tandai-button').forEach(function(button) {
    button.addEventListener('click', function() {
      // Ambil ID unik dari atribut data
      var itemId = this.getAttribute('data-item-id');

      // Dapatkan baris yang sesuai dengan item yang dipilih
      var baris = document.querySelector('tr[data-item-id="' + itemId + '"]');

      // Periksa apakah baris sudah ditandai
      if (baris.classList.contains('highlighted')) {
        // Jika sudah ditandai, hapus penandaan
        baris.classList.remove('highlighted');
      } else {
        // Jika belum ditandai, tambahkan penandaan
        baris.classList.add('highlighted');
      }

      // Tampilkan pesan bahwa item telah ditandai atau tidak lagi
      if (baris.classList.contains('highlighted')) {
        Swal.fire('Item telah ditandai!', '', 'info');
      } else {
        Swal.fire('Item telah tidak ditandai!', '', 'info');
      }
    });
  });
</script>




@endsection