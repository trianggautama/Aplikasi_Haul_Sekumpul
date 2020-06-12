@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Edit parkiran Posko</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Edit parkiran Posko</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Edit Data parkiran Posko
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Alamat Parkir</label>
                            <input type="text" name="alamat" id="alamat" value="{{$data->alamat}}" class="form-control"
                                required></input>
                        </div>
                        <div class="form-group">
                            <label for="">Petugas</label>
                            <select name="anggota_posko_id" id="anggota_posko_id" class="form-control">
                                <option value="">-- pilih anggota posko</option>
                                @foreach ($anggota as $d)
                                <option value="{{$d->id}}" {{$d->id == $data->anggota_posko_id ? 'selected' : ''}}>
                                    {{$d->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Luas Parkir</label>
                            <input type="text" name="luas_parkir" value="{{$data->luas_parkir}}" id="luas_parkir"
                                class="form-control" required></input>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Parkiran</label>
                            <select name="jenis_parkir" id="jenis_parkir" class="form-control">
                                <option value="">-- pilih jenis parkir --</option>
                                <option value="Roda 2" {{$data->jenis_parkir == 'Roda 2' ? 'selected' : ''}}>Roda 2
                                </option>
                                <option value="Roda 4" {{$data->jenis_parkir == 'Roda 4' ? 'selected' : ''}}>Roda 4
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Status Parkiran</label>
                            <input type="text" name="status" value="{{$data->status}}" id="status" class="form-control"
                                required></input>
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
    $("#tambah").click(function(){
            $('#status').text('Tambah Data');
            $('#modal').modal('show');
        });


</script>
@endsection