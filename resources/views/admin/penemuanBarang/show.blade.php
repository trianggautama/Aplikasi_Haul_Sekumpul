@extends('layouts.main')

@section('content')
    <section role="main" class="content-body">
		<header class="page-header">
			<h2>Halaman Penemuan Barang</h2>
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
						    <a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
                        <li><span>Data Penemuan Barang</span></li>
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
                            <img  class="mb-3" src="{{asset('images/penemuanBarang/'. $data->foto)}}" alt="" width="200px">
                                <div class="form-group">
                                    <label for=""> <b>Nama Barang : </b></label>
                                    <p>{{$data->nama_barang}}</p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b>Merk Barang : </b></label>
                                    <p>{{$data->merk}}</p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b>Status : </b></label>
                                    <p>  @if($data->status == 1)
                                        <span class="badge badge-warning">Belum diambil</span>
                                        @elseif($data->status == 2)
                                        <span class="badge badge-success">Sudah diambil</span>
                                        @endif
                                    </p>
                                </div>
                                
                            </div>
                            <div class="col-md-8">
                            <div class="form-group">
                                    <label for=""> <b>Deskripsi Barang : </b></label>
                                    <p>{{$data->deskripsi}}</p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b>Penanggung Jawab :</b>  </label>
                                    <p>Admin</p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b>Foto penyerahan :</b>  </label> <br>
                                    @if($data->foto_penyerahan)
                                        <a href="{{asset('images/penemuanBarang/'.$data->foto_penyerahan)}}" class="btn btn-secondary" target="_blank"><i class="fas fa-paperclip"></i> Foto Penyerahan</a>
                                    @else
                                    -
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for=""><b>KTP Penerima :</b> </label> <br>
                                    @if($data->ktp_penerima)
                                        <a href="{{asset('images/penemuanBarang/'.$data->ktp_penerima)}}" class="btn btn-secondary" target="_blank"><i class="fas fa-paperclip"></i> Foto KTP</a>
                                    @else
                                    -
                                    @endif
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
