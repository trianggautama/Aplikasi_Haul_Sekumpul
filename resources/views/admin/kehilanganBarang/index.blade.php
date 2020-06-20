@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Kehilangan Barang</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Kehilangan Barang</span></li>
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
                        <a href="{{Route('kehilanganBarangFilter')}}" class="btn btn-sm btn-secondary"><i
                                class="fa fa-filter"></i> Filter Data</a>
                        <a href="{{Route('kehilanganBarangCetak')}}" class="btn btn-sm btn-secondary" target="_blank"><i
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
                                    <th>Nama Posko</th>
                                    <th>Nama Barang</th>
                                    <th>Deskripsi</th>
                                    <th>Merk</th>
                                    <th>Status</th>
                                    <th>Tanggal Pelaporan</th>
                                    <th>Nama Pelapor</th>
                                    <th>No Hp Pelapor</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->posko->nama_posko}}</td>
                                    <td>{{$d->nama_barang}}</td>
                                    <td>{{$d->deskripsi}}</td>
                                    <td>{{$d->merk}}</td>
                                    <td>
                                        @if($d->status == 1)
                                        <span class="badge badge-warning">Belum ditemukan</span>
                                        @elseif($d->status == 2)
                                        <span class="badge badge-success">Sudah ditemukan</span>
                                        @endif
                                    </td>
                                    <td>{{carbon\carbon::parse($d->created_at)->translatedFormat('d F Y')}}</td>
                                    <td>{{$d->nama_pelapor}}</td>
                                    <td>{{$d->no_hp_pelapor}}</td>
                                    <td>
                                        @if(Auth::user()->role == 2 || Auth::user()->ketua_posko->posko->id ==
                                        $d->posko_id)
                                        <a href="{{Route('kehilanganBarangEdit',['uuid' => $d->uuid])}}"
                                            class="btn btn-sm btn-primary m-1 text-white">
                                            <i class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger"
                                            onclick="Hapus('{{$d->uuid}}','{{$d->nama_barang}}')"> <i
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
                <form action="{{Route('kehilanganBarangStore')}}" method="post">
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
                        <label class="">Nama Pelapor</label>
                        <input type="text" class="form-control" name="nama_pelapor" id="nama_pelapor"
                            placeholder="nama_pelapor" required>
                    </div>
                    <div class="form-group ">
                        <label class="">Nomor Hp Pelapor</label>
                        <input type="text" class="form-control" name="no_hp_pelapor" id="no_hp_pelapor"
                            placeholder="no_hp_pelapor" required>
                    </div>
                    <div class="form-group ">
                        <label class="">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_barang" id="nama_barang"
                            placeholder="nama_barang" required>
                    </div>
                    <div class="form-group ">
                        <label class="">Merk Barang</label>
                        <input type="text" class="form-control" name="merk" id="merk" placeholder="Merk barang" required>
                    </div>
                    <div class="form-group ">
                        <label class="">Nomor Hp</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor hp" required>
                    </div>
                    <div class="form-group ">
                        <label class="">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi" required>
                    </div>
                    <div class="form-group ">
                        <label class="">Status Barang</label>
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
			text: " Menghapus Data Kehilangan Barang " + nama ,        
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				url = '{{route("kehilanganBarangDestroy",'')}}';
				window.location.href =  url+'/'+uuid ;			
			}
		})
        }
</script>
@endsection