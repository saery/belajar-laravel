@extends('layout.main')
@section('title', 'Permohonan')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mt-2">Daftar Permohonan</h3>

                <a href="/permohonans/create" class="btn btn-primary my-3">Tambah Data</a>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <ul class="list-group">
                    @foreach($permohonans as $permohonan)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $permohonan->nama_pemohon }}
                        <a href="/permohonans/{{ $permohonan->id }}" class="badge bg-info text-dark">Detail</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection
