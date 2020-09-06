@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Parkiran</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Lokasi Parkir</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    @if(Auth::user()->role == 2)
                    <div class="text-right">
                        <a href="{{Route('parkiranFilter')}}" class="btn btn-sm btn-secondary"><i
                                class="fa fa-filter"></i> Filter Data</a>
                        <a href="{{Route('parkiranCetak')}}" class="btn btn-sm btn-secondary" target="_blank"><i
                                class="fa fa-print"></i> Cetak Data</a>
                    </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0" id="datatable-default">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Alamat</th>
                                    <th>Nama Posko</th>
                                    <th>Petugas</th>
                                    <th>Jenis Parkir</th>
                                    <th>Luas Parkir</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->alamat}}</td>
                                    @if(isset($d->posko))
                                    <td>{{$d->posko->nama_posko}}</td>
                                    @else
                                    <td></td>
                                    @endif
                                    <td>{{$d->anggota_posko->nama}}</td>
                                    <td>{{$d->jenis_parkir}}</td>
                                    <td>{{$d->luas_parkir}}</td>
                                    <td>Terisi {{$d->status}} %</td>
                                    <td>
                                        @if(Auth::user()->role ==2 || Auth::user()->ketua_posko->posko->id ==
                                        $d->posko->id)
                                        <a href="{{Route('parkiranEdit',['uuid'=>$d->uuid])}}"
                                            class="btn btn-sm btn-primary m-1 text-white">
                                            <i class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger"
                                            onclick="Hapus('{{$d->uuid}}','{{$d->alamat}}')"> <i
                                                class="fa fa-trash"></i></button>
                                        @endif
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
                <form action="{{Route('pengeluaranStore')}}" method="post">
                    @csrf
                    <div class="form-group ">
                        <label class="">Judul</label>
                        <input type="text" class="form-control" name="nama_posko" id="nama_posko" placeholder="Judul">
                    </div>
                    <div class="form-group ">
                        <label class="">Isi </label>
                        <textarea id="summernote" name="informasi_acara"></textarea>
                    </div>
                    <!-- kategori default Pengeluaran -->
                    <div class="form-group ">
                        <label class="">Keperluan</label>
                        <input type="text" class="form-control" name="keperluan" id="keperluan" placeholder="Keperluan">
                    </div>
                    <div class="form-group ">
                        <label class="">Besaran (Rp.)</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Rp.">
                    </div>
                    <!-- Nama penanggungjawab dari Auth -->
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
			text: " Menghapus Lokasi Parkir " + nama ,        
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				url = '{{route("parkiranDestroy",'')}}';
				window.location.href =  url+'/'+uuid ;			
			}
		})
        }
</script>
@endsection