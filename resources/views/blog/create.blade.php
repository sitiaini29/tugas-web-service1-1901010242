<div class="row mt4">
    <div class="col10">
        <div class="card">
            <div class="card-header">
                Tambah Data 
                <a class="btn btn-primary float-right" 
                href="{{url('blog')}}"><i class="fas fa-backward"></i>back</a>
            </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Author</label>
                            <input type="text" name="author" class="form-controll">
                        </div>

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-controll">
                        </div>

                        <div class="form-group">
                            <label>body</label>
                            <input type="text" name="body" class="form-controll">
                        </div>

                        <div class="form-group">
                            <label>Key Word</label>
                            <input type="text" name="keyword" class="form-controll">
                        </div>

                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                        <a class="btn btn-warning float-right" 
                href="{{url('blog')}}"><i class="fas fa-backward"></i>Cencel</a>
                    </form>
</div>
</div>
</div>
</div>
