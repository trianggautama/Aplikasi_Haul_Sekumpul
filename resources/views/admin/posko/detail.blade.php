@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Detail Posko</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Posko</span></li>
                <li><span>Detail</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Detail Posko
                    <div class="text-right">
                        <a href="{{Route('poskoDetailCetak',['uuid'=> $data->uuid])}}" class="btn btn-sm btn-secondary"
                            target="_blank"><i class="fa fa-print"></i> Cetak Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> <b>Nama Posko</b></label>
                                <p>{{$data->nama_posko}}</p>
                            </div>
                            <div class="form-group">
                                <label for=""> <b> No Telepon Posko</b> </label>
                                <p>{{$data->no_hp}}</p>
                            </div>

                            <div class="form-group">
                                <label for=""> <b>Periode Haul</b> </label>
                                <p>Periode Haul
                                    {{\carbon\carbon::parse($data->haul_sekumpul->created_at)->translatedFormat('Y')}}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> <b>Jenis Posko</b> </label>
                                @if($data->jenis_posko == 1)
                                <p>Posko Induk</p>
                                @elseif($data->jenis_posko == 2)
                                <p>Posko Non Induk</p>
                                @else
                                <p>Posko Kesehatan</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for=""> <b>Ketua Posko</b>
                                    @if($data->ketua_posko != null)
                                    <a href="{{Route('ketuaEdit',['uuid'=>$data->ketua_posko->uuid])}}"
                                        class="btn btn-xs btn-primary ml-4 text-white"> Ubah Data</a>
                                    <a href="{{Route('ketuaShow',['uuid'=>$data->ketua_posko->uuid])}}"
                                        class="btn btn-xs btn-success text-white"> Detail Ketua Posko</a>
                                    @else
                                    <a id="ubah-ketua" class="ml-4 text-success"> + tambah Data</a>
                                    @endif
                                </label>
                                <table>
                                    <tr>
                                        <td>Nama</td>
                                        <td class="pl-3">:
                                            @if(isset($data->ketua_posko))
                                            {{$data->ketua_posko->user->nama}}
                                            @else
                                            Belum diisi
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Telepon</td>
                                        <td class="pl-3">:
                                            @if(isset($data->ketua_posko))
                                            {{$data->ketua_posko->user->no_hp}}
                                            @else
                                            Belum diisi
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td class="pl-3">:
                                            @if(isset($data->ketua_posko))
                                            {{$data->ketua_posko->alamat}}
                                            @else
                                            Belum diisi
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            Data Anggota Posko
                        </div>
                        <div class="col-md-6">
                            <div class="text-right">
                                <button class="btn btn-sm btn-secondary"><i class="fa fa-print"></i> Cetak Data</button>
                                <button class="btn btn-sm btn-success" id="tambahAnggota"><i class="fa fa-plus"></i>
                                    Tambah Data</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped mb-0" id="datatable-default">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Bagian Tugas</th>
                                <th>No Hp</th>
                                <th>Username</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($anggota as $d)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->nama}}</td>
                                <td>{{$d->tugas}}</td>
                                <td>{{$d->no_hp}}</td>
                                <td>{{$d->user->username}}</td>
                                <td>
                                    <a href="{{Route('anggotaShow',['uuid'=>$d->uuid])}}"
                                        class="btn btn-sm btn-warning m-1">
                                        <i class="fa fa-info-circle"></i></a>
                                    <a href="{{Route('anggotaEdit',['uuid'=>$d->uuid])}}"
                                        class="btn btn-sm btn-primary m-1 text-white">
                                        <i class="fa fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger" onclick="HapusAnggota('{{$d->uuid}}')"> <i
                                            class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            Data Lokasi parkir
                        </div>
                        <div class="col-md-6">
                            <div class="text-right">
                                <button class="btn btn-sm btn-secondary"><i class="fa fa-print"></i> Cetak Data</button>
                                <button class="btn btn-sm btn-success" id="tambahParkir"><i class="fa fa-plus"></i>
                                    Tambah Data</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped mb-0" id="datatable-default">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Alamat</th>
                                <th>Petugas</th>
                                <th>Jenis Parkir</th>
                                <th>Luas Parkir</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lokasi_parkir as $d)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->alamat}}</td>
                                @if(isset($d->anggota_posko))
                                <td>{{$d->anggota_posko->nama}}</td>
                                @else
                                <td>-</td>
                                @endif
                                <td>{{$d->jenis_parkir}}</td>
                                <td>{{$d->luas_parkir}}</td>
                                <td>Terisi {{$d->status}} %</td>
                                <td>
                                    <a href="{{Route('parkiranEdit',['uuid'=>$d->uuid])}}"
                                        class="btn btn-sm btn-primary m-1 text-white">
                                        <i class="fa fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger" onclick="HapusParkir('{{$d->uuid}}')"> <i
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
</section>
</div>
</div>
<!-- modal desain  -->
<div class="modal fade" id="modal" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPendidikan">Tambah Ketua Posko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalProgress">
                <form action="{{Route('ketuaPoskoStore')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <input type="hidden" name="uuid" value="{{$data->uuid}}">
                    <div class="form-group">
                        <label for="">Nama </label>
                        <input type="text" name="nama" id="nama" class="form-control" required></input>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat </label>
                        <textarea name="alamat" id="alamat" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">No Hp</label>
                        <input type="text" class="form-control" name="no_hp" maxlength="12" required>
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="username" required>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="">foto</label>
                        <input type="file" class="form-control" name="foto" id="foto">
                    </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-success"> Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- modal desain  -->
