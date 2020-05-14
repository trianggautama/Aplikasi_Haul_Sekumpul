@extends('layouts.main')

@section('content')
    <section role="main" class="content-body">
		<header class="page-header">
			<h2>Halaman Posko</h2>
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
						    <a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
						<li><span>Data Posko</span></li>
					</ol>
				<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
			</div>
		</header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="text-right">
                            <button class="btn btn-sm btn-secondary"><i class="fa fa-print"></i> Cetak Data</button>
                            <button class="btn btn-sm btn-success" id="tambah"><i class="fa fa-plus"></i> Tambah Data</button>
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
                                    <a href="{{Route('poskoDetail')}}" class="btn btn-sm btn-warning m-1" id="detail"> <i class="fa fa-file"></i></a> 
                                    <a href="{{Route('poskoEdit')}}" class="btn btn-sm btn-primary m-1 text-white"> <i class="fa fa-edit"></i></a> 
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
    </section>
    
    <div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog">
	    <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Are you sure?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="">
                    <div class="form-group">
                        <label for="">Haul</label>
                        <select name="haul_id" id="haul_id" class="form-control">
                            <option value="">-- Pilih Periode Haul --</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label class="">Nama Posko</label>
                        <input type="text"class="form-control" name="username" id="username"  placeholder="username">
					</div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Posko</label>
                        <select name="haul_id" id="haul_id" class="form-control">
                            <option value="">-- Pilih Jenis --</option>
                        </select>
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
        $("#tambah").click(function(){
            $('#status').text('Tambah Data');
            $('#modal').modal('show');
        });

        $("#detail").click(function(){
            window.location.replace("{{Route('poskoDetail')}}");
        });

    </script>
@endsection
