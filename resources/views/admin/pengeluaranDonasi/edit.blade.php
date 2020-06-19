@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Edit Pengeluaran Donasi</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Edit Pengeluaran Donasi </span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Pengeluaran Donasi
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group ">
                            <label class="">Sisa Uang Donasi</label>
                            <input type="text" name="sisa" class="form-control" id="keperluan"
                                value="{{$total_donasi - $total_pengeluaran + $data->besaran}}" readonly>
                        </div>
                        <div class="form-group ">
                            <label class="">Keperluan</label>
                            <input type="text" class="form-control" name="keperluan" value="{{$data->keperluan}}"
                                id="keperluan" placeholder="Keperluan Pengeluaran">
                        </div>
                        <div class="form-group ">
                            <label class="">Penanggung Jawab</label>
                            <input type="text" class="form-control" name="penanggung_jawab"
                                value="{{$data->penanggung_jawab}}" id="penanggung_jawab"
                                placeholder="Penanggung Jawab">
                        </div>
                        <div class="form-group ">
                            <label class="">Besaran (Rp.)</label>
                            <input type="number" class="form-control" name="besaran" value="{{$data->besaran}}"
                                id="besaran" placeholder="Rp.">
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