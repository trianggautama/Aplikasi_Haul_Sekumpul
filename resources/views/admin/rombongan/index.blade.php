@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Rombongan Haul</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Rombongan</span></li>
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
                            <a href="{{Route('rombonganFilter')}}" class="btn btn-sm btn-secondary"><i class="fa fa-filter"></i> Filter Data</a>
                            <a href="{{Route('rombonganCetak')}}" class="btn btn-sm btn-secondary" target="_blank"><i class="fa fa-print"></i> Cetak Data</a>
                        @endif
                            <button class="btn btn-sm btn-success" id="tambah"><i class="fa fa-plus"></i> Tambah  Data</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0" id="datatable-default">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Haul</th>
                                    <th>Asal Rombongan</th>
                                    <th>Ketua Rombongan</th>
                                    <th>Jumlah Rombongan</th>
                                    <th>Pendata</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>Periode
                                        {{\carbon\carbon::parse($d->haul_sekumpul->tanggal_mulai)->translatedFormat('Y')}}
                                    </td>
                                    <td>{{$d->asal_rombongan}}</td>
                                    <td>{{$d->nama_ketua_rombongan}}</td>
                                    <td>{{$d->jumlah_rombongan}} orang</td>
                                    <td>{{$d->posko->nama_posko}}</td>
                                    <td>
                                        @if(Auth::user()->role == 2 || Auth::user()->ketua_posko->posko->id == $d->posko_id)
                                        <a href="{{Route('rombonganEdit',['uuid' => $d->uuid])}}"
                                            class="btn btn-sm btn-primary m-1 text-white">
                                            <i class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger" onclick="Hapus('{{$d->uuid}}','{{$d->asal_rombongan}}')"> <i
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
                <form action="{{Route('rombonganStore')}}" method="post">
                    @csrf  
                    @if(Auth::user()->role == 2)            
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
                            <label class="">Posko Terdekat</label>
                            <select name="posko_id" id="" class="form-control">
                                <option value="">Pilih posko</option>
                                @foreach ($posko as $d)
                                <option value="{{$d->id}}">{{$d->nama_posko}}</option>
                                @endforeach
                            </select>
                        </div>   
                    @else
                        <input type="hidden" name="haul_sekumpul_id" value="{{Auth::user()->ketua_posko->posko->haul_sekumpul->id}}">
                        <input type="hidden" name="posko_id" value="{{Auth::user()->ketua_posko->posko->id}}">
                    @endif   
                    <div class="form-group ">
                        <label class="">Asal Rombongan</label>
                        <input type="text" class="form-control" name="asal_rombongan" id="asal_rombongan"
                            placeholder="Asal rombongan" required>
                    </div>
                    <div class="form-group ">
                        <label class="">Ketua Rombongan</label>
                        <input type="text" class="form-control" name="nama_ketua_rombongan" id="nama_ketua_rombongan"
                            placeholder="Ketua Rombongan" required>
                    </div>
                    <div class="form-group ">
                        <label class="">No Hp</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor Hp" maxlength="12" required>
                    </div>
                    <div class="form-group ">
                        <label class="">Jumlah rombongan</label>
                        <input type="number" class="form-control" name="jumlah_rombongan" id="jumlah_rombongan" required>
                    </div>
                    <!-- Nama pendata ngambil dari auth login -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
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

        {{--  $("#detail").click(function(){
            window.location.replace("{{Route('rombonganShow')}}");
        });  --}}

        function Hapus(uuid, nama) {
			Swal.fire({
			title: 'Anda Yakin?',
			text: " Menghapus data rombongan " + nama ,        
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				url = '{{route("rombonganDestroy",'')}}';
				window.location.href =  url+'/'+uuid ;			
			}
		})
        }
</script>
@endsection