@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Pemasukan Mushola</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Pemasukan Mushola</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Filter Data Pemasukan Mushola
                </div>
                <div class="card-body">
                    <form action="" method="post" target="_blank">
                        @csrf
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Tanggal mulai</label>
                                   <input type="date" class="form-control" name="tgl_mulai">
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Tanggal Akhir</label>
                                   <input type="date" class="form-control" name="tgl_akhir">
                                </div>
                            </div>
                        </div>
                       
                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('donasiIndex')}}" type="button" class="btn btn-default" data-dismiss="modal">Batal</a>
                    <button type="submit" class="btn btn-primary">Cetak</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection
@section('scripts')
<script>


</script>
@endsection