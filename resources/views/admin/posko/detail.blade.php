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
				<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
			</div>
		</header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Detail Posko
                        <div class="text-right">
                            <button class="btn btn-sm btn-secondary"><i class="fa fa-print"></i> Cetak Data</button>
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
                                    <p>Periode Haul {{\carbon\carbon::parse($data->haul_sekumpul->created_at)->translatedFormat('Y')}}</p>
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
                                    <label for=""> <b>Ketua Posko</b> <a id="ubah-ketua" class="ml-4 text-success"> + Ubah Data</a></label>
                                    <table>
                                        <tr>
                                            <td>Nama</td>
                                            <td class="pl-3">: Jane Doe</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Telepon</td>
                                            <td class="pl-3">: 05764467656</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td class="pl-3">: -</td>
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
                                <button class="btn btn-sm btn-success" id="tambahAnggota"><i class="fa fa-plus"></i> Tambah Data</button>
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
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                               <tr>
                               <td>1</td>
                               <td>Tri Angga T.U</td>
                               <td> Koordinator</td>
                               <td>078781826186</td>
                               <td>
                               <a href="#" class="btn btn-sm btn-warning m-1"
                                            id="detail">
                                            <i class="fa fa-file"></i></a>
                                            <a href="{{Route('anggotaEdit')}}" class="btn btn-sm btn-primary m-1 text-white">
                                                <i class="fa fa-edit"></i></a>
                                                <button class="btn btn-sm btn-danger" onclick="Hapus()"> <i
											class="fa fa-trash"></i></button>          
                               </td>
                               </tr>
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
                                <button class="btn btn-sm btn-success" id="tambahParkir"><i class="fa fa-plus"></i> Tambah Data</button>
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
                               <tr>
                               <td>1</td>
                               <td>Seberang RS </td>
                               <td> John Doe</td>
                               <td> Parkir Motor</td>
                               <td>50 m</td>
                               <td>Terisi 50 %</td>
                               <td>
                               <a href="#" class="btn btn-sm btn-warning m-1"
                                            id="detail">
                                            <i class="fa fa-file"></i></a>
                                            <a href="{{Route('parkiranEdit')}}" class="btn btn-sm btn-primary m-1 text-white">
                                                <i class="fa fa-edit"></i></a>
                                                <button class="btn btn-sm btn-danger" onclick="Hapus()"> <i
											class="fa fa-trash"></i></button>          
                               </td>
                               </tr>
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
   <div class="modal fade" id="modal"  role="dialog" >
    <div class="modal-dialog " >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPendidikan">Tambah Ketua Posko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalProgress">
              <form action="" method="post">
            @csrf
                <div class="form-group">
                    <label for="">Nama </label>
                    <input type="text" name="nama" id="nama" class="form-control" required></input> 
                </div>
                <div class="form-group">
                    <label for="">No hp </label>
                    <input type="text" name="no_hp" id="no_hp" class="form-control" required></input> 
                </div>
                <div class="form-group">
                    <label for="">Foto </label>
                    <input type="file" name="foto" id="foto" class="form-control" required></input> 
                </div>
            </div>
            <div class="card-footer text-right">
              <button type="submit"  class="btn btn-success"> Simpan</button>
            </div>
            </form>
        </div>
    </div> 
 </div>

      <!-- modal desain  -->
  <div class="modal fade" id="modalAnggota"  role="dialog" >
    <div class="modal-dialog " >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPendidikan">Tambah Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalProgress">
              <form action="" method="post">
            @csrf
              <input type="hidden" name="aplikasi_id" value="">
              <div class="form-group">
                <label for="">Nama </label>
                <input type="text" name="nama" id="nama" class="form-control" required></input> 
              </div>
              <div class="form-group">
                <label for="">Nomor Hp </label>
                <input type="text" name="no_hp" id="no_hp" class="form-control" required></input> 
              </div>
              <div class="form-group">
                <label for="">Tugas </label>
                <input type="text" name="tugas" id="tugas" class="form-control" required></input> 
              </div>
              <div class="form-group">
                <label for="">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control" required></input> 
              </div>
            </div>
            <div class="card-footer text-right">
              <button type="submit"  class="btn btn-success"> Tambah Fitur</button>
            </div>
            </form>
        </div>
    </div> 
 </div>

      <!-- modal desain  -->
  <div class="modal fade" id="modalParkir"  role="dialog" >
    <div class="modal-dialog " >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPendidikan">Tambah Fitur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalProgress">
              <form action="" method="post">
            @csrf
              <div class="form-group">
                <label for="">Alamat Parkir</label>
                <input type="text" name="nama_fitur" id="nama_fitur" class="form-control" required></input> 
              </div>
              <div class="form-group">
                <label for="">Petugas</label>
                <select name="petugas_id" id="petugas_id" class="form-control">
                    <option value="">-- pilih dari anggota posko</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Luas Parkir</label>
                <input type="text" name="nama_fitur" id="nama_fitur" class="form-control" required></input> 
              </div>
              <div class="form-group">
                <label for="">Jenis Parkiran</label>
                <select name="petugas_id" id="petugas_id" class="form-control">
                    <option value="">-- pilih jenis parkir --</option>
                    <option value="1">Roda 2</option>
                    <option value="2">Roda 4</option>
                </select>
              </div>
            </div>
            <div class="card-footer text-right">
              <button type="submit"  class="btn btn-success"> Tambah Fitur</button>
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
    </script>
@endsection
