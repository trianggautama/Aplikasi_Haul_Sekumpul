@extends('layouts.main')

@section('content')
    <section role="main" class="content-body">
		<header class="page-header">
			<h2>Halaman Detail Anggota Posko</h2>
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
						    <a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
						<li><span>Detail Anggota Posko</span></li>
					</ol>
				<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
			</div>
		</header>
        
					<!-- start: page -->

					<div class="row">
						<div class="col-lg-4 col-xl-3 mb-4 mb-xl-0">
							<section class="card">
								<div class="card-body">
									<div class="thumb-info mb-3">
										<img src="{{asset('images/anggota/'. $data->foto)}}" class="rounded img-fluid" alt="John Doe">
										<div class="thumb-info-title">
											<span class="thumb-info-inner">Anggota Posko</span>
										</div>
									</div>

									<div class="widget-toggle-expand mb-3">
										<div class="widget-content-collapsed">
                                        <ul class="simple-user-list mb-3">
                                            <li>
                                                <span class="title">Nama </span>
                                                <span class="message">{{$data->nama}}</span>
                                            </li>
                                            <li>
                                                <span class="title">Posko</span>
                                                <span class="message">{{$data->posko->nama_posko}}</span>
                                            </li>
                                        </ul>
										</div>
									</div>
                                    <hr class="dotted short">
                                    <div class="">
                                    <a href="{{Route('detailAnggotaCetak',['uuid'=>$data->uuid])}}" class="btn btn-block btn-secondary ml-1" target="_blank"><i class="fa fa-print"></i> Cetak Detail</a>
                                    </div>

								</div>
							</section>


						</div>
						<div class="col-lg-8 col-xl-9">

							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									<li class="nav-item active">
										<a class="nav-link" href="#overview" data-toggle="tab">Detail Anggota Posko</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="overview" class="tab-pane active">

										<div class="p-3">

                                            <h4 class="mb-3 pt-4">Biodata</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                <ul class="simple-user-list mb-3">
                                                    <li>
                                                        <span class="title">Nama </span>
                                                        <span class="message">{{$data->nama}}</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">No Telepon</span>
                                                        <span class="message">{{$data->no_hp}}</span>
                                                    </li>                                          
                                                </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="simple-user-list mb-3">
                                                        <li>
                                                            <span class="title">Jabatan</span>
                                                            <span class="message">{{$data->jabatan}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="title">Tugas</span>
                                                            <span class="message">{{$data->tugas}}</span>
                                                        </li>                                               
                                                    </ul>
                                                </div>
                                            </div>
                                            <hr>
                                        <h4 class="mb-3 pt-4">Data Posko</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="simple-user-list mb-3">
                                                <li>
                                                    <span class="title">Nama Posko </span>
                                                    <span class="message">{{$data->posko->nama_posko}}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Nomor Telepon Posko</span>
                                                    <span class="message">{{$data->posko->no_hp}}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Periode Haul</span>
                                                    <span class="message">{{\carbon\carbon::parse($data->posko->haul_sekumpul->created_at)->translatedFormat('Y')}}</span>
                                                </li>                                            
                                            </ul>
                                            </div>
                                            <div class="col-md-6">
                                            <ul class="simple-user-list mb-3">
                                            <li>
                                                <span class="title">Alamat Posko </span>
                                                <span class="message">{{$data->posko->alamat}}</span>
                                            </li>
                                            <li>
                                                <span class="title">Jenis Posko</span>
                                                <span class="message">{{$data->posko->no_hp}}</span>
                                            </li>
                                            <li>
                                                <span class="title">Jenis Posko</span>
                                                @if($data->jenis_posko == 1)
                                                    <span class="message">Posko Induk</span>
                                                @elseif($data->jenis_posko == 2)
                                                    <span class="message">Posko Non Induk</span>
                                                @else
                                                    <span class="message">Posko Kesehatan</span>
                                                @endif
                                            </li>                                            
                                        </ul>
                                            </div>
                                        </div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end: page -->
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
