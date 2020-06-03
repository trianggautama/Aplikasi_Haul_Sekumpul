@extends('layouts.main')

@section('content')
    <section role="main" class="content-body">
		<header class="page-header">
			<h2>Halaman Edit Kehilangan Barang</h2>
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
						    <a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
						<li><span>Edit Kehilangan Barang </span></li>
					</ol>
				<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
			</div>
		</header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data Kehilangan Barang
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group ">
                        <label class="">Posko Terdekat</label>
                        <select name="posko_id" id="" class="form-control">
                            <option value="">ambil dari posko</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label class="">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="nama_barang">
                    </div>
                    <div class="form-group ">
                        <label class="">Merk Barang</label>
                        <input type="text" class="form-control" name="merk_barang" id="merk_barang" placeholder="merk_barang">
                    </div>
                    <div class="form-group ">
                        <label class="">Posko Terdekat</label>
                        <select name="posko_id" id="" class="form-control">
                            <option value="">belum ditemukan</option>
                            <option value="">sudah ditemukan</option>
                        </select>
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
