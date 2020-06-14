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

					<!-- start: page -->
					<div class="row">
					<div class="col-lg-5 col-xl-5">
								<section class="card">
									<header class="card-header bg-white">
										<div class="card-header-icon bg-success mt-3">
											<i class="fas fa-comment-dots"></i>
										</div>
									</header>
									<div class="card-body">
										<h3 class="mt-0 font-weight-semibold mt-0 text-center">Selamat Datang {{Auth::user()->nama}}</h3>
										<p class="text-center">Nullam quiris risus eget urna mollis ornare vel eu leo. Soccis natoque penatibus et magnis dis parturient montes. Soccis natoque penatibus et magnis dis parturient montes.</p>
									</div>
								</section>
							</div>
						<div class="col-lg-7">
							<div class="row mb-3">
								<div class="col-xl-6">
								<section class="card mb-4">
											<div class="card-body bg-success">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon">
															<i class="fas fa-calendar-alt"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Data Haul</h4>
															<div class="info">
																<strong class="amount">{{$haul->count()}} Data</strong>
															</div>
														</div>
														<div class="summary-footer">
															<a href="{{Route('haulIndex')}}" class="text-uppercase">(view all)</a>
														</div>
													</div>
												</div>
											</div>
										</section>
								</div>
								<div class="col-xl-6">
								<section class="card mb-4">
											<div class="card-body bg-success">
												<div class="widget-summary">
													<div class="widget-summary-col widget-summary-col-icon">
														<div class="summary-icon">
															<i class="fas fa-home"></i>
														</div>
													</div>
													<div class="widget-summary-col">
														<div class="summary">
															<h4 class="title">Posko Haul</h4>
															<div class="info">
																<strong class="amount">{{$posko->count()}} Posko</strong>
															</div>
														</div>
														<div class="summary-footer">
															<a href="{{Route('poskoIndex')}}" class="text-uppercase">(view all)</a>
														</div>
													</div>
												</div>
											</div>
										</section>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-6">
								<section class="card card-horizontal mb-4">
									<header class="card-header bg-success">
										<div class="card-header-icon">
											<i class="fas fa-users"></i>
										</div>
									</header>
									<div class="card-body p-4">
										<h5 class="font-weight-semibold mt-3"> Ketua Posko</h5>
										<p>{{$ketua->count()}} Data</p>
									</div>
								</section>
								</div>
								<div class="col-xl-6">
								<section class="card card-horizontal mb-4">
									<header class="card-header bg-success">
										<div class="card-header-icon">
											<i class="fas fa-users"></i>
										</div>
									</header>
									<div class="card-body p-4">
										<h5 class="font-weight-semibold mt-3">Anggota Posko</h5>
										<p>{{$anggota->count()}} Data</p>
									</div>
								</section>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-0 pt-0">
						<div class="col-md-6">
						<section class="card card-horizontal mb-4">
									<header class="card-header bg-white">
										<div class="card-header-icon bg-success ml-3">
											<i class="fas fa-hand-holding-heart"></i>
										</div>
									</header>
									<div class="card-body p-4">
										<h3 class="font-weight-semibold mt-3">Data Donasi</h3>
										<p>{{$donasi->count()}} Data Donasi</p>
									</div>
								</section>
						</div>
						<div class="col-md-6">
							<section class="card card-horizontal mb-4">
									<header class="card-header bg-white">
										<div class="card-header-icon bg-success ml-3">
											<i class="fas fa-shopping-cart"></i>
										</div>
									</header>
									<div class="card-body p-4">
										<h3 class="font-weight-semibold mt-3">Data Pengeluaran</h3>
										<p>{{$pengeluaran->count()}} Data Pengeluaran</p>
									</div>
								</section>
						</div>
					</div>
					<!-- end: page -->
				</section>
@endsection
@section('scripts')
    <script>
        
    </script>
@endsection
