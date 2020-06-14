@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Berita Kegiatan</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Berita Kegiatan</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Posko
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group ">
                        <label class="">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul">
                    </div>
                    <div class="form-group ">
                        <label class="">Isi </label>
                        <textarea id="summernote" name="isi"></textarea>
                    </div>
                    <div class="form-group ">
                        <label class="">Foto</label>
                        <input type="file" class="form-control" name="judul" id="judul" placeholder="Judul">
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
    
        $(document).ready(function() {
            $('#summernote').summernote();
        });

</script>
@endsection