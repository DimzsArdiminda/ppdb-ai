@extends('layout.ppdb-layout')
@section('pengecekan-data-diri', 'active')
@section('title', 'Pengecekan Ulang data diri')

@section('konten')
<form action="{{ url('/save-data-ppdb') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container mt-5">
        <div class="container">
            <div class="row d-flex mb-5 justify-content-center">
                {{-- isian berkas pribadi  --}}
                <div class="col-sm-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto vel id, molestiae itaque rem quia
                        eum. Laborum voluptatem consectetur ad nesciunt ducimus, quidem, amet, voluptatum nobis ipsam in
                        saepe ut!</p>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection