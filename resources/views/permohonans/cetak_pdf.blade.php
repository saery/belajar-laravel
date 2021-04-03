<!DOCTYPE html>
<html>
<head>
    <title>Laporan Permohonan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<style type="text/css">
    table tr td,
    table tr th{
        font-size: 9pt;
    }
</style>
<center>
    <h5>Laporan Permohonan</h4>
        <h6><a target="_blank" href="/permohonans">...</a>IMB</h5>
</center>

<table class='table table-bordered'>
    <thead>
    <tr>
        <th>No</th>
        <th>Nomor Berkas</th>
        <th>Nama Pemohon</th>
        <th>Nama Badan Usaha</th>
        <th>Jenis Permohonan</th>
        <th>Peruntukan Bangunan</th>
        <th>Alamat Bangunan</th>
    </tr>
    </thead>
    <tbody>
    @php $i=1 @endphp
    @foreach($permohonans as $permohonan)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{$permohonan->nomor_berkas}}</td>
            <td>{{$permohonan->nama_pemohon}}</td>
            <td>{{$permohonan->badan_usaha}}</td>
            <td>{{$permohonan->permohonan}}</td>
            <td>{{$permohonan->nama_bangunan}}</td>
            <td>{{$permohonan->alamat_bangunan}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
