@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Pemasukan Mesjid</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Pemasukan</span></li>
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
                                    <th>Judul</th>
                                    <th>Donatur</th>
                                    <th>Besaran</th>
                                    <th>penerima</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->arraudah->judul}}</td>
                                    <td>{{$d->nama_donatur}}</td>
                                    <td>Rp.{{$d->besaran}},-</td>
                                    <td>{{$d->user->nama}}</td>
                                    <td>
                                        <!-- <a href="{{Route('pemasukanShow',['uuid' => $d->uuid])}}"
                                            class="btn btn-sm btn-warning m-1" id="detail">
                                            <i class="fa fa-file"></i></a> -->
                                        <a href="{{Route('pemasukanEdit',['uuid' => $d->uuid])}}"
                                            class="btn btn-sm btn-primary m-1 text-white">
                                            <i class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger" onclick="Hapus('{{$d->uuid}}','{{$d->nama_donatur}}')"> <i
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
                <form action="{{Route('pemasukanStore')}}" method="post">
                    @csrf
                    <div class="form-group ">
                        <label class="">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul">
                    </div>
                    <div class="form-group ">
                        <label class="">Isi </label>
                        <textarea id="summernote" name="isi"></textarea>
                    </div>
                    <!-- kategori default pemasukan -->
                    <div class="form-group ">
                        <label class="">Donatur</label>
                        <input type="text" class="form-control" name="nama_donatur" id="nama_donatur"
                            placeholder="Nama Donatur">
                    </div>
                    <div class="form-group ">
                        <label class="">Besaran (Rp.)</label>
                        <input type="text" class="form-control" name="besaran" id="no_hp" placeholder="Rp.">
                    </div>
                    <div class="form-group ">
                        <label class="">Penanggungjawab</label>
                        <input type="text" class="form-control" value="{{Auth::user()->nama}}" id="no_hp" placeholder=""
                            readonly>
                    </div>
                    <!-- Nama Penerima dari Auth -->
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

        {{-- $("#detail").click(function(){
            window.location.replace("{{Route('pemasukanShow')}}");
        }); --}}

        $(document).ready(function() {
            $('#summernote').summernote();
        });

        function Hapus(uuid, nama) {
			Swal.fire({
			title: 'Anda Yakin?',
			text: " Menghapus Data Pemasukan " + nama ,        
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			cancelButtonText: 'Batal',
            confirmButtonText: 'Hapus'
		}).then((result) => {
			if (result.value) {
				url = '{{route("pemasukanDestroy",'')}}';
				window.location.href =  url+'/'+uuid ;			
			}
		})
        }
</script>
@endsection