@extends('admin-tmp.tmp')

@section('judul', 'Edit Data Toko')

@section('isi')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row mt10">
    <div class="col10">
        <div class="card">
            <div class="card-header">Edit Data Toko
                <a class="btn btn-sm btn-info float-right" href="{{url('data-toko')}}"><i class="fas fa-backward"></i>Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('update.toko', $id->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="from-group">
                        <label>Jenis Barang</label>
                        <input type="text" name="jenis_barang" class="form-control" value="{{ $id->jenis_barang }}">
                    </div>

                    <div class="from-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" value="{{ $id->nama_barang }}">
                    </div>

                    <div class="from-group">
                        <label>Ukuran</label>
                        <input type="text" name="ukuran" class="form-control" value="{{ $id->ukuran }}">
                    </div>

                    <div class="from-group">
                        <label>Warna</label>
                        <input type="text" name="warna" class="form-control" value="{{ $id->warna }}">
                    </div>

                    <div class="from-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" value="{{ $id->harga }}">
                    </div>

                    <div class="from-group">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control" value="{{ $id->stok }}">
                    </div>

                    <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                    <a class="btn btn-warning float-right" href="{{ url('data-toko') }}"><i class="fas fa-backward"></i>Batal</a>
                </form>
            </div>
        </div>
    </div>
    @endsection