@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Donasi</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Donasi</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="text-right">
                        <button class="btn btn-sm btn-secondary"><i class="fa fa-print"></i> Cetak Data</button>
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
                                    <th>Nama</th>
                                    <th>Nomor HP</th>
                                    <th>Besaran</th>
                                    <th>Metode</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->nama_donatur}}</td>
                                    <td>{{$d->no_hp}}</td>
                                    <td>Rp.{{$d->besaran}},-</td>
                                    <td>
                                        @if($d->metode == 1)
                                        Cash
                                        @else
                                        Transfer
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{Route('donasiShow',['uuid' => $d->uuid])}}"
                                            class="btn btn-sm btn-warning m-1" id="detail">
                                            <i class="fa fa-file"></i></a>
                                        <a href="{{Route('donasiEdit',['uuid' => $d->uuid])}}"
                                            class="btn btn-sm btn-primary m-1 text-white">
                                            <i class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger" onclick="Hapus()"> <i
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
                <form action="{{Route('donasiStore')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Haul</label>
                        <select name="haul_sekumpul_id" id="haul_id" class="form-control">
                            <option value="">-- Pilih Periode Haul --</option>
                            @foreach($haul as $h)
                            <option value="{{$h->id}}">Periode
                                {{\carbon\carbon::parse($h->tanggal_mulai)->translatedFormat('Y')}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group ">
                        <label class="">Nama Donatur</label>
                        <input type="text" class="form-control" name="nama_donatur" id="nama_donatur"
                            placeholder="Nama Donatur">
                    </div>
                    <div class="form-group ">
                        <label class="">Nomor HP </label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor Telepon">
                    </div>
                    <div class="form-group ">
                        <label class="">Besaran (Rp.)</label>
                        <input type="number" class="form-control" name="besaran" id="besaran" placeholder="Rp.">
                    </div>
                    <div class="form-group">
                        <label for="">Metode</label>
                        <select name="metode" id="metode" class="form-control">
                            <option value="">-- Pilih Jenis --</option>
                            <option value="1">Cash</option>
                            <option value="2">Transfer</option>
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

        {{-- $("#detail").click(function(){
            window.location.replace("{{Route('donasiShow')}}");
        }); --}}

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