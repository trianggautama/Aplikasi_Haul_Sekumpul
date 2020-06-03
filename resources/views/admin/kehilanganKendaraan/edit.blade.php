@extends('layouts.main')

@section('content')
    <section role="main" class="content-body">
		<header class="page-header">
			<h2>Halaman Edit Kehilangan Kendaraan</h2>
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
						    <a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
						<li><span>Edit Kehilangan Kendaraan </span></li>
					</ol>
				<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
			</div>
		</header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data Kehilangan Kendaraan
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
                        <label class="">Nomor Polisi</label>
                        <input type="text" class="form-control" name="nopol" id="nopol" placeholder="DA XXX">
                    </div>
                    <div class="form-group ">
                        <label class="">Merk Kendaraan</label>
                        <input type="text" class="form-control" name="merk_Kendaraan" id="merk_barang" placeholder="merk_barang">
                    </div>
                    <div class="form-group ">
                        <label class="">Warna</label>
                        <input type="text" class="form-control" name="warna" id="warna" placeholder="merk_barang">
                    </div>

                    <div class="form-group ">
                        <label class="">Nama Pelapor</label>
                        <input type="text" class="form-control" name="nama_pelapor" id="nama_pelapor" placeholder="merk_barang">
                    </div>

                    <div class="form-group ">
                        <label class="">No Hp Pelapor</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="merk_barang">
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
