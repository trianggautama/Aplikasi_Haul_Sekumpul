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

<div>
    <img class="banner d-none d-sm-block" src="{{asset('depan/img/banner.jpg')}}">

</div>
<div class="white">
    <div class=" row" id="fh5co-reviews" >
        <div class="col-sm-6 text-center ">
            <img src="{{asset('depan/img/cctv.png')}}" alt="" width="500px">
        </div>
        <div class="col-sm-5">
            <h3>CCTV Kabupaten Banjar</h3>
            <p class="text-justify">Dalam rangka untuk menciptakan kondisi lalu lintas yang aman, tertib dan lancar, Pemda Kabupaten Banjar telah memasang kamera pengawas atau CCTV pada beberapa titik jalan.,selain itu Membantu masyarakat dalam pemantauan arus lalu lintas di kabupaten banjar lebih khususnya area sekumpul.</p>
            <a  class="btn btn-success" href="https://banjarkab.go.id/cctv/" target="_blank" class="text-white">Klik CCTV</a>
        </div>
    </div>
</div>
<div class="smoke">
    <div class="container" id="lokasi">

        <div class="heading animate-box"><h2><b>Lokasi</b></h2></div>
        <div class="text-center animate-box"><h3>kubah Sekumpul</h3></div>
        <br><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4414.766011865244!2d114.85339486663894!3d-3.427675765891481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de681f01a4afa8b%3A0xbca32ee881a736f8!2sKubah%20Sekumpul!5e0!3m2!1sid!2sid!4v1592054713391!5m2!1sid!2sid" width="1150" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
<div class="white">
    <div class="container" id="fitur">
        <div class="heading animate-box"><h2><b><span class="text-org">FITUR</span> <span class="text-gr"> KAMI</span></b></h2>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-4 animate-box" data-animate-effect="fadeIn">
                <a href="{{Route('rombonganDepan')}}" style="text-decoration: none; color:black;">
                <div class="bordery">
                    <i class="fa fa-server text-gr bfont" aria-hidden="true"></i> <b>Informasi Rombongan</b>
                    <div class="features text-justify">Get amazing results working with the best programmers, designers, writers and
                        other top online pros. You can hire us with confidence. Get amazing results working with the
                        best programmers...
                    </div>
                </div>
                </a>
            </div>
            <div class="col-sm-4 animate-box" data-animate-effect="fadeIn">
            <a href="{{Route('kehilanganBarangDepan')}}" style="text-decoration: none; color:black;">
                <div class="bordery">
                    <i class="fa fa-server text-gr bfont" aria-hidden="true"></i> <b>Kehilangan Barang</b>
                    <div class="features text-justify">Get amazing results working with the best programmers, designers, writers and
                        other top online pros. You can hire us with confidence. Get amazing results working with the
                        best programmers...
                    </div>
                </div>
                </a>
            </div>
            <div class="col-sm-4 animate-box" data-animate-effect="fadeIn">
            <a href="{{Route('penemuanBarangDepan')}}" style="text-decoration: none; color:black;">
                <div class="bordery" style="border-right: 0px;">
                    <i class="fa fa-server text-gr bfont" aria-hidden="true"></i> <b>penemuan Barang</b>
                    <div class="features text-justify">Get amazing results working with the best programmers, designers, writers and
                        other top online pros. You can hire us with confidence. Get amazing results working with the
                        best programmers...
                    </div>
                </div>
            </a>
            </div>
            <div class="col-sm-4 animate-box">
            <a href="{{Route('kehilanganOrangDepan')}}" style="text-decoration: none; color:black;">
                <div class="bordery" style="border-bottom: 0px;">
                    <i class="fa fa-server text-gr bfont" aria-hidden="true"></i> <b>Kehilangan orang</b>
                    <div class="features text-justify">Get amazing results working with the best programmers, designers, writers and
                        other top online pros. You can hire us with confidence. Get amazing results working with the
                        best programmers...
                    </div>
                </div>
            </a>
            </div>
            <div class="col-sm-4 animate-box">
            <a href="{{Route('kehilanganKendaraanDepan')}}" style="text-decoration: none; color:black;">
                <div class="bordery" style="border-bottom: 0px">
                    <i class="fa fa-server text-gr bfont" aria-hidden="true"></i> <b>Kehilangan Kendaraan</b>
                    <div class="features text-justify">Get amazing results working with the best programmers, designers, writers and
                        other top online pros. You can hire us with confidence. Get amazing results working with the
                        best programmers...
                    </div>
                </div>
                </a>
            </div>
            <div class="col-sm-4 animate-box">
            <a href="{{Route('penemuanKendaraanDepan')}}" style="text-decoration: none; color:black;">
                <div class="bordery" style="border-right: 0px; border-bottom: 0px">
                    <i class="fa fa-server text-gr bfont" aria-hidden="true"></i> <b>Penemuan Kendaraan</b>
                    <div class="features">Get amazing results working with the best programmers, designers, writers and
                        other top online pros. You can hire us with confidence. Get amazing results working with the
                        best programmers...
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="signup animate-box" id="fh5co-newsletter">
    <div class="text-center"><h2>Sign up to our newsletter for special offers</h2></div>
