@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman ketua Posko</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data ketua Posko</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-right">
                        <a  href="{{Route('ketuaPoskoCetak')}}" class="btn btn-sm btn-secondary" target="_blank"><i class="fa fa-print"></i> Cetak Data</a>
                        <a  href="{{Route('ketuaPoskoFilter')}}" class="btn btn-sm btn-secondary" ><i class="fa fa-filter"></i> Filter Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-0" id="datatable-default">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Posko</th>
                                    <th>Periode Haul</th>
                                    <th>No Hp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                               <tr>
                               <td>{{$loop->iteration}}</td>
                               <td>{{$d->user->nama}}</td>
                               <td>{{$d->posko->nama_posko}}</td>
                               <td> Periode tahun {{\carbon\carbon::parse($d->posko->haul_sekumpul->created_at)->format('Y')}}</td>
                               <td>{{$d->user->no_hp}}</td>
                               <td>
                                @if(Auth::user()->role == 2 || Auth::user()->ketua_posko->id == $d->id)
                               <a href="{{Route('ketuaShow',['uuid'=>$d->uuid])}}" class="btn btn-sm btn-warning m-1 text-white">
                                                <i class="fa fa-info-circle"></i></a>
                                            <a href="{{Route('ketuaEdit',['uuid'=>$d->uuid])}}" class="btn btn-sm btn-primary m-1 text-white">
                                                <i class="fa fa-edit"></i></a>
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