@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Penemuan Kendaraan</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="#">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Penemuan Kendaraan </span></li>
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
                        <a href="{{Route('penemuanKendaraanFilter')}}" class="btn btn-sm btn-secondary"><i
                                class="fa fa-filter"></i> Filter Data</a>
                        <a href="{{Route('penemuanKendaraanCetak')}}" class="btn btn-sm btn-secondary"
                            target="_blank"><i class="fa fa-print"></i> Cetak Data</a>
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
                                    <th>Parkiran</th>
                                    <th>Nopol</th>
                                    <th>Merk Kendaraan</th>
                                    <th>Warna</th>
                                    <th>Nama Pelapor</th>
                                    <th>No Hp Pelapor</th>
                                    <th>Status</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->lokasi_parkir->alamat}}, Posko {{$d->lokasi_parkir->posko->nama_posko}}
                                    </td>
                                    <td>{{$d->plat_nomor}}</td>
                                    <td>{{$d->merk_kendaraan}}</td>
                                    <td>{{$d->warna}}</td>
                                    <td>{{$d->nama_pelapor}}</td>
                                    <td>{{$d->no_hp_pelapor}}</td>
                                    <td>
                                        @if($d->status == 1)
                                        <span class="badge badge-warning">Belum diambil</span>
                                        @elseif($d->status == 2)
                                        <span class="badge badge-success">Sudah diambil</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if(Auth::user()->role == 2 || Auth::user()->ketua_posko->posko->id ==
                                        $d->posko_id)
                                        <a href="{{Route('penemuanKendaraanShow',['uuid' => $d->uuid])}}"
                                            class="btn btn-sm btn-warning m-1 text-white">
                                            <i class="fa fa-info-circle"></i></a>
                                        <a href="{{Route('penemuanKendaraanEdit',['uuid' => $d->uuid])}}"
                                            class="btn btn-sm btn-primary m-1 text-white">
                                            <i class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger m-1"
                                            onclick="Hapus('{{$d->uuid}}','{{$d->plat_nomor}}')"> <i
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
                <form action="{{Route('penemuanKendaraanStore')}}" method="post" enctype="multipart/form-data">
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
                    <input type="hidden" name="posko_id" value="{{Auth::user()->ketua_posko->posko->id}}">
                    @endif
                    <div class="form-group ">
                        <label class="">Lokasi Parkir</label>
                        <select name="lokasi_parkir_id" id="" class="form-control" required>
                            <option value="">Pilih lokasi parkir</option>
                            @foreach ($lokasi_parkir as $d)
                            @if(isset($d->posko))
                            <option value="{{$d->id}}">{{$d->alamat}}, Posko {{$d->posko->nama_posko}}</option>
                            @else
                            <option value="">Data lokasi parkir belum diinput</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group ">
                        <label class="">Nomor Polisi</label>
                        <input type="text" class="form-control" name="plat_nomor" id="plat_nomor" placeholder="DA XXX"
                            required>
                    </div>
                    <div class="form-group ">
                        <label class="">Merk Kendaraan</label>
                        <input type="text" class="form-control" name="merk_kendaraan" id="merk_kendaraan"
                            placeholder="merk_kendaraan" required>
                    </div>
                    <div class="form-group ">
                        <label class="">Warna</label>
                        <input type="text" class="form-control" name="warna" id="warna" placeholder="Warna" required>
                    </div>

                    <div class="form-group ">
                        <label class="">Nama Pelapor</label>
                        <input type="text" class="form-control" name="nama_pelapor" id="nama_pelapor"
                            placeholder="nama_pelapor" required>
                    </div>
                    <div class="form-group ">
                        <label class="">No Hp Pelapor</label>
                        <input type="text" class="form-control" name="no_hp_pelapor" id="no_hp_pelapor"
                            placeholder="Nomor HP Pelapor" maxlength="12" required>
                    </div>
                    <div class="form-group ">
                        <label class="">Foto Kendaraan</label>
                        <input type="file" class="form-control" name="foto" id="foto" required>
                    </div>
                    <div class="form-group">
                        <label class="">Status Kendaraan</label>
                        <select name="status" id="" class="form-control" required>
                            <option value="1">Belum diambil</option>
                            <option value="2">Sudah diambil</option>
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
			text: " Menghapus data penemuan kendaraan dengan plat nomor " + nama ,        
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				url = '{{route("penemuanKendaraanDestroy",'')}}';
				window.location.href =  url+'/'+uuid ;			
			}
		})
        }
</script>
@endsection