</div>
<div class="smoke">
    <div class="container" id="fh5co-pricing">
        <div class="text-center animate-box"><h3>Berita Ar Rauddah</h3></div>
        <br><br>
        <div class="row">
        @foreach($berita as $b)
            <div class="col-sm-4 animate-box" data-animate-effect="fadeInLeft">
                <div class="price-box">
                <img src="{{asset('images/arraudah/'.$b->foto)}}" alt="" width="310px" class="mb-3">
                    <h5 class="text-left">{{$b->judul}}</b></h5>
                    <div class="text-left">
                    <a  href="{{Route('beritaShow',['uuid'=>$b->uuid])}}" class="btn btn-banner text-left">BACA BERITA</a>
                    </div>
                </div>
            </div>
        @endforeach
            <div class="col-sm-12 animate-box text-center" data-animate-effect="fadeInLeft">
            <br>
            <br>
                <a href="{{Route('beritaAll')}}" style="text-align:center color:green !important; text-decoration:none;" href="">Lihat Berita Liannya >></a>
            </div>
        </div>
    </div>
</div>
<div class="white">
    <div class="container" id="fh5co-reviews">
        <div class="heading animate-box"><h2><b>CUSTOMER LOVE US</b></h2></div>
        <div class="text-center animate-box"><h3>Lorem ipsum lahore</h3></div>
        <div class="row animate-box">
            <div class="col-md-12">
                <div id="quote-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2">
                                        <p class="testi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            veniam, quis nostrud exercitation ullamco laboris nisi ut </p>
                                        <div class="text-center"><i class="fa fa-caret-down down-ar"></i></div>
                                        <div class="text-center">
                                            <h4 class="text-org">Someone DOE</h4>
                                            <h5 class="text-dark">UI Designer</h5></div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="carousel-item item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2">
                                        <p class="testi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex </p>
                                        <div class="text-center"><i class="fa fa-caret-down down-ar"></i></div>
                                        <div class="text-center">
                                            <h4 class="text-org">Someone DOE</h4>
                                            <h5 class="text-dark">UI Designer</h5></div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <div class="carousel-item item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 offset-sm-2">
                                        <p class="testi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            veniam, quis nostrud exercitation ullamco laboris nisi ut</p>
                                        <div class="text-center"><i class="fa fa-caret-down down-ar"></i></div>
                                        <div class="text-center">
                                            <h4 class="text-org">Someone DOE</h4>
                                            <h5 class="text-dark">UI Designer</h5></div>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>

                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active">
							<img class="img-responsive "src="{{asset('depan/img/customer1.jpg')}}"alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1">
							<img class="img-responsive" src="{{asset('depan/img/customer2.jpg')}}" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2">
							<img class="img-responsive"src="{{asset('depan/img/customer3.jpg')}}" alt="">
                        </li>
                    </ol>
                    </a>

                </div>
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

</body>
</html>
