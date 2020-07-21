@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Edit Kehilangan Kendaraan</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Edit Kehilangan Kendaraan </span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Kehilangan Kendaraan
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @if(Auth::user()->role == 2)
                        <div class="form-group ">
                            <label class="">Posko Terdekat</label>
                            <select name="posko_id" id="" class="form-control">
                                <option value="">Pilih posko</option>
                                @foreach ($posko as $d)
                                <option value="{{$d->id}}" {{$data->posko_id == $d->id ? 'selected' : ''}}>
                                    {{$d->nama_posko}}</option>
                                @endforeach
                            </select>
                        </div>
                        @else
                        <input type="hidden" name="posko_id" value="{{Auth::user()->ketua_posko->posko->id}}">
                        @endif
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
                                id="nama_pelapor" placeholder="Nama Pelapor">
                        </div>

                        <div class="form-group ">
                            <label class="">No Hp Pelapor</label>
                            <input type="text" class="form-control" name="no_hp_pelapor"
                                value="{{$data->no_hp_pelapor}}" id="no_hp_pelapor" placeholder="Nomor HP Pelapor">
                        </div>
                        <div class="form-group ">
                            <label class="">Status Barang</label>
                            <select name="status" id="" class="form-control">
                                <option value="1" {{$data->status == 1 ? 'selected' : ''}}>Belum ditemukan</option>
                                <option value="2" {{$data->status == 2 ? 'selected' : ''}}>Sudah ditemukan</option>
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