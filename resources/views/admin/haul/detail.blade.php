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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""> <b>Informasi Haul : </b></label>
                                    @php
                                        $info = $data->informasi_acara
                                    @endphp
                                    <p class="text-justify">{!! $info !!}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""> <b>Tanggal :</b>  </label>
                                    <p>{{$data->tanggal_mulai}} - {{$data->tanggal_selesai}}</p>
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Ketua Panitia :</b> </label>
                                    <p>{{$data->ketua_panitia}}</p>
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
                                    <button class="btn btn-sm btn-secondary"><i class="fa fa-print"></i> Cetak Data</button>
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
							<tr>
                                <td>1</td>
								<td>2020</td>
								<td>Sungai ulin</td>
                                <td>jl.PM.Noor Sungai Ulin Banjarbaru </td>
                                <td>Jamaah</td>
								<td> 
                                    <button class="btn btn-sm btn-warning m-1" id="detail"> <i class="fa fa-file"></i></button> 
                                </td>
							</tr>
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
