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
                        @if(Auth::user()->role == 2)
                        <a href="{{Route('kehilanganOrangFilter')}}" class="btn btn-sm btn-secondary"><i
                                class="fa fa-filter"></i> Filter Data</a>
                        <a href="{{Route('kehilanganOrangCetak')}}" class="btn btn-sm btn-secondary" target="_blank"><i
                                class="fa fa-print"></i> Cetak Data</a>
                        @endif
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
                                    <th>Catatan</th>
                                    <th>Status</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->posko->nama_posko}}</td>
                                    <td>{{$d->nama_orang}}</td>
                                    <td>{{$d->umur}}</td>
                                    <td>{{$d->alamat}}</td>
                                    <td>{{$d->ciri_fisik}}</td>
                                    <td>{{$d->deskripsi}}</td>
                                    <td>
                                        @if($d->status == 1)
                                        <span class="badge badge-warning">Belum ditemukan</span>
                                        @elseif($d->status == 2)
                                        <span class="badge badge-success">Sudah ditemukan</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if(Auth::user()->role == 2 || Auth::user()->ketua_posko->posko->id ==
                                        $d->posko_id)
                                        <a href="{{Route('kehilanganOrangEdit',['uuid' => $d->uuid])}}"
                                            class="btn btn-sm btn-primary m-1 text-white">
                                            <i class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger"
                                            onclick="Hapus('{{$d->uuid}}','{{$d->nama_orang}}')"> <i
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
                <form action="{{Route('kehilanganOrangStore')}}" method="post">
                    @csrf
                    @if(Auth::user()->role == 2)
                    <div class="form-group ">
                        <label class="">Posko Terdekat</label>
                        <select name="posko_id" id="" class="form-control" required>
                            <option value="">Pilih posko</option>
                            @foreach ($posko as $d)
                            <option value="{{$d->id}}">{{$d->nama_posko}}</option>
                            @endforeach
                        </select>
                    </div>
                    @else
                    <input type="hidden" name="posko_id" value="{{Auth::user()->ketua_posko->posko->id}}" required>
                    @endif
                    <div class="form-group ">
                        <label class="">Nama Orang</label>
                        <input type="text" class="form-control" name="nama_orang" id="nama_orang"
                            placeholder="nama_orang" required>
                    </div>
                    <div class="form-group ">
                        <label class="">Umur</label>
                        <input type="text" class="form-control" name="umur" id="umur" placeholder="Umur" required>
                    </div>
                    <div class="form-group ">
                        <label class="">Alamat</label>
                        <textarea name="alamat" id="" class="form-control" required></textarea>
                    </div>

                    <div class="form-group ">
                        <label class="">Ciri Fisik</label>
                        <textarea name="ciri_fisik" id="" class="form-control" required></textarea>
                    </div>
                    <div class="form-group ">
                        <label class="">Catatan</label>
                        <textarea name="deskripsi" id="" class="form-control" required></textarea>
                    </div>
                    <div class="form-group ">
                        <label class="">Status</label>
                        <select name="status" id="" class="form-control" required>
                            <option value="1">Belum ditemukan</option>
                            <option value="2">Sudah ditemukan</option>
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
			text: " Menghapus data kehilangan orang dengan nama " + nama ,        
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				url = '{{route("kehilanganOrangDestroy",'')}}';
				window.location.href =  url+'/'+uuid ;			
			}
		})
        }
</script>
@endsection