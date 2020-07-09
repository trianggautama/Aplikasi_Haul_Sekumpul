@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Informasi Penutupan Jalan</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Informasi Penutupan Jalan</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Informasi Penutupan Jalan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Haul</label>
                            <select name="haul_sekumpul_id" id="haul_id" class="form-control" required>
                                @foreach($haul as $h)
                                <option value="{{$h->id}}" {{$data->haul_sekumpul_id == $h->id ? 'selected' : ''}}>
                                    Periode
                                    {{\carbon\carbon::parse($h->tanggal_mulai)->translatedFormat('Y')}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group ">
                            <label class="">Nama Jalan</label>
                            <input type="text" class="form-control" value="{{$data->nama_jalan}}" name="nama_jalan"
                                id="nama_jalan" required>
                        </div>
                        <!-- kategori default Pengeluaran -->
                        <div class="form-group ">
                            <label class="">Status</label>
                            <select name="status" id="status_jalan" class="form-control">
                                <option value="1" {{$data->status == '1' ? 'selected' : ''}}>Ditutup</option>
                                <option value="2" {{$data->status == '1' ? 'selected' : ''}}>Dibuka</option>
                                <option value="3" {{$data->status == '1' ? 'selected' : ''}}>Dialihkan</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label class="">Jalan Alternatif</label>
                            <input type="text" class="form-control" value="{{$data->jalan_alternatif}}"
                                name="jalan_alternatif" id="jalan_alternatif" required>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group ">
                                    <label class="">Dari</label>
                                    <input type="date" class="form-control" value="{{$data->tgl_mulai}}"
                                        name="tgl_mulai" id="tgl_mulai" required>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group ">
                                    <label class="">Smpai</label>
                                    <input type="date" class="form-control" value="{{$data->tgl_selesai}}"
                                        name="tgl_selesai" id="tgl_selesai" required>
                                </div>
                            </div>
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
    $(document).ready(function() {
            $('#summernote').summernote();
        });

</script>
@endsection