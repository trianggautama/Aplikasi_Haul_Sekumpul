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
								<th>info</th>
                                <th>Tanggal mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Ketua Panitia</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
                                <td>1</td>
								<td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ducimus amet delectus repudiandae neque tempore ...</td>
								<td>12 Maret 2020 </td>
                                <td>13 Maret 2020 </td>
                                <td>Jane Dhoe</td>
								<td> 
                                    <button class="btn btn-sm btn-warning m-1 "> <i class="fa fa-file"></i></button> 
                                    <button class="btn btn-sm btn-primary m-1 "> <i class="fa fa-edit"></i></button> 
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
                        <label for="">Informasi</label>
                        <textarea id="summernote" name="editordata"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Mulai</label>
                        <input type="date"class="form-control" name="username" id="username"  placeholder="username">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Selesai</label>
                        <input type="date"class="form-control" name="password" id="password">
                    </div>
                    <div class="form-group ">
                        <label class="">Katua Panitia</label>
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

        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection
