<!doctype html>
<html class="fixed sidebar-left-sm">

<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title> Sistem Informasi Haul Sekumpul dan Mushola Arraudhah Martapura</title>

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
		rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap/css/bootstrap.css')}}" />
	<link rel="stylesheet" href="{{asset('admin/vendor/animate/animate.css')}}">

	<link rel="stylesheet" href="{{asset('admin/vendor/font-awesome/css/all.min.css')}}" />
	<link rel="stylesheet" href="{{asset('admin/vendor/magnific-popup/magnific-popup.css')}}" />
	<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="{{asset('admin/vendor/jquery-ui/jquery-ui.css')}}" />
	<link rel="stylesheet" href="{{asset('admin/vendor/jquery-ui/jquery-ui.theme.css')}}" />
	<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css')}}" />
	<link rel="stylesheet" href="{{asset('admin/vendor/morris/morris.css')}}" />

	<!-- Datatable -->
	<link rel="stylesheet" href="{{asset('admin/vendor/datatables/media/css/dataTables.bootstrap4.css')}}" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{asset('admin/css/theme.css')}}" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="{{asset('admin/css/skins/default.css')}}" />

	<!-- Head Libs -->
	<script src="{{asset('admin/vendor/modernizr/modernizr.js')}}"></script>

	<!-- Summernote -->
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
</head>

