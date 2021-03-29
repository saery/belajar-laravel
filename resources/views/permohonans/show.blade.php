@extends('layout.main')
@section('title', 'Detail Permohonan')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mt-2">Detail Permohonan</h3>
                <div class="card" style="width: auto">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">{{ $permohonan->nomor_berkas }}</h6>
                        <h5 class="card-title">{{ $permohonan->nama_pemohon }}</h5>
                        <p class="card-text">{{ $permohonan->badan_usaha }}</p>
                        <p class="card-text">{{ $permohonan->permohonan }}</p>
                        <p class="card-text">{{ $permohonan->nama_bangunan }}</p>
                        <p class="card-text">{{ $permohonan->alamat_bangunan }}</p>
                        <p class="card-text">{{ $permohonan->created_at }}</p>

                        <a href="/permohonans/{{ $permohonan->id }}/edit" class="btn btn-primary">Edit</a>

                        <form action="/permohonans/{{ $permohonan->id }}" method="post" class="d-inline">
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
