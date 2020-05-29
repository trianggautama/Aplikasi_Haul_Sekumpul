@extends('layouts.main')

@section('content')
    <section role="main" class="content-body">
		<header class="page-header">
			<h2>Halaman Edit parkiran Posko</h2>
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
						    <a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
						<li><span>Edit parkiran Posko</span></li>
					</ol>
				<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
			</div>
		</header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data parkiran Posko
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Alamat Parkir</label>
                                <input type="text" name="nama_fitur" id="nama_fitur" class="form-control" required></input> 
                            </div>
                            <div class="form-group">
                                <label for="">Petugas</label>
                                <select name="petugas_id" id="petugas_id" class="form-control">
                                    <option value="">-- pilih dari anggota posko</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Luas Parkir</label>
                                <input type="text" name="nama_fitur" id="nama_fitur" class="form-control" required></input> 
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Parkiran</label>
                                <select name="petugas_id" id="petugas_id" class="form-control">
                                    <option value="">-- pilih jenis parkir --</option>
                                    <option value="1">Roda 2</option>
                                    <option value="2">Roda 4</option>
                                </select>
                            </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
   
@endsection
@section('scripts')
    <script>
        $("#tambah").click(function(){
            $('#status').text('Tambah Data');
            $('#modal').modal('show');
        });


    </script>
@endsection
