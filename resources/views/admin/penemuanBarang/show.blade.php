@extends('layouts.main')

@section('content')
    <section role="main" class="content-body">
		<header class="page-header">
			<h2>Halaman Penemuan Barang</h2>
				<div class="right-wrapper text-right">
					<ol class="breadcrumbs">
						<li>
						    <a href="index.html">
								<i class="fas fa-home"></i>
							</a>
						</li>
                        <li><span>Data Penemuan Barang</span></li>
                        <li><span>Detail</span></li>
					</ol>
				<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
			</div>
		</header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""> <b>Nama Barang : </b></label>
                                    <p>HP</p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b>Merk Barang : </b></label>
                                    <p>Samsung</p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b>Deskripsi Barang : </b></label>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos praesentium recusandae in, voluptatem architecto culpa tenetur nihil, nobis saepe ad consequuntur reprehenderit. Eveniet ipsa non eius deserunt officia natus illum.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                    <label for=""> <b>Status : </b></label>
                                    <p>Belum Diambil</p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b>Penanggung Jawab :</b>  </label>
                                    <p>Admin</p>
                                </div>
                                <div class="form-group">
                                    <label for=""> <b>Foto penyerahan :</b>  </label> <br>
                                    <a href="" class="btn btn-secondary"><i class="fas fa-paperclip"></i> Foto Penyerahan</a>
                                </div>
                                <div class="form-group">
                                    <label for=""><b>KTP Penerima :</b> </label> <br>
                                    <a href="" class="btn btn-secondary"><i class="fas fa-paperclip"></i> Foto KTP</a>
                                </div>
                            </div>
                        </div>
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
        $("#tambah").click(function(){
            $('#status').text('Tambah Data');
            $('#modal').modal('show');
        });

        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection
