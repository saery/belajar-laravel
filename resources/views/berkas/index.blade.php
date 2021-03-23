@extends('layout.main')
@section('title', 'Daftar Izin')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="mt-2">Daftar Izin</h3>

                <table class="table table-striped table-hover">
                    <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nomor Berkas</th>
                        <th scope="col">Nama Pemohon</th>
                        <th scope="col">Nama Badan Usaha</th>
                        <th scope="col">Jenis Permohonan</th>
                        <th scope="col">Nama Bangunan</th>
                        <th scope="col">Alamat Bangunan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                     @foreach ($berkas as $pemohon)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $pemohon->nomor_berkas }}</td>
                            <td>{{ $pemohon->nama_pemohon }}</td>
                            <td>{{ $pemohon->badan_usaha }}</td>
                            <td>{{ $pemohon->jenis_permohonan }}</td>
                            <td>{{ $pemohon->nama_bangunan }}</td>
                            <td>{{ $pemohon->alamat_bangunan }}</td>
                            <td>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href ="#" class="btn btn-warning btn-sm me-md-2" type="button">Info</a>
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
