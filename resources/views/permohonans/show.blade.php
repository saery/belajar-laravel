@extends('layout.main')
@section('title', 'Detail Permohonan')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mt-2">Detail Permohonan</h3>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">

                        <h5 class="card-title">{{ $permohonan->nama_pemohon }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $permohonan->nomor_berkas }}</h6>
                        <p class="card-text">{{ $permohonan->jenis_permohonan }}</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
