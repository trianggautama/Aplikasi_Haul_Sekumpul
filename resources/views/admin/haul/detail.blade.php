@extends('layouts.main')

@section('content')
    <section role="main" class="content-body">
		<header class="page-header">
			<h2>Halaman Haul</h2>
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
						    <a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
						<li><span>Data haul</span></li>
					</ol>
				<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
			</div>
		</header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body pr-5">
                        <div class="row">
                            <div class="col-md-5">
                            <h5> Data Ketua Panitia </h5>

                                <img  class="mb-3" src="{{asset('images/ketua/'.$data->foto)}}" alt="" width="200px">
                                <div class="form-group">
                                    <label for=""><b>Ketua Panitia :</b> </label>
                                    <p>{{$data->ketua_panitia}}</p>
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Nomor Hp  :</b> </label>
                                    <p>{{$data->no_hp_ketua}}</p>
                                </div>
                            </div>
                            <div class="col-md-7">
                            <div class="form-group">
                                    <label for=""> <b>Tanggal Pelaksanaan:</b>  </label>
                                    <p>{{\carbon\carbon::parse($data->tanggal_mulai)->translatedFormat('d F Y')}} - {{\carbon\carbon::parse($data->tanggal_selesai)->translatedFormat('d F Y')}}</p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b>Informasi Haul : </b></label>
                                    @php
                                        $info = $data->informasi_acara
                                    @endphp
                                    <p class="text-justify">{!! $info !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                Data Posko
                            </div>
                            <div class="col-md-6">
                                <div class="text-right">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0" id="datatable-default">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>haul</th>
                                    <th>Nama Posko</th>
                                    <th>Alamat</th>
                                    <th>Jenis Posko</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posko as $d)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>Periode Haul {{\carbon\carbon::parse($d->haul_sekumpul->created_at)->translatedFormat('Y')}}</td>
                                        <td>{{$d->nama_posko}}</td>
                                        <td>{{$d->alamat}} </td>
                                        <td>
                                            @if($d->jenis_posko == 1)
                                                <p>Posko Induk</p>
                                            @elseif($d->jenis_posko == 2)
                                                <p>Posko Non Induk</p>
                                            @else
                                                <p>Posko Kesehatan</p>
                                            @endif
                                        </td>
                                        <td>
                                            @if(Auth::user()->role == 2 || Auth::user()->ketua_posko->posko->id == $d->id )
                                            <a href="{{Route('poskoShow',['uuid'=>$d->uuid])}}" class="btn btn-sm btn-warning m-1"
                                            id="detail">
                                            <i class="fa fa-info-circle"></i></a>
                                            <a href="{{Route('poskoEdit',['uuid'=>$d->uuid])}}" class="btn btn-sm btn-primary m-1 text-white">
                                                <i class="fa fa-edit"></i></a>
                                                @if(Auth::user()->role == 2)
                                                <button class="btn btn-sm btn-danger" onclick="Hapus('{{$d->uuid}}','{{$d->nama_posko}}')"> <i
                                            class="fa fa-trash"></i></button>  
                                            @endif
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
