@extends('template.master')

@section('judul')

@section('isi')
    <h1>Tambah Data Mahasiswa</h1>
    @if ($erorrs->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($erors->all()ass $erorr)
            <li>{{$error}}</li>
            @endforeach
</ul>
</div>
@endif



    <form action="{{url('save-dasen') }}"method="post">
        @csrf 

        <div class="form-group">
            <label for="">NIM</label>
            <input type="text" class="form-control" name="nim">
</div>
<div class="form-group">
            <label for="">Nama Dosen</label>
            <input type="text" class="form-control" name="nama_mahasiswa">
</div>
        <div class="form-group">
            <label for="">Umur</label>
            <input type="text" class="form-control" name="umur" value="{{ old)>

</div>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-succes">
</form>
            
@endsection

