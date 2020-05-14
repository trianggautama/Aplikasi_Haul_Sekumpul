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
                    <table class="table table-bordered table-striped mb-0" id="datatable-default">
						<thead>
							<tr>
                                <th>No</th>
								<th>Nama</th>
								<th>Username</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
                                <td>1</td>
								<td>Trident</td>
								<td>Internet
									Explorer 4.0
								</td>
								<td> 
                                    <a href="{{Route('userEdit')}}" class="btn btn-sm btn-primary text-white"> <i class="fa fa-edit"></i></a> 
                                    <button class="btn btn-sm btn-danger" onclick="Hapus()"> <i class="fa fa-trash"></i></button> 
                                </td>
							</tr>
						</tbody>
					</table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="modal fade" id="modal" tabindex="-1" role="dialog">
	    <div class="modal-dialog" role="document">
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
                        <label for="">Nama</label>
                        <input type="text"class="form-control" name="nama" id="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text"class="form-control" name="username" id="username"  placeholder="username">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password"class="form-control" name="password" id="password">
                    </div>
					<div class="form-group">
                        <label for="">foto</label>
                        <input type="file"class="form-control" name="foto" id="foto">
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

		function Hapus() {
			Swal.fire({
			title: 'Anda Yakin?',
			text: " Menghapus data objek Penelitian '",        
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				alert('sukses');
			}
		})
        }
    </script>
@endsection
