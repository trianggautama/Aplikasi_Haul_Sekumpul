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
								<li><span>Beranda</span></li>
								<li><span>Admin Posko</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" ><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>
					<div class="card">
                        <div class="alert alert-success">
                            <h3>Selamat Datang Admin {{Auth::user()->ketua_posko->posko->nama_posko}}</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque earum, tenetur rem illo placeat repellat vitae, quo, neque dolore voluptatem dolor ad dolorem tempore? Accusantium consequuntur dignissimos dicta tempora neque.</p>
                        </div>
                    </div>
				</section>
@endsection
@section('scripts')
    <script>
        
    </script>
@endsection
