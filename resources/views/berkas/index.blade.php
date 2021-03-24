@extends('layout.main')
@section('title', 'Daftar Berkas')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h3 class="mt-2">Daftar Berkas</h3>

                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nomor Berkas</th>
                        <th scope="col">Nama Pemohon</th>
                        <th scope="col">Jenis Permohonan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                     @foreach ($berkas as $pemohon)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $pemohon->nomor_berkas }}</td>
                            <td>{{ $pemohon->nama_pemohon }}</td>
                            <td>{{ $pemohon->jenis_permohonan }}</td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-auto">
{{--                                    <a href ="#" class="btn btn-warning btn-sm me-md-2" type="button">Info</a>--}}

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Detail
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Detail Berkas</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <dt class="fw-bold">Pemohon :</dt> <p>{{ $pemohon->nama_pemohon }}</p>
                                                    <dt class="fw-bold">Kelembagaan :</dt> <p>{{ $pemohon->badan_usaha }}</p>
                                                    <dt class="fw-bold">Jenis Permohonan :</dt> <p>{{ $pemohon->jenis_permohonan }}</p>
                                                    <dt class="fw-bold">Fungsi Bangunan :</dt> <p>{{ $pemohon->nama_bangunan }}</p>
                                                    <dt class="fw-bold">Alamat Bangunan :</dt> <p>{{ $pemohon->alamat_bangunan }}</p>


{{--                                                    Nama Pemohon :  <p>{{ $pemohon->nama_pemohon }}</p>--}}
{{--                                                    Kelembagaan : <p>{{ $pemohon->badan_usaha }}</p>--}}
{{--                                                    Jenis Permohonan : <p>{{ $pemohon->jenis_permohonan }}</p>--}}
{{--                                                    Nama Bangunan : <p>{{ $pemohon->nama_bangunan }}</p>--}}
{{--                                                    Alamat Bangunan : <p>{{ $pemohon->alamat_bangunan }}</p>--}}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-success">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href ="#" class="btn btn-danger btn-sm" type="button">Delete</a>
                                </div>



{{--                                <a href="" class="btn btn-warning btn-sm">info</a>--}}
{{--                                <a href="" class="btn btn-danger btn-sm">delete</a>--}}

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
