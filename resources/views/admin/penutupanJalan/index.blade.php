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
                <div class="text-right">
                        <button class="btn btn-sm btn-success" id="tambah"><i class="fa fa-plus"></i>Tambah  Data</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-0" id="datatable-default">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th> Periode Haul</th>
                                    <th>Nama Jalan</th>
                                    <th>Status</th>
                                    <th>Jalan Alternatif</th>
                                    <th>Durasi Pengalihan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Perode Haul 2020</td>
                                        <td>Jl.A.yani arah Banjarmasin</td>
                                        <td>Ditutup</td>
                                        <td>Lingkar utara dan Lingkar Selatan</td>
                                        <td>2 Juli 2020- 3 Juli 2020</td>
                                        <td>
                                        <a href="{{Route('penutupanJalanEdit','xaa')}}"
                                            class="btn btn-sm btn-primary m-1 text-white">
                                            <i class="fa fa-edit"></i></a>
                                        <button class="btn btn-sm btn-danger" onclick="Hapus('')"> <i
                                                class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{Route('penutupanJalanStore')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Haul</label>
                        <select name="haul_sekumpul_id" id="haul_id" class="form-control" required>
                            @foreach($haul as $h)
                            <option value="aul{{$h->id}}">Periode
                                {{\carbon\carbon::parse($h->tanggal_mulai)->translatedFormat('Y')}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group ">
                        <label class="">Nama Jalan</label>
                        <input type="text" class="form-control" name="nama_jalan" id="nama_jalan" required>
                    </div>
                    <!-- kategori default Pengeluaran -->
                    <div class="form-group ">
                        <label class="">Status</label>
                        <select name="status_jalan" id="status_jalan" class="form-control">
                            <option value="Ditutup">Ditutup</option>
                            <option value="Dibuka">Dibuka</option>
                            <option value="Dialihkan">Dialihkan</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label class="">Jalan Alternatif</label>
                        <input type="text" class="form-control" name="jalan_alternatif" id="jalan_alternatif" required>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group ">
                                <label class="">Dari</label>
                                <input type="date" class="form-control" name="tanggal_mulai" id="tanggal_mulai" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group ">
                                <label class="">Smpai</label>
                                <input type="date" class="form-control" name="tanggal_selesai" id="tanggal_selesai" required>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
@section('scripts')
<script>

$("#tambah").click(function(){
            $('#status').text('Tambah Data');
            $('#modal').modal('show');
        });

</script>
@endsection