@extends('layout.main')
@section('title', 'Detail Permohonan')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mt-2">Detail Permohonan</h3>
                <div class="card" style="width: auto">
                    <div class="card-body">

                        <h5 class="card-title">{{ $permohonan->nama_pemohon }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $permohonan->nomor_berkas }}</h6>
                        <p class="card-text">{{ $permohonan->badan_usaha }}</p>
                        <p class="card-text">{{ $permohonan->permohonan }}</p>
                        <p class="card-text">{{ $permohonan->nama_bangunan }}</p>
                        <p class="card-text">{{ $permohonan->alamat_bangunan }}</p>

                        <button type="submit" class="btn btn-primary">Edit</button>
                        <form action="{{ $permohonan->id }}" method="post" class="d-inline">
                           @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                        <a href="/permohonans" class="card-link">Back</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
