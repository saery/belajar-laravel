@extends('layout.main')
@section('title', 'Form Ubah Data Permohonan')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="mt-2">Form Ubah Data Permohonan</h3>

                <form method="post" action="/permohonans/{{ $permohonan->id }}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="nama_pemohon">Nama Pemohon</label>
                        <input type="text" class="form-control @error('nama_pemohon') is-invalid @enderror" id="nama_pemohon" placeholder="Masukkan Nama" name="nama_pemohon" value="{{ $permohonan->nama_pemohon }}">
                        @error('nama_pemohon')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nomor_berkas">Nomor Berkas</label>
                        <input type="text" class="form-control @error('nomor_berkas') is-invalid @enderror" id="nomor_berkas" placeholder="contoh : 001.01.21" name="nomor_berkas" value="{{ $permohonan->nomor_berkas }}">
                        @error('nomor_berkas')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="badan_usaha">Nama Badan Usaha</label>
                        <input type="text" class="form-control @error('badan_usaha') is-invalid @enderror" id="badan_usaha" placeholder="" name="badan_usaha" value="{{ $permohonan->badan_usaha }}">
                        @error('badan_usaha')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="permohonan">Jenis Permohonan</label>
                        <input type="text" class="form-control @error('permohonan') is-invalid @enderror" id="permohonan" placeholder="" name="permohonan" value="{{ $permohonan->permohonan }}">
                        @error('permohonan')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_bangunan">Nama Bangunan</label>
                        <input type="text" class="form-control @error('nama_bangunan') is-invalid @enderror" id="nama_bangunan" placeholder="" name="nama_bangunan" value="{{ $permohonan->nama_bangunan }}">
                        @error('nama_bangunan')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat_bangunan">Alamat Bangunan</label>
                        <input type="text" class="form-control @error('alamat_bangunan') is-invalid @enderror" id="alamat_bangunan" placeholder="" name="alamat_bangunan" value="{{ $permohonan->alamat_bangunan }}">
                        @error('alamat_bangunan')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Ubah Data!</button>
                </form>
            </div>
        </div>
    </div>
@endsection
