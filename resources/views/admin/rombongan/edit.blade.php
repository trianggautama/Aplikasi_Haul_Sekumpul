@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Pengeluaran Mesjid</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Pengeluaran</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Pengeluaran
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
                                <option value="{{$h->id}}"" {{$h->id == $data->haul_sekumpul_id ? 'selected' : ''}}>
                                    Periode
                                    {{\carbon\carbon::parse($h->tanggal_mulai)->translatedFormat('Y')}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class=" form-group ">
                            <label class="">Asal Rombongan</label>
                            <input type=" text" class="form-control" name="asal_rombongan" id="asal_rombongan"
                                    value="{{$data->asal_rombongan}}" placeholder="Asal rombongan">
                        </div>
                        <div class="form-group ">
                            <label class="">Ketua Rombongan</label>
                            <input type="text" class="form-control" name="nama_ketua_rombongan"
                                id="nama_ketua_rombongan" value="{{$data->nama_ketua_rombongan}}"
                                placeholder="Ketua Rombongan">
                        </div>
                        <div class="form-group ">
                            <label class="">No Hp</label>
                            <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{$data->no_hp}}"
                                placeholder="Nomor Hp">
                        </div>
                        <div class="form-group ">
                            <label class="">Jumlah rombongan</label>
                            <input type="number" class="form-control" name="jumlah_rombongan" id="jumlah_rombongan"
                                value="{{$data->jumlah_rombongan}}">
                        </div>
                        <!-- Nama pendata ngambil dari auth login -->
                        <!-- Nama penanggungjawab dari Auth -->
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
    $(document).ready(function() {
            $('#summernote').summernote();
        });

</script>
@endsection