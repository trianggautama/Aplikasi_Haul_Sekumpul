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
                            <button class="btn btn-sm btn-success" id="tambah"><i class="fa fa-plus"></i> Tambah Data</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""> <b>Nama Posko</b></label>
                                    <p>-</p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b> No Telepon Posko</b> </label>
                                    <p>-</p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b>Jenis Posko</b> </label>
                                    <p>-</p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b>Periode Haul</b> </label>
                                    <p>2020</p>
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

        $("#detail").click(function(){
            window.location.replace("{{Route('poskoDetail')}}");
        });

    </script>
@endsection
