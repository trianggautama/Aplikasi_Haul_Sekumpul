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
			<a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
		</div>
	</header>
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">
					<div class="text-right">
						<button class="btn btn-sm btn-secondary"><i class="fa fa-print"></i> Cetak Data</button>
						<button class="btn btn-sm btn-success" id="tambah"><i class="fa fa-plus"></i> Tambah
							Data</button>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-bordered table-striped mb-0" id="datatable-default">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Username</th>
								<th>No Hp</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $d)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$d->nama}}</td>
								<td>{{$d->username}}</td>
								<td>{{$d->no_hp}}</td>
								<td>
									<a href="{{Route('userEdit',['uuid' => $d->uuid])}}"
										class="btn btn-sm btn-primary text-white"> <i class="fa fa-edit"></i></a>
									<button class="btn btn-sm btn-danger" onclick="Hapus('{{$d->uuid}}','{{$d->nama}}')"> <i
											class="fa fa-trash"></i></button>
								</td>
							</tr>
							@endforeach
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
				<form action="{{Route('userStore')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="">Nama</label>
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="username">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password" id="password">
					</div>
					<div class="form-group">
						<label for="">No Hp</label>
						<input type="number" class="form-control" name="no_hp">
					</div>
					<div class="form-group">
						<label for="">foto</label>
						<input type="file" class="form-control" name="foto" id="foto">
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Confirm</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</form>
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

		function Hapus(uuid, nama) {
			Swal.fire({
			title: 'Anda Yakin?',
			text: " Menghapus User '" + nama ,        
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				url = '{{route("userDestroy",'')}}';
				window.location.href =  url+'/'+uuid ;			
			}
		})
        }
</script>
@endsection