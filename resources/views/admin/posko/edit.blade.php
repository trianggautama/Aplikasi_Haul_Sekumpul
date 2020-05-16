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
				<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
			</div>
		</header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data Posko
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Haul</label>
                                <select name="haul_sekumpul_id" id="haul_sekumpul_id" class="form-control">
                                    <option value="">-- Pilih Periode Haul --</option>
                                    @foreach($haul as $h)
                                        <option value="{{$h->id}}" {{  $data->haul_sekumpul_id == $h->id ? 'selected' : ''}}>Periode {{\carbon\carbon::parse($h->tanggal_mulai)->translatedFormat('Y')}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group ">
                                <label class="">Nama Posko</label>
                                <input type="text"class="form-control" name="nama_posko" id="nama_posko"  placeholder="nama_posko" value="{{$data->nama_posko}}">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control">{{$data->alamat}}</textarea>
                            </div>
                    <div class="form-group ">
                        <label class="">Nomor HP Posko</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor Telepon" value="{{$data->no_hp}}">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Posko</label>
                        <select name="jenis_posko" id="jenis_posko" class="form-control">
                            <option value="">-- Pilih Jenis --</option>
                            <option value="1" {{  $data->jenis_posko == 1 ? 'selected' : ''}}>Posko Induk</option>
                            <option value="2" {{  $data->jenis_posko == 2 ? 'selected' : ''}}>Posko Non Induk</option>
                            <option value="3" {{  $data->jenis_posko == 3 ? 'selected' : ''}}>Posko Kesehatan</option>
                        </select>
                    </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
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


    </script>
@endsection
