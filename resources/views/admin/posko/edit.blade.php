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
                        Edit Data Posko
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            @method('PUT')
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
                    </div>
                    <div class="card-footer text-right">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
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

        $("#detail").click(function(){
            window.location.replace("{{Route('poskoDetail')}}");
        });

    </script>
@endsection
