@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Posko</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Donasi</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Detail Donasi
                    <div class="text-right">
                        <button class="btn btn-sm btn-secondary"><i class="fa fa-print"></i> Cetak Data</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> <b>Nama Donatur</b></label>
                                <p>{{$data->nama_donatur}}</p>
                            </div>
                            <div class="form-group">
                                <label for=""> <b> No Telepon </b> </label>
                                <p>{{$data->no_hp}}</p>
                            </div>
                            <div class="form-group">
                                <label for=""> <b> Besaran </b> </label>
                                <p>Rp.{{$data->besaran}},-</p>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> <b>Periode Haul</b> </label>
                                <p>Periode Haul
                                    {{carbon\carbon::parse($data->haul_sekumpul->tanggal_mulai)->format('Y')}}
                                </p>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for=""> <b>Metode</b> </label>
                                <p>
                                    @if($data->metode == 1)
                                    Cash
                                    @else
                                    Transfer
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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