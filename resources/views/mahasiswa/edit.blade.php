@extends('mahasiswa.tmp')
@section('judul', 'Data Mahasiswa')
@section('isi')
<div class="row mt4">
    <div class="col10">
        <div class="card">
            <div class="card-header">
                Tambah Data 
                <a class="btn btn-primary float-right" 
                href="{{url('data-blog')}}"><i class="fas fa-backward"></i>back</a>
            </div>
                <div class="card-body">
                    <form action="{{url('save-mahasiswa')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>nama_mahasiswa</label>
                            <input type="text" name="author" class="form-controll">
                        </div>

                        <div class="form-group">
                            <label>nim</label>
                            <input type="text" name="title" class="form-controll">
                        </div>

                        <div class="form-group">
                            <label>Umur</label>
                            <input type="text" name="body" class="form-controll">
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="keyword" class="form-controll">
                        </div>

                        <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                        <a class="btn btn-warning float-right" href="{{url('data-mahasiswa')}}">
                            <i class="fas fa-backward"></i>Cencel</a>
                    </form>
                    
</div>
</div>
</div>
</div>
@endsection