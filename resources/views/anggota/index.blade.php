@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Beranda Admin</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<li><span>Layouts</span></li>
								<li><span>Sidebar Size SM</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="card">
						<div class="card-body">
						<div class="alert alert-success">
							<h3> Selamat Datang, {{Auth::user()->anggota->nama}}</h3>
						</div>
						<hr>
						<h4>Data Posko:</h4>
						<hr>
						<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> <b>Nama Posko</b></label>
                                <p>{{Auth::user()->anggota->posko->nama_posko}}</p>
                            </div>
                            <div class="form-group">
                                <label for=""> <b> No Telepon Posko</b> </label>
                                <p>{{Auth::user()->anggota->posko->no_hp}}</p>
                            </div>

                            <div class="form-group">
                                <label for=""> <b>Periode Haul</b> </label>
                                <p>Periode Haul
                                    {{\carbon\carbon::parse(Auth::user()->anggota->posko->haul_sekumpul->created_at)->translatedFormat('Y')}}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> <b>Nama Posko</b> </label>
                                @if(Auth::user()->anggota->posko->jenis_posko == 1)
                                <p>Posko Induk</p>
                                @elseif(Auth::user()->anggota->posko->jenis_posko == 2)
                                <p>Posko Non Induk</p>
                                @else
                                <p>Posko Kesehatan</p> 
                                @endif
                            </div>
                            <div class="form-group">
                                <table>
                                    <tr>
                                        <td>Nama Ketua Posko</td>
                                        <td class="pl-3">:
                                            @if(isset(Auth::user()->anggota->posko->ketua_posko))
                                            {{Auth::user()->anggota->posko->ketua_posko->user->nama}}
                                            @else
                                            Belum diisi
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Telepon Ketua Posko</td>
                                        <td class="pl-3">:
                                            @if(isset(Auth::user()->anggota->posko->ketua_posko))
                                            {{Auth::user()->anggota->posko->ketua_posko->user->no_hp}}
                                            @else
                                            Belum diisi
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Ketua Posko</td>
                                        <td class="pl-3">:
                                            @if(isset(Auth::user()->anggota->posko->ketua_posko))
                                            {{Auth::user()->anggota->posko->ketua_posko->alamat}}
                                            @else
                                            Belum diisi
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <br>
                        </div>
					</div>
					<div class="text-right">
						<a href="{{Route('detailAnggotaCetak',['uuid'=>Auth::user()->anggota->uuid])}}" class="btn btn-block btn-default ml-1" target="_blank"><i class="fa fa-print"></i> Cetak Kartu Nama</a>
					</div>
						</div>
					</div>
					<!-- end: page -->
				</section>
@endsection
@section('scripts')
    <script>
        
    </script>
@endsection
