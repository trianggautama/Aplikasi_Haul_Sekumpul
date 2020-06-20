@extends('layouts.main')

@section('content')
    <section role="main" class="content-body">
		<header class="page-header">
			<h2>Halaman Penemuan Kendaraan</h2>
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
						    <a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
                        <li><span>Data Penemuan Kendaraan</span></li>
                        <li><span>Detail</span></li>
					</ol>
				<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
			</div>
		</header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                            <img  class="mb-3" src="{{asset('images/penemuanKendaraan/'.$data->foto)}}" alt="" width="200px">
                                <div class="form-group">
                                    <label for=""> <b>Plat Nomor : </b></label>
                                    <p>{{$data->plat_nomor}}</p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b>Merk Kendaraan : </b></label>
                                    <p>{{$data->merk_kendaraan}}</p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b>Warna : </b></label>
                                    <p>{{$data->warna}}</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                            <div class="form-group">
                                    <label for=""> <b>Status : </b></label>
                                    <p>  @if($data->status == 1)
                                        <span class="badge badge-warning">Belum diambil</span>
                                        @elseif($data->status == 2)
                                        <span class="badge badge-success">Sudah diambil</span>
                                        @endif
                                    </p>
                                </div>
                            <div class="form-group">
                                    <label for=""> <b>Posko : </b></label>
                                    <p>{{$data->lokasi_parkir->posko->nama_posko}}</p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b>Lokasi Parkir :</b>  </label>
                                    <p>{{$data->lokasi_parkir->alamat}}, </p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b>Nama Pelaopor :</b>  </label>
                                    <p>{{$data->nama_pelapor}}, </p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b>Nomor Hp Pelapor :</b>  </label>
                                    <p>{{$data->lokasi_parkir->no_hp_pelapor}}, </p>
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
