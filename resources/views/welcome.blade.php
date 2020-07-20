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
            <a href="http://www.arraudhah-sekumpul.com" target="_blank" class="text-white"> <i
                    class="fa fa-internet"></i> www.arraudhah-sekumpul.com</a>
        </div>
        <div class="col-sm-2 col-6 text-center">
        </div>
        <div class="col-sm-3 col-6 login">
            <a href="{{Route('adminIndex')}}" class="text-white">Login</a> &nbsp; &nbsp;
        </div>
    </div>
    <nav class="navbar navbar-expand-lg nav-bar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{asset('admin/img/logo.png')}}" width="55" height="50"
                    alt="Porto Admin" /></a>
            <p class="pt-3">Sistem Informasi Haul Sekumpul dan Mushola Arraudhah Martapura</p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto navi">
                    <li class="nav-item">
                        <a class="nav-link nav-btn active" href="#">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-btn " href="{{Route('informasiDepan')}}">INFORMASI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-btn" href="#lokasi">LOKASI</a>
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
    <div class="smoke">
        <div class="container" id="berita">
            <div class="text-center animate-box">
                <h3>Berita Ar Rauddah</h3>
            </div>
            <br><br>
            <div class="row">
                @foreach($berita as $b)
                <div class="col-sm-4 animate-box" data-animate-effect="fadeInLeft">
                    <div class="price-box">
                        <img src="{{asset('images/arraudah/'.$b->foto)}}" alt="" width="310px" class="mb-3">
                        <h5 class="text-left">{{$b->judul}}</b></h5>
                        <div class="text-left">
                            <a href="{{Route('beritaShow',['uuid'=>$b->uuid])}}" class="btn btn-banner text-left">BACA
                                BERITA</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-sm-12 animate-box text-center" data-animate-effect="fadeInLeft">
                    <br>
                    <br>
                    <a href="{{Route('beritaAll')}}"
                        style="text-align:center color:green !important; text-decoration:none;" href="">Lihat Berita
                        Liannya >></a>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</div>
<div class="white">
    <div class=" row" id="cctv" >
        <div class="col-sm-6 text-center ">
            <img src="{{asset('depan/img/cctv.png')}}" alt="" width="500px">
        </div>
        <div class="col-sm-5">
            <h3>CCTV Kabupaten Banjar</h3>
            <p class="text-justify">Dalam rangka untuk menciptakan kondisi lalu lintas yang aman, tertib dan lancar, Pemda Kabupaten Banjar dan Banjarbaru telah memasang kamera pengawas atau CCTV pada beberapa titik jalan.,selain itu Membantu masyarakat dalam pemantauan arus lalu lintas di kabupaten banjar lebih khususnya area sekumpul.</p>
            <a  class="btn btn-success" href="https://banjarkab.go.id/cctv/" target="_blank" class="text-white">CCTV MARTAPURA</a></p>
            <a  class="btn btn-success" href="https://cctv.banjarbarukota.go.id/grid/" target="_blank" class="text-white">CCTV BANJARBARU</a>
=======
    <div class="white">
        <div class=" row" id="cctv">
            <div class="col-sm-6 text-center ">
                <img src="{{asset('depan/img/cctv.png')}}" alt="" width="500px">
            </div>
            <div class="col-sm-5">
                <h3>CCTV Kabupaten Banjar</h3>
                <p class="text-justify">Dalam rangka untuk menciptakan kondisi lalu lintas yang aman, tertib dan lancar,
                    Pemda Kabupaten Banjar telah memasang kamera pengawas atau CCTV pada beberapa titik jalan.,selain
                    itu Membantu masyarakat dalam pemantauan arus lalu lintas di kabupaten banjar lebih khususnya area
                    sekumpul.</p>
                <a class="btn btn-success" href="https://banjarkab.go.id/cctv/" target="_blank" class="text-white">Klik
                    CCTV</a>
            </div>
>>>>>>> e14ce494497f6d364612adb434b8d96d83885872
        </div>
    </div>

    <div class="smoke">
        <div class="container" id="lokasi">

<<<<<<< HEAD
        <div class="heading animate-box"><h2><b>Lokasi</b></h2></div>
        <div class="text-center animate-box"><h3>Kubah Sekumpul</h3></div>
        <br><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4414.766011865244!2d114.85339486663894!3d-3.427675765891481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de681f01a4afa8b%3A0xbca32ee881a736f8!2sKubah%20Sekumpul!5e0!3m2!1sid!2sid!4v1592054713391!5m2!1sid!2sid" width="1150" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
=======
            <div class="heading animate-box">
                <h2><b>Lokasi</b></h2>
            </div>
            <div class="text-center animate-box">
                <h3>kubah Sekumpul</h3>
            </div>
            <br><br>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4414.766011865244!2d114.85339486663894!3d-3.427675765891481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de681f01a4afa8b%3A0xbca32ee881a736f8!2sKubah%20Sekumpul!5e0!3m2!1sid!2sid!4v1592054713391!5m2!1sid!2sid"
                width="1150" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
>>>>>>> e14ce494497f6d364612adb434b8d96d83885872
    </div>
    <!-- <div class="white">
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
</div> -->


    <div class="dark">
        <div class="container animate-box" id="kontak">
            <div class="row">
                <div class="col-sm-6">
                    <div><a class="nsavbar-brand" href="#">Lokasi</span></a></div>
                    <br>
                    <div class="text-white">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4414.766011865244!2d114.85339486663894!3d-3.427675765891481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de681f01a4afa8b%3A0xbca32ee881a736f8!2sKubah%20Sekumpul!5e0!3m2!1sid!2sid!4v1592054713391!5m2!1sid!2sid"
                            width="350" height="200" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="icons">Media Sosial</h3>
                    </div>
                    <br>
                    <div>
                        <a href="https://www.facebook.com/ArraudhahSekumpul/">
                            <h5 class="text-white"><i class="fa fa-facebook-square" aria-hidden="true"></i> Arraudhah
                                Sekumpul</h5>
                        </a> <br>
                        <a href="https://www.instagram.com/arraudhah_sekumpul/">
                            <h5 class="text-white"><i class="fa fa-instagram" aria-hidden="true"></i> arraudhah_sekumpul
                            </h5>
                        </a> <br>
                        <a href="https://www.youtube.com/channel/UCNWJUm_p-nB32PYfX99nLBw">
                            <h5 class="text-white"><i class="fa fa-youtube" aria-hidden="true"></i> Ar_Raudhah
                                TV_Official</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<<<<<<< HEAD
<div class="darker">
    <div class="container" id="fh5co-legal">
        <div class="row">
            <div class="col-sm-12 text-white text-center">
                &copy;  Ahmad Ridho Setiawan 2020
=======
    <div class="darker">
        <div class="container" id="fh5co-legal">
            <div class="row">
                <div class="col-sm-12 text-white text-center">
                    &copy; 2020
                </div>
>>>>>>> e14ce494497f6d364612adb434b8d96d83885872
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