@extends('layouts.main')

@section('content')
    <section role="main" class="content-body">
		<header class="page-header">
			<h2>Halaman Haul</h2>
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
						    <a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
						<li><span>Edit Data haul</span></li>
					</ol>
				<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
			</div>
		</header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Edit Data Haul
                    </div>
                    <div class="card-body">
                        <form action="" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')                            
                            <div class="form-group">
                                <label for="">Informasi</label>
                                <textarea id="summernote" name="editordata"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Mulai</label>
                                <input type="date"class="form-control" name="username" id="username"  placeholder="username">
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Selesai</label>
                                <input type="date"class="form-control" name="password" id="password">
                            </div>
                            <div class="form-group ">
                                <label class="">Katua Panitia</label>
                                <input type="text"class="form-control" name="username" id="username"  placeholder="username">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-right">
                        <button type="button" class="btn btn-default" >Batal</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
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
