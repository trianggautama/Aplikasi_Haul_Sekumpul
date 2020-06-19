@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Edit Kehilangan Orang</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Edit Kehilangan Orang </span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Kehilangan Orang
                </div>
                <div class="card-body">
                    <form action="" method="post">
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
                            <label class="">Nama Orang</label>
                            <input type="text" class="form-control" name="nama_orang" value="{{$data->nama_orang}}"
                                id="nama_orang" placeholder="nama_orang">
                        </div>
                        <div class="form-group ">
                            <label class="">Umur</label>
                            <input type="text" class="form-control" name="umur" value="{{$data->umur}}" id="umur"
                                placeholder="Umur">
                        </div>
                        <div class="form-group ">
                            <label class="">Alamat</label>
                            <textarea name="alamat" id="" class="form-control">{{$data->alamat}}</textarea>
                        </div>

                        <div class="form-group ">
                            <label class="">Ciri Fisik</label>
                            <textarea name="ciri_fisik" id="" class="form-control">{{$data->ciri_fisik}}</textarea>
                        </div>
                        <div class="form-group ">
                            <label class="">Catatan</label>
                            <textarea name="deskripsi" id="" class="form-control">{{$data->deskripsi}}</textarea>
                        </div>
                        <div class="form-group ">
                            <label class="">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="1">Belum ditemukan</option>
                                <option value="2">Sudah ditemukan</option>
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