<div class="modal fade" id="modalAnggota" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPendidikan">Tambah Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalProgress">
                <form action="{{Route('anggotaPoskoStore')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <input type="hidden" name="uuid" value="{{$data->uuid}}">
                    <div class="form-group">
                        <label for="">Nama </label>
                        <input type="text" name="nama" id="nama" class="form-control" required></input>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Hp </label>
                        <input type="text" name="no_hp" id="no_hp" class="form-control" maxlength="12" required></input>
                    </div>
                    <div class="form-group">
                        <label for="">Jabatan </label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control" required></input>
                    </div>
                    <div class="form-group">
                        <label for="">Tugas </label>
                        <input type="text" name="tugas" id="tugas" class="form-control" required></input>
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="username" required>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control" required></input>
                    </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-success"> Tambah Anggota</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- modal desain  -->
<div class="modal fade" id="modalParkir" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPendidikan">Tambah Lokasi Parkiran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalProgress">
                <form action="{{Route('parkiranStore')}}" method="post">
                    @csrf
                    <input type="hidden" name="posko_id" value="{{$data->id}}">
                    <div class="form-group">
                        <label for="">Alamat Parkir</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" required></input>
                    </div>
                    <div class="form-group">
                        <label for="">Petugas</label>
                        <select name="anggota_posko_id" id="anggota_posko_id" class="form-control">
                            <option value="">-- pilih anggota posko</option>
                            @foreach ($anggota as $d)
                            <option value="{{$d->id}}">{{$d->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Luas Parkir</label>
                        <input type="text" name="luas_parkir" id="luas_parkir" class="form-control" required></input>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Parkiran</label>
                        <select name="jenis_parkir" id="jenis_parkir" class="form-control">
                            <option value="">-- pilih jenis parkir --</option>
                            <option value="Roda 2">Roda 2</option>
                            <option value="Roda 4">Roda 4</option>
                        </select>
                    </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-success"> Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $("#ubah-ketua").click(function(){
            $('#modal').modal('show');
        });

        $("#tambahAnggota").click(function(){
            $('#modalAnggota').modal('show');
        });

        $("#tambahParkir").click(function(){
            $('#modalParkir').modal('show');
        });

        function HapusParkir(uuid, ) {
			Swal.fire({
			title: 'Anda Yakin?',
			text: " Menghapus Lokasi Parkir "  ,        
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal'
		}).then((result) => {
			if (result.value) {
				url = '{{route("parkiranDestroy",'')}}';
				window.location.href =  url+'/'+uuid ;			
			}
		})
        }

        function HapusAnggota(uuid) {
			Swal.fire({
			title: 'Anda Yakin?',
			text: " Menghapus Data Anggota " ,        
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