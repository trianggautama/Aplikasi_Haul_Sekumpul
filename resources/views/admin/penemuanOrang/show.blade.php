@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Penemuan Orang</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Penemuan Orang</span></li>
                <li><span>Detail</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="mb-3" src="{{asset('images/penemuanOrang/'. $data->foto )}}" alt=""
                                width="200px">
                            <div class="form-group">
                                <label for=""> <b>Nama : </b></label>
                                <p>{{$data->nama_orang}}</p>
                            </div>
                            <div class="form-group">
                                <label for=""> <b>Umur : </b></label>
                                <p>{{$data->umur}}</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for=""> <b>Alamat : </b></label>
                                <p>{{$data->alamat}}</p>
                            </div>
                            <div class="form-group">
                                <label for=""> <b>Ciri Fisik : </b></label>
                                <p>{{$data->ciri_fisik}}</p>
                            </div>
                            <div class="form-group">
                                <label for=""> <b>Deskripsi : </b></label>
                                <p>{{$data->deskripsi}}</p>
                            </div>
                            <div class="form-group">
                                <label for=""> <b>Status : </b></label>
                                <p> @if($data->status == 1)
                                    <span class="badge badge-warning">Belum diambil</span>
                                    @elseif($data->status == 2)
                                    <span class="badge badge-success">Sudah diambil</span>
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
</div>
</div>

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