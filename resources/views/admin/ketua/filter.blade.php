@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Ketua Posko</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Ketua Posko</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Filter Data Ketua Posko
                </div>
                <div class="card-body">
                    <form action="" method="post" target="_blank">
                        @csrf
                        <div class="form-group">
                            <label for="">Haul</label>
                            <select name="haul_sekumpul_id" id="haul_id" class="form-control">
                                <option value="">-- Pilih Periode Haul --</option>
                                @foreach($haul as $h)
                                <option value="{{$h->id}}" >
                                    Periode {{\carbon\carbon::parse($h->tanggal_mulai)->translatedFormat('Y')}}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('donasiIndex')}}" type="button" class="btn btn-default" data-dismiss="modal">Batal</a>
                    <button type="submit" class="btn btn-primary">Cetak</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection
@section('scripts')
<script>


</script>
@endsection