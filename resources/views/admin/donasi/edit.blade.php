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
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
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
                            <select name="haul_sekumpul_id" id="haul_id" class="form-control">
                                <option value="">-- Pilih Periode Haul --</option>
                                @foreach($haul as $h)
                                <option value="{{$h->id}}" {{$h->id == $data->haul_sekumpul_id ? 'selected' : ''}}>
                                    Periode {{\carbon\carbon::parse($h->tanggal_mulai)->translatedFormat('Y')}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group ">
                            <label class="">Nama Donatur</label>
                            <input type="text" class="form-control" name="nama_donatur" id="nama_donatur"
                                value="{{$data->nama_donatur}}" placeholder="Nama Donatur">
                        </div>
                        <div class="form-group ">
                            <label class="">Nomor HP </label>
                            <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{$data->no_hp}}"
                                placeholder="Nomor Telepon">
                        </div>
                        <div class="form-group ">
                            <label class="">Besaran (Rp.)</label>
                            <input type="text" class="form-control" name="besaran" id="besaran"
                                value="{{$data->besaran}}" placeholder="Rp.">
                        </div>
                        <div class="form-group">
                            <label for="">Metode</label>
                            <select name="metode" id="metode" class="form-control">
                                <option value="">-- Pilih Jenis --</option>
                                <option value="1" {{$data->metode == 1 ? 'selected' : ''}}>Cash</option>
                                <option value="2" {{$data->metode == 2 ? 'selected' : ''}}>Transfer</option>
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