@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Edit Kehilangan Barang</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Edit Kehilangan Barang </span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Kehilangan Barang
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group ">
                            <label class="">Posko Terdekat</label>
                            <select name="posko_id" id="" class="form-control">
                                <option value="">Pilih posko</option>
                                @foreach ($posko as $d)
                                <option value="{{$d->id}}" {{$d->id == $data->posko_id ? 'selected' : ''}}>
                                    {{$d->nama_posko}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group ">
                        <label class="">Nama Pelapor</label>
                        <input type="text" class="form-control" name="nama_pelapor" id="nama_pelapor" placeholder="nama_pelapor">
                    </div>                    
                    <div class="form-group ">
                        <label class="">Nomor Hp Pelapor</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="no_hp">
                    </div>  
                        <div class="form-group ">
                            <label class="">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{$data->nama_barang}}"
                                id="nama_barang" placeholder="nama_barang">
                        </div>
                        <div class="form-group ">
                            <label class="">Merk Barang</label>
                            <input type="text" class="form-control" name="merk" value="{{$data->merk}}" id="merk"
                                placeholder="Merk barang">
                        </div>
                        <div class="form-group ">
                            <label class="">Nomor Hp</label>
                            <input type="text" class="form-control" name="no_hp" value="{{$data->no_hp}}" id="no_hp"
                                placeholder="Nomor hp">
                        </div>
                        <div class="form-group ">
                            <label class="">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" value="{{$data->deskripsi}}"
                                id="deskripsi" placeholder="Deskripsi">
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