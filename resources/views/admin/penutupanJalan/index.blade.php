@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Informasi Penutupan Jalan</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Informasi Penutupan Jalan</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-right">
                        <button class="btn btn-sm btn-success" id="tambah"><i class="fa fa-plus"></i>Tambah
                            Data</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0" id="datatable-default">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th> Periode Haul</th>
                                    <th>Nama Jalan</th>
                                    <th>Status</th>
                                    <th>Jalan Alternatif</th>
                                    <th>Durasi Pengalihan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{carbon\carbon::parse($d->haul_sekumpul->created_at)->translatedFormat('Y')}}
                                    </td>
                                    <td>{{$d->nama_jalan}}</td>
                                    <td>
                                        @if($d->status == 1)
                                        Ditutup
                                        @elseif($d->status == 2)
                                        Dibuka
                                        @else
                                        Dialihkan
                                        @endif
                                    </td>
                                    <td>{{$d->jalan_alternatif}}</td>
                                    <td>{{carbon\carbon::parse($d->tgl_mulai)->translatedFormat('d F Y')}} -
                                        {{carbon\carbon::parse($d->tgl_selesai)->translatedFormat('d F Y')}}
                                    </td>
                                    <td>
                                        <a href="{{Route('penutupanJalanEdit',['uuid' => $d->uuid])}}"
                                            class="btn btn-sm btn-primary m-1 text-white">
                                            <i class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger" onclick="Hapus('{{$d->uuid}}')"> <i
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
                <form action="{{Route('penutupanJalanStore')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Haul</label>
                        <select name="haul_sekumpul_id" id="haul_id" class="form-control" required>
                            @foreach($haul as $h)
                            <option value="{{$h->id}}">Periode
                                {{\carbon\carbon::parse($h->tanggal_mulai)->translatedFormat('Y')}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group ">
                        <label class="">Nama Jalan</label>
                        <input type="text" class="form-control" name="nama_jalan" id="nama_jalan" required>
                    </div>
                    <!-- kategori default Pengeluaran -->
                    <div class="form-group ">
                        <label class="">Status</label>
                        <select name="status" id="status_jalan" class="form-control">
                            <option value="1">Ditutup</option>
                            <option value="2">Dibuka</option>
                            <option value="3">Dialihkan</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label class="">Jalan Alternatif</label>
                        <input type="text" class="form-control" name="jalan_alternatif" id="jalan_alternatif" required>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group ">
                                <label class="">Dari</label>
                                <input type="date" class="form-control" name="tgl_mulai" id="tgl_mulai" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group ">
                                <label class="">Sampai</label>
                                <input type="date" class="form-control" name="tgl_selesai" id="tgl_selesai" required>
                            </div>
                        </div>
                    </div>
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
    
        function Hapus(uuid) {
			Swal.fire({
			title: 'Anda Yakin?',
			text: " Menghapus Penutupan Jalan " ,        
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				url = '{{route("penutupanJalanDestroy",'')}}';
				window.location.href =  url+'/'+uuid ;			
			}
		})
        }
</script>
@endsection