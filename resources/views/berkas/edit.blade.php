@extends('layout.main')
@section('title', 'Form Edit Berkas')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mt-2">Form Edit Berkas</h3>
                <form method="post" action="{{ route('berkas_update', ["berkas" => $berkas->id]) }}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="nama_pemohon">Nama Pemohon</label>
                        <input type="text" class="form-control @error('nama_pemohon') is-invalid @enderror" id="nama_pemohon" placeholder="Masukkan Nama" name="nama_pemohon" value="{{ $berkas->nama_pemohon }}">
                        @error('nama_pemohon')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nomor_berkas">Nomor Berkas</label>
                        <input type="text" class="form-control @error('nomor_berkas') is-invalid @enderror" id="nomor_berkas" placeholder="contoh : 001.01.21" name="nomor_berkas" value="{{ $berkas->nomor_berkas }}">
                        @error('nomor_berkas')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="badan_usaha">Nama Badan Usaha</label>
                        <input type="text" class="form-control @error('badan_usaha') is-invalid @enderror" id="badan_usaha" placeholder="Jika tidak ada masukkan tanda (-) " name="badan_usaha" value="{{ $berkas->badan_usaha }}">
                        @error('badan_usaha')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_permohonan">Jenis Permohonan</label>
                        <input type="text" class="form-control @error('jenis_permohonan') is-invalid @enderror" id="jenis_permohonan" placeholder="Masukkan jenis Permohonan" name="jenis_permohonan" value="{{ $berkas->jenis_permohonan }}">
                        @error('jenis_permohonan')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_bangunan">Nama Bangunan</label>
                        <input type="text" class="form-control @error('nama_bangunan') is-invalid @enderror" id="nama_bangunan" placeholder="Fungsi Bangunan" name="nama_bangunan" value="{{ $berkas->nama_bangunan }}">
                        @error('nama_bangunan')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat_bangunan">Alamat Bangunan</label>
                        <input type="text" class="form-control @error('alamat_bangunan') is-invalid @enderror" id="alamat_bangunan" placeholder="Masukkkan Alamat Bangunan" name="alamat_bangunan" value="{{ $berkas->alamat_bangunan }}">
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
