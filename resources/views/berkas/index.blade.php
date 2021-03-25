@extends('layout.main')
@section('title', 'Daftar Berkas')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h3 class="mt-2">Daftar Berkas</h3>
{{--                <a href="/berkas/create" class="btn btn-primary my-3">Tambah Data</a>--}}
                <!-- Button trigger modal -->
                <a href="/berkas" type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#tambahData">
                    Tambah Berkas
                </a>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <!-- Modal -->
                <div class="modal fade" id="tambahData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Form Tambah Berkas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="/berkas">
                                    @csrf
                                <div class="form-group">
                                    <label for="nomor_berkas">Nomor Berkas</label>
                                    <input type="text" class="form-control @error('nomor_berkas') is-invalid @enderror" id="nomor_berkas" placeholder="Masukkan Nomor" name="nomor_berkas" value="{{ old('nomor_berkas') }}">
                                    @error('nomor_berkas')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama_pemohon">Nama Pemohon</label>
                                    <input type="text" class="form-control @error('nama_pemohon') is-invalid @enderror" id="nama_pemohon" placeholder="Masukkan Nama" name="nama_pemohon" value="{{ old('nama_pemohon') }}">
                                    @error('nama_pemohon')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                    <div class="form-group">
                                        <label for="badan_usaha">Nama Badan Usaha</label>
                                        <input type="text" class="form-control @error('badan_usaha') is-invalid @enderror" id="badan_usaha" placeholder="Masukkan Nama Badan usaha" name="badan_usaha" value="{{ old('badan_usaha') }}">
                                        @error('badan_usaha')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_permohonan">Jenis Permohonan</label>
                                        <input type="text" class="form-control @error('jenis_permohonan') is-invalid @enderror" id="jenis_permohonan" placeholder="Masukkan Jenis Permohonan" name="jenis_permohonan" value="{{ old('jenis_permohonan') }}">
                                        @error('jenis_permohonan')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_bangunan">Nama Fungsi Bangunan</label>
                                        <input type="text" class="form-control @error('nama_bangunan') is-invalid @enderror" id="nama_bangunan" placeholder="Masukkan Fungsi Bangunan" name="nama_bangunan" value="{{ old('nama_bangunan') }}">
                                        @error('nama_bangunan')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_bangunan">Alamat Bangunan</label>
                                        <input type="text" class="form-control @error('alamat_bangunan') is-invalid @enderror" id="alamat_bangunan" placeholder="Masukkan Alamat" name="alamat_bangunan" value="{{ old('alamat_bangunan') }}">
                                        @error('alamat_bangunan')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>

                        </div>
                    </div>
                </div>

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
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-success">Edit</button>
                                                    <form action="{{ $pemohon->id }}" method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                            <input type="hidden" name="_method" value="POST">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
{{--                                <form action="{{ $berkas->id }}" method="post" class="d-inline">--}}
{{--                                    @method('delete')--}}
{{--                                    @csrf--}}
{{--                                    <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                                </form>--}}


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
