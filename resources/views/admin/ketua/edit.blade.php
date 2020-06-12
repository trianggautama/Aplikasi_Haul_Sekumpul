@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Edit Ketua Posko</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Edit Ketua Posko</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Ketua Posko
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Nama </label>
                            <input type="text" name="nama" id="nama" class="form-control" required
                                value="{{$data->user->nama}}"></input>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat </label>
                            <textarea name="alamat" id="alamat" class="form-control">{{$data->alamat}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">No Hp</label>
                            <input type="number" class="form-control" name="no_hp" value="{{$data->user->no_hp}}">
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username" value="{{$data->user->username}}"
                                id="username" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                            <p class="text-danger">Isi Jika Ingin merubah password</p>
                        </div>
                        <div class="form-group">
                            <label for="">foto</label>
                            <input type="file" class="form-control" name="foto" id="foto">
                            <p class="text-danger">Isi Jika Ingin merubah gambar</p>
                        </div>
                </div>
                <div class="card-footer text-right">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection
@section('scripts')
<script>
    $("#tambah").click(function(){
            $('#status').text('Tambah Data');
            $('#modal').modal('show');
        });


</script>
@endsection