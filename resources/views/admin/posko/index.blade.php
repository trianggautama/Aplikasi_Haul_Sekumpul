@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Posko</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Posko</span></li>
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
                        <a href="{{Route('poskoFilter')}}" class="btn btn-sm btn-secondary"><i class="fa fa-filter"></i> filter Cetak Data</a>
                        <a href="{{Route('poskoCetak')}}" class="btn btn-sm btn-secondary" target="_blank"><i class="fa fa-print"></i> Cetak Data</a>
                        <button class="btn btn-sm btn-success" id="tambah"><i class="fa fa-plus"></i> Tambah
                            Data</button>
                    @endif
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0" id="datatable-default">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>haul</th>
                                    <th>Nama Posko</th>
                                    <th>Alamat</th>
                                    <th>Jenis Posko</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>Periode Haul {{\carbon\carbon::parse($d->haul_sekumpul->tanggal_mulai)->translatedFormat('Y')}}</td>
                                        <td>{{$d->nama_posko}}</td>
                                        <td>{{$d->alamat}} </td>
                                        <td>
                                            @if($d->jenis_posko == 1)
                                                <p>Posko Induk</p>
                                            @elseif($d->jenis_posko == 2)
                                                <p>Posko Non Induk</p>
                                            @else
                                                <p>Posko Kesehatan</p>
                                            @endif
                                        </td>
                                        <td>
                                            @if(Auth::user()->role == 2 || Auth::user()->ketua_posko->posko->id == $d->id )
                                            <a href="{{Route('poskoShow',['uuid'=>$d->uuid])}}" class="btn btn-sm btn-warning m-1"
                                            id="detail">
                                            <i class="fa fa-info-circle"></i></a>
                                            <a href="{{Route('poskoEdit',['uuid'=>$d->uuid])}}" class="btn btn-sm btn-primary m-1 text-white">
                                                <i class="fa fa-edit"></i></a>
                                                @if(Auth::user()->role == 2)
                                                <button class="btn btn-sm btn-danger" onclick="Hapus('{{$d->uuid}}','{{$d->nama_posko}}')"> <i
                                            class="fa fa-trash"></i></button>  
                                            @endif
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
            <form action="{{Route('poskoStore')}}" method="post">
            @csrf
                    <div class="form-group">
                        <label for="">Haul</label>
                        <select name="haul_sekumpul_id" id="haul_id" class="form-control">
                            <option value="">-- Pilih Periode Haul --</option>
                            @foreach($haul as $h)
                                <option value="{{$h->id}}">Periode {{\carbon\carbon::parse($h->tanggal_mulai)->translatedFormat('Y')}}</option> 
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group ">
                        <label class="">Nama Posko</label>
                        <input type="text" class="form-control" name="nama_posko" id="nama_posko" placeholder="Nama Posko" required>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                    </div>
                    <div class="form-group ">
                        <label class="">Nomor HP Posko</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor Telepon" maxlength="12" required>
                    </div>
                    <div class="form-group">
                    <label for="">Jenis Posko</label>
                        <select name="jenis_posko" id="jenis_posko" class="form-control" required>
                            <option value="">-- Pilih Jenis --</option>
                            <option value="1">Posko Induk</option>
                            <option value="2">Posko Non Induk</option>
                            <option value="3">Posko Kesehatan</option>
                        </select>
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