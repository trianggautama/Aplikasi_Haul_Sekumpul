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
				<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
			</div>
		</header>
        
					<!-- start: page -->

					<div class="row">
						<div class="col-lg-4 col-xl-3 mb-4 mb-xl-0">
							<section class="card">
								<div class="card-body">
									<div class="thumb-info mb-3">
										<img src="{{asset('images/user/'. $data->user->foto)}}" class="rounded img-fluid" alt="John Doe">
										<div class="thumb-info-title">
											<span class="thumb-info-inner">Ketua Posko</span>
										</div>
									</div>

									<div class="widget-toggle-expand mb-3">
										<div class="widget-content-collapsed">
                                        <ul class="simple-user-list mb-3">
                                            <li>
                                                <span class="title">Nama </span>
                                                <span class="message">{{$data->user->nama}}</span>
                                            </li>
                                            <li>
                                                <span class="title">Posko</span>
                                                <span class="message">{{$data->posko->nama_posko}}</span>
                                            </li>
                                        </ul>
										</div>
									</div>
					

									<hr class="dotted short">

									<div class="social-icons-list">
										<a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
										<a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="fab fa-twitter"></i><span>Twitter</span></a>
										<a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>
									</div>

								</div>
							</section>


						</div>
						<div class="col-lg-8 col-xl-9">

							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">
									<li class="nav-item active">
										<a class="nav-link" href="#overview" data-toggle="tab">Detail Ketua Posko</a>
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
                                                        <span class="message">{{$data->user->nama}}</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">No Telepon</span>
                                                        <span class="message">{{$data->user->no_hp}}</span>
                                                    </li>                                          
                                                </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="simple-user-list mb-3">
                                                        <li>
                                                            <span class="title">Alamat</span>
                                                            <span class="message">{{$data->alamat}}</span>
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
