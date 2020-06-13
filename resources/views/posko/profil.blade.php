@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
					<header class="page-header">
						<h2>Profil posko</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<li><span>Profil</span></li>
								<li><span>Posko</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>
					<div class="card">
                        <div class="card-header">
                            <div class="text-right">
                                <a href="{{Route('poskoEdit',['uuid'=>$posko->uuid])}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i>Edit Profil</a>
                            </div>
                        </div>
                        <div class="card-body">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> <b>Nama Posko</b></label>
                                <p>{{$posko->nama_posko}}</p>
                            </div>
                            <div class="form-group">
                                <label for=""> <b> No Telepon Posko</b> </label>
                                <p>{{$posko->no_hp}}</p>
                            </div>

                            <div class="form-group">
                                <label for=""> <b>Periode Haul</b> </label>
                                <p>Periode Haul
                                    {{\carbon\carbon::parse($posko->haul_sekumpul->created_at)->translatedFormat('Y')}}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> <b>Jenis Posko</b> </label>
                                @if($posko->jenis_posko == 1)
                                <p>Posko Induk</p>
                                @elseif($posko->jenis_posko == 2)
                                <p>Posko Non Induk</p>
                                @else
                                <p>Posko Kesehatan</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for=""> <b>Ketua Posko</b>
                                    @if($posko->ketua_posko != null)
                                    <a href="{{Route('ketuaEdit',['uuid'=>$posko->ketua_posko->uuid])}}"
                                        class="btn btn-xs btn-primary ml-4 text-white"> Ubah Ketua posko</a>
                                    <a href="{{Route('ketuaShow',['uuid'=>$posko->ketua_posko->uuid])}}"
                                        class="btn btn-xs btn-success text-white"> Detail Ketua Posko</a>
                                    @else
                                    <a id="ubah-ketua" class="ml-4 text-success"> + tambah posko</a>
                                    @endif
                                </label>
                                <table>
                                    <tr>
                                        <td>Nama</td>
                                        <td class="pl-3">:
                                            @if(isset($posko->ketua_posko))
                                            {{$posko->ketua_posko->user->nama}}
                                            @else
                                            Belum diisi
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Telepon</td>
                                        <td class="pl-3">:
                                            @if(isset($posko->ketua_posko))
                                            {{$posko->ketua_posko->user->no_hp}}
                                            @else
                                            Belum diisi
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td class="pl-3">:
                                            @if(isset($posko->ketua_posko))
                                            {{$posko->ketua_posko->alamat}}
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
                        </div>
                    </div>
				</section>
@endsection
@section('scripts')
    <script>
        
    </script>
@endsection
