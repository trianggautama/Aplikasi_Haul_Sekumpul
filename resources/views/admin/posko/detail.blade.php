@extends('layouts.main')

@section('content')
    <section role="main" class="content-body">
		<header class="page-header">
			<h2>Detail Posko</h2>
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
						    <a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
                        <li><span>Data Posko</span></li>
                        <li><span>Detail</span></li>
					</ol>
				<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
			</div>
		</header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Detail Posko
                        <div class="text-right">
                            <button class="btn btn-sm btn-secondary"><i class="fa fa-print"></i> Cetak Data</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""> <b>Nama Posko</b></label>
                                    <p>{{$data->nama_posko}}</p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b> No Telepon Posko</b> </label>
                                    <p>{{$data->no_hp}}</p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b>Jenis Posko</b> </label>
                                    @if($data->jenis_posko == 1)
                                        <p>Posko Induk</p>
                                    @elseif($data->jenis_posko == 2)
                                        <p>Posko Non Induk</p>
                                    @else
                                        <p>Posko Kesehatan</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for=""> <b>Periode Haul</b> </label>
                                    <p>Periode Haul {{\carbon\carbon::parse($data->haul_sekumpul->created_at)->translatedFormat('Y')}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""> <b>Ketua Posko</b> <a id="ubah-ketua" class="ml-4 text-success"> + Ubah Data</a></label>
                                    <table>
                                        <tr>
                                            <td>Nama</td>
                                            <td class="pl-3">: Jane Doe</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Telepon</td>
                                            <td class="pl-3">: 05764467656</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td class="pl-3">: -</td>
                                        </tr>
                                    </table>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for=""> <b>Lokasi Parkir</b><a href="" id="tambah-lokasi-parkir" class=" text-success ml-4"> + Tambah Data</a></label>
                                    <table class="mb-2">
                                        <tr>
                                            <td>Alamat Pariran</td>
                                            <td class="pl-3">: Jane Doe</td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Parkiran</td>
                                            <td class="pl-3">: 05764467656</td>
                                        </tr>
                                        <tr>
                                            <td>Luas Parkiran</td>
                                            <td class="pl-3">: -</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td class="pl-3">: -</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <!-- vertical -->
					<div class="row">
						<div class="col-lg-12">
							<div class="tabs tabs-vertical tabs-left">
								<ul class="nav nav-tabs">
									<li class="nav-item active">
										<a class="nav-link" href="#kehilanganBarang" data-toggle="tab"> Kehilangan Barang</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#penemuanBarang" data-toggle="tab">Penemuan Barang</a>
                                    </li>
                                    <li class="nav-item active">
										<a class="nav-link" href="#kehilanganKendaraan" data-toggle="tab"> Kehilangan Kendaraan</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#penemuanKendaraan" data-toggle="tab">Penemuan Kendaraan</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="kehilanganBarang" class="tab-pane active">
										<p>Kehilangan barang</p>
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
                                                        <a href="#" class="btn btn-sm btn-warning m-1" id="detail"> <i class="fa fa-file"></i></a> 
                                                        <a class="btn btn-sm btn-primary m-1 "> <i class="fa fa-edit"></i></a> 
                                                        <button class="btn btn-sm btn-danger m-1 "> <i class="fa fa-trash"></i></button> 
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>									
                                    </div>
									<div id="penemuanBarang" class="tab-pane">
                                        <p>Penemuan Barang</p>
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
                                                        <a href="#" class="btn btn-sm btn-warning m-1" id="detail"> <i class="fa fa-file"></i></a> 
                                                        <a class="btn btn-sm btn-primary m-1 "> <i class="fa fa-edit"></i></a> 
                                                        <button class="btn btn-sm btn-danger m-1 "> <i class="fa fa-trash"></i></button> 
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>	
                                    </div>
                                    <div id="kehilanganKendaraan" class="tab-pane ">
                                        <p>Kehilangan Kendaraan</p>
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
                                                        <a href="#" class="btn btn-sm btn-warning m-1" id="detail"> <i class="fa fa-file"></i></a> 
                                                        <a class="btn btn-sm btn-primary m-1 "> <i class="fa fa-edit"></i></a> 
                                                        <button class="btn btn-sm btn-danger m-1 "> <i class="fa fa-trash"></i></button> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2020</td>
                                                    <td>Sungai ulin</td>
                                                    <td>jl.PM.Noor Sungai Ulin Banjarbaru </td>
                                                    <td>Jamaah</td>
                                                    <td> 
                                                        <a href="#" class="btn btn-sm btn-warning m-1" id="detail"> <i class="fa fa-file"></i></a> 
                                                        <a class="btn btn-sm btn-primary m-1 "> <i class="fa fa-edit"></i></a> 
                                                        <button class="btn btn-sm btn-danger m-1 "> <i class="fa fa-trash"></i></button> 
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>	
									</div>
									<div id="penemuanKendaraan" class="tab-pane">
                                        <p>Penemuan Kendaraan</p>
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
                                                        <a href="#" class="btn btn-sm btn-warning m-1" id="detail"> <i class="fa fa-file"></i></a> 
                                                        <a class="btn btn-sm btn-primary m-1 "> <i class="fa fa-edit"></i></a> 
                                                        <button class="btn btn-sm btn-danger m-1 "> <i class="fa fa-trash"></i></button> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2020</td>
                                                    <td>Sungai ulin</td>
                                                    <td>jl.PM.Noor Sungai Ulin Banjarbaru </td>
                                                    <td>Jamaah</td>
                                                    <td> 
                                                        <a href="#" class="btn btn-sm btn-warning m-1" id="detail"> <i class="fa fa-file"></i></a> 
                                                        <a class="btn btn-sm btn-primary m-1 "> <i class="fa fa-edit"></i></a> 
                                                        <button class="btn btn-sm btn-danger m-1 "> <i class="fa fa-trash"></i></button> 
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>	
									</div>
								</div>
							</div>
						</div>
					</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="modal fade " id="modal" tabindex="-1" role="dialog">
	    <div class="modal-dialog " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Ubah Data Ketua Posko</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="">
                    <div class="form-group ">
                        <label class="">Nama Posko</label>
                        <input type="text"class="form-control" name="username" id="username"  placeholder="username">
					</div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control"></textarea>
                    </div>
                    <div class="form-group ">
                        <label class="">Nomor HP Posko</label>
                        <input type="text"class="form-control" name="username" id="username"  placeholder="username">
					</div>
                </form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Confirm</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
</div>								

@endsection
@section('scripts')
    <script>
        $("#ubah-ketua").click(function(){
            $('#modal').modal('show');
        });



    </script>
@endsection
