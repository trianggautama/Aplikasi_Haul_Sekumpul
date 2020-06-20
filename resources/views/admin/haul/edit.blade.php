@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Haul</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="#">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Edit Data haul</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Haul
                </div>
                <div class="card-body">
                    <form action="" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Informasi</label>
                            <textarea id="summernote" name="informasi_acara">{{$data->informasi_acara}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Mulai</label>
                            <input type="date" class="form-control" name="tanggal_mulai" id="tanggal_mulai"
                                placeholder="tanggal_mulai" value="{{$data->tanggal_mulai}}">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Selesai</label>
                            <input type="date" class="form-control" name="tanggal_selesai" id="password"
                                value="{{$data->tanggal_selesai}}">
                        </div>
                        <div class="form-group ">
                            <label class="">Nama Katua Panitia</label>
                            <input type="text" class="form-control" name="ketua_panitia" id="nama"
                                value="{{$data->ketua_panitia}}" placeholder="Nama">
                        </div>
                        <div class="form-group ">
                            <label class="">Nomor Hp</label>
                            <input type="text" class="form-control" name="no_hp_ketua" id="no_hp_ketua"
                                value="{{$data->no_hp_ketua}}" placeholder="Nomor Hp Ketua Panitia">
                        </div>
                        <div class="form-group ">
                            <label class="">Foto Ketua Panitia</label>
                            <input type="file" class="form-control" name="foto" id="foto">
                        </div>
                </div>
                <div class="card-footer text-right">
                    <button type="button" class="btn btn-default">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('scripts')
<script>
    $(document).ready(function() {
            $('#summernote').summernote();
        });
</script>
@endsection