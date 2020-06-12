@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Anggota Posko</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Anggota Posko</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-right"> 
                        <a href="{{Route('anggotaFilter')}}" class="btn btn-sm btn-secondary"><i class="fa fa-filter"></i> Filter Data</a>
                        <a href="{{Route('anggotaCetak')}}" class="btn btn-sm btn-secondary" target="_blank"><i class="fa fa-print"></i> Cetak Data</a>
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
                                    <th>Bagian Tugas</th>
                                    <th>No Hp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->nama}}</td>
                                    <td>{{$d->posko->nama_posko}}</td>
                                    <td> {{$d->tugas}}</td>
                                    <td>{{$d->no_hp}}</td>
                                    <td>
                                    <a href="{{Route('anggotaShow',['uuid'=>$d->uuid])}}" class="btn btn-sm btn-warning m-1"
                                                    id="detail">
                                                    <i class="fa fa-info-circle"></i></a>
                                                    <a href="{{Route('anggotaEdit',['uuid'=>$d->uuid])}}" class="btn btn-sm btn-primary m-1 text-white">
                                                        <i class="fa fa-edit"></i></a>
                                                        <button class="btn btn-sm btn-danger" onclick="Hapus('{{$d->uuid}}','{{$d->nama}}')"> <i
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
			text: " Menghapus Data Anggota " + nama ,        
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				url = '{{route("anggotaDestroy",'')}}';
				window.location.href =  url+'/'+uuid ;			
			}
		})
        }
</script>
@endsection