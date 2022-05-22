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
            <td>{{ $row->nama_mahasiswa }}</td>
            <td>{{ $row->umur }}</td>
            <td>
                <form action="{{ route('delet.mahasiswa', $row->id) }}" method="post">
                    @csrf
                    @methode('DELETE')
                 {{-- tombol hapus --}}

                 <button type="submit"
                    class="btn btn-danger btn-sm"
                    onclick="_return confirm('Anda Yakin ?')"
                    
             >Hapus</button>

                <a href="{{ route('edit.mahasiswa',$row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                

            </form>
            </td>
           </tr>
       @endforeach
        
    </tbody>
</table>
@endsection