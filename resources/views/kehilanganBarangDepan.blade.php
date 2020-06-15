<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <title>Sistem Informasi Haul Sekumpul dan Mushola Arraudhah Martapura</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="{{asset('depan/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('depan//css/style.css')}}">
    <link rel="stylesheet" href="{{asset('depan//css/animate.css')}}" />
    	<!-- Datatable -->
	<link rel="stylesheet" href="{{asset('admin/vendor/datatables/media/css/dataTables.bootstrap4.css')}}" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <script src="{{asset('depan/js/modernizr-3.5.0.min.js')}}"></script>
</head>
<body>

<div class="row top-bar">
    <div class="col-sm-1"></div>
    <div class="col-sm-5 d-sm-block d-none" style="font-size: 13px">
        <a href="http://www.arraudhah-sekumpul.com" target="_blank" class="text-white"> <i class="fa fa-internet"></i> www.arraudhah-sekumpul.com</a>
    </div>
    <div class="col-sm-2 col-6 text-center">
    </div>
    <div class="col-sm-3 col-6 login">
        <a href="{{Route('adminIndex')}}" class="text-white">Login</a> &nbsp; &nbsp;
    </div>
</div>

<nav class="navbar navbar-expand-lg nav-bar navbar-light bg-light">
    <div class="container">
		<a class="navbar-brand" href="#"><img src="{{asset('admin/img/logo.png')}}" width="55" height="50" alt="Porto Admin" /></a>
		<p class="pt-3">Sistem Informasi Haul Sekumpul dan Mushola Arraudhah Martapura</p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navi">
                <li class="nav-item">
                    <a class="nav-link nav-btn active" href="#">HEADER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-btn" href="#lokasi">LOKASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-btn" href="#fitur">FITUR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-btn" href="#cctv">CCTV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-btn" href="#kontak">KONTAK</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="smoke">
    <div class="container" id="fh5co-pricing">
        <div class="card card-body">
        <h2>Informasi Kehilangan Barang</h2>
        <hr>
        <div class="table-responsive">
        <table class="table table-bordered table-striped mb-0" id="datatable-default">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Posko</th>
                                    <th>Nama Barang</th>
                                    <th>Merk</th>
                                    <th>Status</th>
                                    <th>Tanggal Pelaporan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->posko->nama_posko}}</td>
                                    <td>{{$d->nama_barang}}</td>
                                    <td>{{$d->merk}}</td>
                                    <td>
                                        @if($d->status == 1)
                                        <span class="badge badge-warning">Belum ditemukan</span>
                                        @elseif($d->status == 2)
                                        <span class="badge badge-success">Sudah ditemukan</span>
                                        @endif
                                    </td>
                                    <td>{{carbon\carbon::parse($d->created_at)->translatedFormat('d F Y')}}</td>
                                </tr> 
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                    </div>
    </div>
</div>


<div class="dark">
    <div class="container animate-box" id="fh5co-footer">
        <div class="row">
            <div class="col-sm-4">
                <div><a class="nsavbar-brand" href="#">Lokasi</span></a></div>
                <br>
                <div class="text-white"> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4414.766011865244!2d114.85339486663894!3d-3.427675765891481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de681f01a4afa8b%3A0xbca32ee881a736f8!2sKubah%20Sekumpul!5e0!3m2!1sid!2sid!4v1592054713391!5m2!1sid!2sid" width="350" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="icons">Explore Our Pages</h3></div>
                <br>
                <table width="100%">
                    <tr>
                        <td><a class="text-white" href="#!">Home</a></td>
                        <td><a class="text-white" href="#fh5co-pricing">Hosting</a></td>
                    </tr>
                    <tr>
                        <td><a class="text-white" href="#!">About us</a></td>
                        <td><a class="text-white" href="#!">Faq</a></td>
                    </tr>
                    <tr>
                        <td><a class="text-white" href="#!">Services</a></td>
                        <td><a class="text-white" href="#!">Cart</a></td>
                    </tr>
                    <tr>
                        <td><a class="text-white" href="#!">Shop</a></td>
                        <td><a class="text-white" href="#!">Checkout</a></td>
                    </tr>
                    <tr>
                        <td><a class="text-white" href="#!">Blog</a></td>
                        <td><a class="text-white" href="#fh5co-contact">Contact</a></td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <div class="icons">Get in Touch</h3></div>
                <br>
                <div>
                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-google-plus-square" aria-hidden="true"></i>
                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="darker">
    <div class="container" id="fh5co-legal">
        <div class="row">
            <div class="col-sm-8 text-white mtext-center">
                &copy; 2020 
            </div>
        </div>
    </div>
</div>


<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>-->
<script src="{{asset('depan/js/jquery.min.js')}}"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
<script src="{{asset('depan/js/bootstrap.min.js')}}"></script>
<!--<script src="https://use.fontawesome.com/8e45396e2e.js"></script>-->
<script src="{{asset('depan/js/fontawesome.js')}}"></script>
<script src="{{asset('depan/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('depan/js/animate.js')}}"></script>
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

</body>
</html>
