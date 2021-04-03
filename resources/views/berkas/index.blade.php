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
                <!-- Modal Tambah Data -->
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
                <!-- Tampilan Index -->
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
                            <a href="/berkas/{{ $pemohon->id }}" class="badge bg-warning text-dark">Detail</a>

                        </div>
                            @endforeach
                            </td>
                        </tr>
            </table>
                    </tbody>



                {{ $berkas->links() }}


            </div>
        </div>
    </div>

@endsection