<body>
	<section class="body">

		<!-- start: header -->
		<header class="header">
			<div class="logo-container">
				<a href="/" class="logo">
					<img src="{{asset('admin/img/logo.png')}}" width="55" height="35" alt="Porto Admin" />
					Sistem Informasi Haul Sekumpul dan Mushola Arraudhah Martapura
				</a>
				<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
					data-fire-event="sidebar-left-opened">
					<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				</div>
			</div>

			<!-- start: search & user box -->
			<div class="header-right">



				<span class="separator"></span> 

				<div id="userbox" class="userbox">
					<a href="#" data-toggle="dropdown">
						<figure class="profile-picture">
							<img src="{{asset('admin/img/!logged-user.jpg')}}" alt="Joseph Doe" class="rounded-circle"
								data-lock-picture="{{asset('admin/img/!logged-user.jpg')}}" />
						</figure>
						<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
							<span class="name">{{Auth::user()->nama}}</span>
							<span class="role">Admin pusat</span>
						</div>

						<i class="fa custom-caret"></i>
					</a>

					<div class="dropdown-menu">
						<ul class="list-unstyled mb-2">
							<li class="divider"></li>
							<li>
								<a role="menuitem" tabindex="-1" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i
										class="fas fa-power-off"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end: search & user box -->
		</header>
		<!-- end: header -->

		<div class="inner-wrapper">
			<!-- start: sidebar -->
			<aside id="sidebar-left" class="sidebar-left">

				<div class="sidebar-header">
					<div class="sidebar-title">
						Menu
					</div>
					<div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed"
						data-target="html" data-fire-event="sidebar-left-toggle">
						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<div class="nano">
					<div class="nano-content">
						<nav id="menu" class="nav-main" role="navigation">

							<ul class="nav nav-main">
								@if(Auth::user()->role == 2)
								<li>
									<a class="nav-link" href="{{Route('adminIndex')}}">
										<i class="fas fa-home" aria-hidden="true"></i>
										<span>Dashboard</span>
									</a>
								</li>
								<li class="nav-parent ">
									<a class="nav-link" href="#">
										<i class="fas fa-columns" aria-hidden="true"></i>
										<span>Master Data</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a class="nav-link" href="{{route('userIndex')}}">
												Admin
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{route('haulIndex')}}">
												Acara Haul
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-parent ">
									<a class="nav-link" href="#">
										<i class="fas fa-columns" aria-hidden="true"></i>
										<span>Keuangan</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a class="nav-link" href="{{Route('donasiIndex')}}">
												Donasi Haul
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('pengeluaranDonasiIndex')}}">
												Pengeluaran Donasi haul
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('pemasukanIndex')}}">
												Pemasukan Arraudah
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('pengeluaranIndex')}}">
												Pengeluaran Arraudah
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-parent ">
									<a class="nav-link" href="#">
										<i class="fas fa-columns" aria-hidden="true"></i>
										<span>Posko</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a class="nav-link" href="{{Route('poskoIndex')}}">
												Data Posko
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('ketuaIndex')}}">
												Ketua Posko
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('anggotaIndex')}}">
												Anggota Posko
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('parkiranIndex')}}">
												Parkiran
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-parent ">
									<a class="nav-link" href="#">
										<i class="fas fa-columns" aria-hidden="true"></i>
										<span>Informasi</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a class="nav-link" href="{{Route('rombonganIndex')}}">
												Informasi Rombongan
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('kehilanganBarangIndex')}}">
												Kehilangan Barang
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('penemuanBarangIndex')}}">
												Penemuan Barang
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('kehilanganOrangIndex')}}">
												Kehilangan Orang
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('penemuanOrangIndex')}}">
												Penemuan Orang
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('kehilanganKendaraanIndex')}}">
												Kehilangan Kendaraan
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('penemuanKendaraanIndex')}}">
												Penemuan Kendaraan
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a class="nav-link" href="{{Route('arraudahIndex')}}">
										<i class="fa fa-file" aria-hidden="true"></i>
										<span>Kegiatan Arraudhah</span>
									</a>
								</li>
								@endif
								@if(Auth::user()->role == 1)
								<li>
									<a class="nav-link" href="{{Route('halamanPoskoIndex')}}">
										<i class="fas fa-home" aria-hidden="true"></i>
										<span>Beranda</span>
									</a>
                                </li>
                                <li>
									<a class="nav-link" href="{{Route('profilPosko')}}">
										<i class="fas fa-user" aria-hidden="true"></i>
										<span>Profil</span>
									</a>
								</li>
								<li class="nav-parent ">
									<a class="nav-link" href="#">
										<i class="fas fa-columns" aria-hidden="true"></i>
										<span>Posko</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a class="nav-link" href="{{Route('poskoIndex')}}">
												Data Posko
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('ketuaIndex')}}">
												Ketua Posko
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('anggotaIndex')}}">
												Anggota Posko
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('parkiranIndex')}}">
												Parkiran
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-parent ">
									<a class="nav-link" href="#">
										<i class="fas fa-columns" aria-hidden="true"></i>
										<span>Informasi</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a class="nav-link" href="{{Route('rombonganIndex')}}">
												Informasi Rombongan
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('kehilanganBarangIndex')}}">
												Kehilangan Barang
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('penemuanBarangIndex')}}">
												Penemuan Barang
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('kehilanganOrangIndex')}}">
												Kehilangan Orang
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('penemuanOrangIndex')}}">
												Penemuan Orang
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('kehilanganKendaraanIndex')}}">
												Kehilangan Kendaraan
											</a>
										</li>
										<li>
											<a class="nav-link" href="{{Route('penemuanKendaraanIndex')}}">
												Penemuan Kendaraan
											</a>
										</li>
									</ul>
								</li>
								@endif
							</ul>
						</nav>
					</div>

					<script>
						// Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
				                    
				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
					</script>
				</div>

			</aside>
			<!-- end: sidebar -->
			@yield('content')

		</div>

	</section>
	@include('sweetalert::alert')
	<!-- Vendor -->
	<script src="{{asset('admin/vendor/jquery/jquery.js')}}"></script>
	<script src="{{asset('admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
	<script src="{{asset('admin/vendor/popper/umd/popper.min.js')}}"></script>
	<script src="{{asset('admin/vendor/bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{asset('admin/vendor/common/common.js')}}"></script>
	<script src="{{asset('admin/vendor/nanoscroller/nanoscroller.js')}}"></script>
	<script src="{{asset('admin/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
	<script src="{{asset('admin/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

	<!-- Specific Page Vendor -->
	<script src="{{asset('admin/vendor/jquery-ui/jquery-ui.js')}}"></script>
	<script src="{{asset('admin/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js')}}"></script>
	<script src="{{asset('admin/vendor/jquery-appear/jquery.appear.js')}}"></script>
	<script src="{{asset('admin/vendor/bootstrap-multiselect/js/bootstrap-multiselect.js')}}"></script>
	<script src="{{asset('admin/vendor/flot/jquery.flot.js')}}"></script>
	<script src="{{asset('admin/vendor/flot.tooltip/jquery.flot.tooltip.js')}}"></script>
	<script src="{{asset('admin/vendor/flot/jquery.flot.categories.js')}}"></script>
	<script src="{{asset('admin/vendor/jquery-sparkline/jquery.sparkline.js')}}"></script>
	<script src="{{asset('admin/vendor/snap.svg/snap.svg.js')}}"></script>
	<script src="{{asset('admin/vendor/liquid-meter/liquid.meter.js')}}"></script>

	<!-- Datatable Scripts -->
	<script src="{{asset('admin/js/examples/examples.datatables.default.js')}}"></script>
	<script src="{{asset('admin/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('admin/vendor/datatables/media/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('admin/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js')}}">
	</script>
	<script src="{{asset('admin/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js')}}">
	</script>
	<script src="{{asset('admin/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js')}}"></script>
	<script src="{{asset('admin/vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js')}}"></script>
	<script src="{{asset('admin/vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js')}}"></script>
	<script src="{{asset('admin/vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js')}}"></script>
	<script src="{{asset('admin/vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js')}}"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="{{asset('admin/js/theme.js')}}"></script>

	<!-- Theme Custom -->
	<script src="{{asset('admin/js/custom.js')}}"></script>

	<!-- Theme Initialization Files -->
	<script src="{{asset('admin/js/theme.init.js')}}"></script>

	<!-- Examples -->
	<script src="{{asset('admin/js/examples/examples.dashboard.js')}}"></script>

	<!-- Summernote -->
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>

	<!-- Sweetalert -->
	<script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>
	@yield('scripts')
</body>

</html>