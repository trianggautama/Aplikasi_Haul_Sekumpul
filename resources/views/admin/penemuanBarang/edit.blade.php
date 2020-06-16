@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Penemuan barang</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Penemuan Barang</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Penemuan Barang
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
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
                            <label class="">Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{$data->nama_barang}}"
                                id="nama_barang" placeholder="nama_barang">
                        </div>
                        <div class="form-group ">
                            <label class="">Merk Barang</label>
                            <input type="text" class="form-control" name="merk" value="{{$data->merk}}" id="merk"
                                placeholder="merk_barang">
                        </div>
                        <div class="form-group ">
                            <label class="">Deskripsi Barang</label>
                            <input type="text" class="form-control" name="deskripsi" value="{{$data->deskripsi}}"
                                id="deskripsi" placeholder="deskripsi_barang">
                        </div>
                        <div class="form-group ">
                        <label class="">Foto Barang</label>
                        <input type="file" class="form-control" name="foto" id="foto">
                        </div>
                        <hr>
                        <div class="form-group ">
                            <label class="">Status barang</label>
                            <select name="status" id="" class="form-control">
                                <option value="1" {{$data->status == 1 ? 'selected' : ''}}>Belum diambil</option>
                                <option value="2" {{$data->status == 2 ? 'selected' : ''}}>Sudah diambil</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Foto Penyerahan</label>
                            <input type="file" class="form-control" name="foto_penyerahan" id="foto_penyerahan">
                        </div>
                        <div class="form-group">
                            <label for="">KTP Penerima</label>
                            <input type="file" class="form-control" name="ktp_penerima" id="ktp_penerima">
                        </div>
                        <div class="card-footer text-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
@section('scripts')
<script>
    $(document).ready(function() {
            $('#summernote').summernote();
        });

</script>
@endsection