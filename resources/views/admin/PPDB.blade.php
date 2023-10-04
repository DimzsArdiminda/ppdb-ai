@extends('layout.admin-layout')
@section('peserta-baru', 'active')
@section('title', '- PPDB')

@section('konten')
<div class="text-center">
    <h5>Data Murid Baru {{ date('Y')-1 }}/{{ date('Y') }}</h5>
    <div class="tabel-responsiv">
        <div id="tabel" class="table table-striped">
            {{-- baris utama --}}

            {{-- baris isi --}}
        </div>
    </div>
</div>
@endsection