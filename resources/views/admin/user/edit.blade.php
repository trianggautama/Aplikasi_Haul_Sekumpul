@extends('layouts.main')

@section('content')
    <section role="main" class="content-body">
		<header class="page-header">
			<h2>Beranda Admin</h2>
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
						    <a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
						<li><span>Layouts</span></li>
						<li><span>Sidebar Size SM</span></li>
					</ol>
				<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
			</div>
		</header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="text-right">
                            <button class="btn btn-sm btn-secondary"><i class="fa fa-print"></i> Cetak Data</button>
                            <button class="btn btn-sm btn-success" id="tambah"><i class="fa fa-plus"></i> Tambah Data</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text"class="form-control" name="nama" id="nama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text"class="form-control" name="username" id="username"  placeholder="username">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password"class="form-control" name="password" id="password">
                            </div>
                            <div class="form-group">
                                <label for="">foto</label>
                                <input type="file"class="form-control" name="foto" id="foto">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>								

@endsection
@section('scripts')
    <script>
    </script>
@endsection
