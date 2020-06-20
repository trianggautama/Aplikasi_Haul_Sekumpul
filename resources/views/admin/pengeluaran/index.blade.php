@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Pengeluaran Mesjid</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li> 
                <li><span>Data Pengeluaran</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-right">
                        <a href="{{Route('pengeluaranCetak')}}" class="btn btn-sm btn-secondary" target="_blank"><i class="fa fa-print"></i> Cetak Data</a>
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
                                    <th>Keperluan</th>
                                    <th>Besaran</th>
                                    <th>penanggung Jawab</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->arraudah->judul}}</td>
                                    <td>{{$d->keperluan}}</td>
                                    <td><p class="text-success">Rp.{{$d->besaran}},-</p></td>
                                    <td>{{$d->user->nama}}</td>
                                    <td>
                                        <a href="{{Route('pengeluaranEdit',['uuid' => $d->uuid])}}"
                                            class="btn btn-sm btn-primary m-1 text-white">
                                            <i class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger" onclick="Hapus('{{$d->uuid}}','{{$d->arraudah->judul}}')"> <i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                        @php
                            $sisa = $pemasukan - $data->sum('besaran');
                        @endphp
                        <h5>Total Pengeluaran : </h5> <p class="text-danger">Rp.{{$data->sum('besaran')}},-</p>
                        <h5>Sisa Keuangan Mesjid:</h5> <p class="text-success">Rp. {{$sisa}},-</p>
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
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul">
                    </div>
                    <div class="form-group ">
                        <label class="">Isi </label>
                        <textarea id="summernote" name="isi"></textarea>
                    </div>
                    <!-- kategori default Pengeluaran -->
                    <div class="form-group ">
                        <label class="">Keperluan</label>
                        <input type="text" class="form-control" name="keperluan" id="keperluan" placeholder="Keperluan" required>
                    </div>
                    <div class="form-group ">
                        <label class="">Besaran (Rp.)</label>
                        <input type="text" class="form-control" name="besaran" id="no_hp" placeholder="Rp." required>
                    </div>
                    <div class="form-group ">
                        <label class="">Penanggungjawab</label>
                        <input type="text" class="form-control" value="{{Auth::user()->nama}}" id="no_hp" placeholder=""
                            readonly>
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

        function Hapus(uuid, judul) {
			Swal.fire({
			title: 'Anda Yakin?',
			text: " Menghapus Data Pengeluaran " + judul ,        
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				url = '{{route("pengeluaranDestroy",'')}}';
				window.location.href =  url+'/'+uuid ;			
			}
		})
        }
</script>
@endsection