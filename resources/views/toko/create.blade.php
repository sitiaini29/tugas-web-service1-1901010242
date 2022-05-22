@extends('admin-tmp.tmp')

@section('author', 'Tambah Data Toko')

@section('isi')

<div class="row mt10">
    <div class="col10">
        <div class="card">
            <div class="card-header">Tambah Data Toko
                <a class="btn btn-sm btn-info float-right" href="{{url('data-toko')}}"><i class="fas fa-backward"></i>Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{url('simpan-toko')}}" method="POST">
                    @csrf
                    <div class="from-group">
                        <label>Jenis Barang</label>
                        <input type="text" name="jenis_barang" class="form-control">
                    </div>

                    <div class="from-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control">
                    </div>

                    <div class="from-group">
                        <label>Ukuran</label>
                        <input type="text" name="ukuran" class="form-control">
                    </div>

                    <div class="from-group">
                        <label>Warna</label>
                        <input type="text" name="warna" class="form-control">
                    </div>

                    <div class="from-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>

                    <div class="from-group">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>
                    <br><br>
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                    <a class="btn btn-warning float-right" href="{{url('data-toko')}}">
                        <i class="fas fa-backward"></i>Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection