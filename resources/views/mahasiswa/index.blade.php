@extends('template.master')

@section('isi')
<h1>data dosen</h1>
<table class="table table table-hover table-bordered" >
    <thead>
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)

        <tr>
            <td>{{$loop->iteration }}</td>
            <td>{{ $row->nik }}</td>
            <td>{{ $row->nama_dosen }}</td>
            <td>{{ $row->Umur }}</td>
            <td>
                <a href="">Hapus</a>
            </td>
        </tr>
       @endforeach
        
    </tbody>
</table>
@endsection