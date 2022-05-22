@extends('admin-tmp.tmp')

@section('Author', 'Toko')

@section('isi')
<div class="row mt4">
    <div class="col10">
        <div class="card">
            <div class="card-header">Data Toko
                <a class="btn btn-sm btn-primary float-right" href="{{url('add-toko')}}">Tambah Barang</a>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Id Barang</th>
                            <th>Jenis Barang</th>
                            <th>Nama Barang</th>
                            <th>Ukuran</th>
                            <th>Warna</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datatoko as $dtk)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dtk->jenis_barang}}</td>
                            <td>{{ $dtk->nama_barang }}</td>
                            <td>{{ $dtk->ukuran }}</td>
                            <td>{{ $dtk->warna}}</td>
                            <td>{{ $dtk->harga }}</td>
                            <td>{{ $dtk->stok }}</td>
                            <td>
                            <form action="{{route('delete.toko', $dtk->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin?')">Hapus</button>
                                    <a href="{{ route('edit.toko', $dtk->id )}}" class="btn btn-info btn-sm">Edit</a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection