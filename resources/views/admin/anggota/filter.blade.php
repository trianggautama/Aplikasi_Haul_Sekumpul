@extends('layouts.main')

@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Halaman Donasi</h2>
        <div class="right-wrapper text-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li><span>Data Donasi</span></li>
            </ol>
            <a class="sidebar-right-toggle"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Filter Data Parkiran
                </div>
                <div class="card-body">
                    <form action="" method="post" target="_blank">
                        @csrf
                        <div class="form-group">
                            <label for="">Posko</label>
                            <select name="posko_id" id="posko_id" class="form-control">
                                <option value="">-- Pilih Posko --</option>
                                @foreach($data as $d)
                                <option value="{{$d->id}}" >
                                   {{$d->nama_posko}} - Periode Haul {{\carbon\carbon::parse($d->haul_sekumpul->tanggal_mulai)->translatedFormat('Y')}}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('parkiranIndex')}}" type="button" class="btn btn-default" data-dismiss="modal">Batal</a>
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