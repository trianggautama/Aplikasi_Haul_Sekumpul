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
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-right">
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
                                    <th>info</th>
                                    <th>Tanggal mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Ketua Panitia</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                @php
                                $info = $d->informasi_acara;
                                @endphp
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{!! $info !!}</td>
                                    <td>{{$d->tanggal_mulai}}</td>
                                    <td>{{$d->tanggal_selesai}}</td>
                                    <td>{{$d->ketua_panitia}}</td>
                                    <td>
                                        <a href="{{Route('haulShow',['uuid'=>$d->uuid])}}"
                                            class="btn btn-sm btn-warning m-1 "> <i class="fa fa-file"></i></a>
                                        <a href="{{Route('haulEdit',['uuid'=>$d->uuid])}}"
                                            class="btn btn-sm btn-primary m-1 "> <i class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger m-1" onclick="Hapus('{{$d->uuid}}')"> <i
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
                <form action="{{route('haulStore')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Informasi</label>
                        <textarea id="summernote" name="informasi_acara" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Mulai</label>
                        <input type="date" class="form-control" name="tanggal_mulai" placeholder="username" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Selesai</label>
                        <input type="date" class="form-control" name="tanggal_selesai" id="password" required>
                    </div>
                    <div class="form-group ">
                        <label class="">Nama Katua Panitia</label>
                        <input type="text" class="form-control" name="ketua_panitia" id="nama" placeholder="Nama"
                            required>
                    </div>
                    <div class="form-group ">
                        <label class="">Nomor Hp</label>
                        <input type="text" class="form-control" name="no_hp_ketua" id="no_hp_ketua"
                            placeholder="Nomor Hp Ketua Panitia" required>
                    </div>
                    <div class="form-group ">
                        <label class="">Foto Ketua Panitia</label>
                        <input type="file" class="form-control" name="foto" id="foto">
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

        function Hapus(uuid) {
			Swal.fire({
			title: 'Anda Yakin?',
			text: " Menghapus Haul " ,        
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				url = '{{route("haulDestroy",'')}}';
				window.location.href =  url+'/'+uuid ;			
			}
		})
        }
</script>
@endsection