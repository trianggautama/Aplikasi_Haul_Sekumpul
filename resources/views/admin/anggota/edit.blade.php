@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Edit Anggota Posko</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Edit Anggota Posko</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Anggota Posko
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="aplikasi_id" value="">
                        <div class="form-group">
                            <label for="">Nama </label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{$data->nama}}"
                                required></input>
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Hp </label>
                            <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{$data->no_hp}}"
                                required></input>
                        </div>
                        <div class="form-group">
                            <label for="">Jabatan </label>
                            <input type="text" name="jabatan" id="jabatan" class="form-control"
                                value="{{$data->jabatan}}" required></input>
                        </div>
                        <div class="form-group">
                            <label for="">Tugas </label>
                            <input type="text" name="tugas" id="tugas" class="form-control" value="{{$data->tugas}}"
                                required></input>
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label>
                            <input type="file" name="foto" id="foto" class="form-control"></input>
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