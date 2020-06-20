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
    <img class="banner d-none d-sm-block" src="{{asset('images/arraudah/'.$data->foto)}}" height="500px">

</div>
<div class="smoke">
    <div class="container" id="fh5co-pricing">
        <div class=" animate-box">
            <h2 style="margin:0px">{{$data->judul}}</h2>
             <p style="margin:0px">{{\carbon\carbon::parse($data->created_at)->translatedFormat('d F Y')}}</p>
             <br>
             {!! $data->isi !!}
        </div>
        <br><br>
        <div class="row">

            <div class="col-sm-12 animate-box text-center" data-animate-effect="fadeInLeft">
            <br>
            <br>
            </div>
        </div>
    </div>
</div>


<div class="dark">
    <div class="container animate-box" id="kontak">
        <div class="row">
            <div class="col-sm-6">
                <div><a class="nsavbar-brand" href="#">Lokasi</span></a></div>
                <br>
                <div class="text-white"> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4414.766011865244!2d114.85339486663894!3d-3.427675765891481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de681f01a4afa8b%3A0xbca32ee881a736f8!2sKubah%20Sekumpul!5e0!3m2!1sid!2sid!4v1592054713391!5m2!1sid!2sid" width="350" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="icons">Media Sosial</h3></div>
                <br>
                <div>
                    <a href="https://www.facebook.com/ArraudhahSekumpul/"><h5 class="text-white"><i class="fa fa-facebook-square" aria-hidden="true"></i> Arraudhah Sekumpul</h5></a> <br>
                    <a href="https://www.instagram.com/arraudhah_sekumpul/"><h5 class="text-white"><i class="fa fa-instagram" aria-hidden="true"></i> arraudhah_sekumpul </h5></a> <br>
                    <a href="https://www.youtube.com/channel/UCNWJUm_p-nB32PYfX99nLBw"><h5 class="text-white"><i class="fa fa-youtube" aria-hidden="true"></i> Ar_Raudhah TV_Official</h5></a>
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
