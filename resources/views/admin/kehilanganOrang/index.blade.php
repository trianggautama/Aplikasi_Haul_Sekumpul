@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Kehilangan Orang</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Kehilangan Orang</span></li>
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
                    <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-0" id="datatable-default">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Posko Pelaporan</th>
                                    <th>Nama </th>
                                    <th>Umur</th>
                                    <th>Alamat</th>
                                    <th>Ciri Fisik</th>
                                    <th>Deskripsi</th>
                                    <th>Status</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                               <tr>
                               <td>1</td>
                               <td>Posko 2</td>
                               <td>Agung</td>
                               <td> 12 Tahun</td>
                               <td>jl.ayani bjb</td>
                               <td>Tinggi sekitar 150 cm ,gundul</td>
                               <td>-</td>
                               <td>Belum Ditemukan</td>
                               <td>
                                            <a href="{{Route('kehilanganOrangEdit')}}" class="btn btn-sm btn-primary m-1 text-white">
                                                <i class="fa fa-edit"></i></a>
                                                <button class="btn btn-sm btn-danger" onclick="Hapus()"> <i
											class="fa fa-trash"></i></button>          
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
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{Route('pengeluaranStore')}}" method="post">
            @csrf
                    <div class="form-group ">
                        <label class="">Posko Terdekat</label>
                        <select name="posko_id" id="" class="form-control">
                            <option value="">ambil dari posko</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label class="">Nama Orang</label>
                        <input type="text" class="form-control" name="nama_Orang" id="nama_Orang" placeholder="nama_Orang">
                    </div>
                    <div class="form-group ">
                        <label class="">Umur</label>
                        <input type="text" class="form-control" name="merk_Orang" id="merk_Orang" placeholder="merk_barang">
                    </div>
                    <div class="form-group ">
                        <label class="">Alamat</label>
                        <textarea name="alamat" id="" class="form-control"></textarea>
                    </div>

                    <div class="form-group ">
                        <label class="">Ciri Fisik</label>
                        <textarea name="ciri_fisik" id="" class="form-control"></textarea>
                    </div>
                    <div class="form-group ">
                        <label class="">Deskripsi</label>
                        <textarea name="deskripsi" id="" class="form-control"></textarea>
                    </div>
                    <div class="form-group ">
                        <label class="">Status</label>
                        <select name="posko_id" id="" class="form-control">
                            <option value="">belum ditemukan</option>
                            <option value="">sudah ditemukan</option>
                        </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
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

        function Hapus(uuid, nama) {
			Swal.fire({
			title: 'Anda Yakin?',
			text: " Menghapus Posko " + nama ,        
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				url = '{{route("poskoDestroy",'')}}';
				window.location.href =  url+'/'+uuid ;			
			}
		})
        }
</script>
@endsection