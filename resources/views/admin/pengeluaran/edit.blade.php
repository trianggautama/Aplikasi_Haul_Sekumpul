@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Pengeluaran Mesjid</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Pengeluaran</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Pengeluaran
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group ">
                            <label class="">Judul</label>
                            <input type="text" class="form-control" name="judul" id="judul"
                                value="{{$data->arraudah->judul}}" placeholder="Judul">
                        </div>
                        <div class="form-group ">
                            <label class="">Isi </label>
                            <textarea id="summernote" name="isi">{{$data->arraudah->isi}}</textarea>
                        </div>
                        <!-- kategori default Pengeluaran -->
                        <div class="form-group ">
                            <label class="">Keperluan</label>
                            <input type="text" class="form-control" name="keperluan" id="keperluan"
                                value="{{$data->keperluan}}" placeholder="Keperluan">
                        </div>
                        <div class="form-group ">
                            <label class="">Besaran (Rp.)</label>
                            <input type="text" class="form-control" name="besaran" id="no_hp" value="{{$data->besaran}}"
                                placeholder="Rp.">
                        </div>
                        <!-- Nama penanggungjawab dari Auth -->
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
    $(document).ready(function() {
            $('#summernote').summernote();
        });

</script>
@endsection