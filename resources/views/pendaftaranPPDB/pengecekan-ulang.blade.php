@extends('layout.ppdb-layout')
@section('pengecekan-data-diri', 'active')
@section('title', 'Pengecekan Ulang data diri')

@section('konten')
<form action="{{ url('/save-data-ppdb') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container mt-5">
        <div class="container">
            <h4 class="text">Berikut adalah tata cara untuk pendafatran</h4>
            <div class="row d-flex mb-5 justify-content-center  bg-primary bg-opacity-50 rounded-3">
                {{-- intruksi --}}
                {{-- isian berkas pribadi  --}}
                <div class="col-sm-6   ">
                    <ul class="list-group list-group-flush mt-4 mb-4 rounded-3">
                        <li class="list-group-item">1. Siapkan semua file yang di minta</li>
                        <li class="list-group-item">2. Upload pada form yang di sediakan</li>
                        {{-- <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li> --}}
                    </ul>
                </div>
                {{-- list sayarat  --}}
                <div class="col-sm-6  ">
                    <ul class="list-group list-group-flush mt-4 mb-4 rounded-3">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection