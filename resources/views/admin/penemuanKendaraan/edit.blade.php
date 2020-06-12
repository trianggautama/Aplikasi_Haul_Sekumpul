@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Edit Penemuan Kendaraan</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Edit Penemuan Kendaraan </span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Penemuan Kendaraan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group ">
                            <label class="">Lokasi Parkir</label>
                            <select name="lokasi_parkir_id" id="" class="form-control">
                                <option value="">Pilih lokasi
                                    parkir
                                </option>
                                @foreach ($lokasi_parkir as $d)
                                <option value="{{$d->id}}" {{$d->id == $data->lokasi_parkir_id ? 'selected' : ''}}>
                                    {{$d->alamat}}, Posko {{$d->posko->nama_posko}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group ">
                            <label class="">Nomor Polisi</label>
                            <input type="text" class="form-control" name="plat_nomor" value="{{$data->plat_nomor}}"
                                id="plat_nomor" placeholder="DA XXX">
                        </div>
                        <div class="form-group ">
                            <label class="">Merk Kendaraan</label>
                            <input type="text" class="form-control" name="merk_kendaraan"
                                value="{{$data->merk_kendaraan}}" id="merk_kendaraan" placeholder="merk_kendaraan">
                        </div>
                        <div class="form-group ">
                            <label class="">Warna</label>
                            <input type="text" class="form-control" name="warna" value="{{$data->warna}}" id="warna"
                                placeholder="Warna">
                        </div>

                        <div class="form-group ">
                            <label class="">Nama Pelapor</label>
                            <input type="text" class="form-control" name="nama_pelapor" value="{{$data->nama_pelapor}}"
                                id="nama_pelapor" placeholder="nama_pelapor">
                        </div>

                        <div class="form-group ">
                            <label class="">No Hp Pelapor</label>
                            <input type="text" class="form-control" name="no_hp_pelapor"
                                value="{{$data->no_hp_pelapor}}" id="no_hp_pelapor" placeholder="Nomor HP Pelapor">
                        </div>
                        <div class="form-group ">
                            <label class="">Status barang</label>
                            <select name="status" id="" class="form-control">
                                <option value="1" {{$data->status == 1 ? 'selected' : ''}}>Belum diambil</option>
                                <option value="2" {{$data->status == 2 ? 'selected' : ''}}>Sudah diambil</option>
                            </select>
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