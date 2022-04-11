<div class="row mt4">
    <div class="col10">
        <div class="card">
            <div class="card-header">
                Data Blog 
                <a class="btn btn-primary float-right" 
                href="{{url('blog/create')}}">Tambah</a>
            </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
            <th>id</th>
            <th>author</th>
            <th>title</th>
            <th>body</th>
            <th>keyword</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($blogs as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->author}}</td>
            <td>{{ $row->title}}</td>
            <td>{{ $row->body}}</td>
            <td>{{ $row->keyword}}</td>
            <td>
                <a href="">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>
</div>