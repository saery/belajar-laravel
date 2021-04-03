@extends('layout.main')
@section('title', 'Detail Berkas')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mt-2">Detail Berkas</h3>



                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $berkas->nama_pemohon }}</li>
                        <li class="list-group-item">{{ $berkas->nomor_berkas }}</li>
                        <li class="list-group-item">{{ $berkas->badan_usaha }}</li>
                        <li class="list-group-item">{{ $berkas->jenis_permohonan }}</li>
                        <li class="list-group-item">{{ $berkas->nama_bangunan }}</li>
                        <li class="list-group-item">{{ $berkas->alamat_bangunan }}</li>
                    </ul>

                <a href="{{ route('berkas_edit',["berkas" => $berkas->id]) }}" class="btn btn-primary">Edit</a>

                <form action="/berkas/{{ $berkas->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="/berkas" class="card-link">Back</a>
            </div>
        </div>
    </div>

@endsection
