<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    h4,h2{
        font-family:serif;
    }
        body{
            font-family:sans-serif;
        }
        table{
        border-collapse: collapse;
        width:100%;
      }
      table, th, td{
          border: 1px solid black;
      }
      th{
        text-align: left;
      }
      tr{
          height: 30px;
      }
      td{
        text-align: left;
        height: 30px;
      }
      br{
          margin-bottom: 5px !important;
      }
     .judul{
         text-align: center;
     }
     .header{
         margin-bottom: 0px;
         text-align: center;
         height: 50px;
         padding: 0px;
     }
     .pemko{
         width:100px;
     }
     .logo{
         float: left;
         margin-right: 0px;
         width: 21%;
         padding:0px;
         text-align: right;
     }
     .headtext{
         float:right;
         margin-left: 0px;
         padding-top:10px;
         width: 75%;
         padding-left:0px;
         padding-right:10%;
     }
     hr{
         margin-top: 10%;
         height: 4px;
         background-color: black;
         width:100%;
     }
     .ttd{
         margin-left:70%;
         text-align: center;
         text-transform: uppercase;
     }
     .text-right{
         text-align:right;
     }
     .text-center{
         text-align:center;
     }
     .isi{
         padding:10px;
     }
    </style>
</head>
<body>
    <div class="header">
            <div class="logo">
                    <img  class="pemko" src="admin/img/logo.png" >
            </div>
            <div class="headtext">
                <h2 style="margin:1px;">MUSHOLA AR-RAUDHAH SEKUMPUL </h2>
                <p style="margin:0px;">Jl.Sekumpul Komplek ar-Raudhah Martapura 70614</p>
                <p style="margin:0px;">website : http://www.arraudhah-sekumpul.com</p>
            </div>
            <br>
    </div>
    <div class="container">
    <hr>
        <div class="isi">
            <h3 style="text-align:center;">LAPORAN PEMASUKAN MUSHOLA AR-RAUDHAH Dari Tanggal {{\carbon\carbon::parse($tgl_mulai)->translatedFormat('d F Y')}} Sampai {{\carbon\carbon::parse($tgl_akhir)->translatedFormat('d F Y')}}</h3>
            <br>
            <table class="table table-bordered table-striped mb-0" id="datatable-default">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Donatur</th>
                                    <th>penerima</th>
                                    <th>Besaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->arraudah->judul}}</td>
                                    <td>{{$d->nama_donatur}}</td>
                                    <td>{{$d->user->nama}}</td>
                                    <td>Rp.{{$d->besaran}},-</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="text-center" colspan="4">Total</td>
                                    <td>Rp.{{$data->sum('besaran')}},-</td>
                                </tr>
                            </tbody>
                        </table>
                      <br>
                      <br>
                      <div class="ttd">
                        <h5> <p> Martapura, {{$tgl}}</p></h5>
                       <h6>Tertanda</h6>
                      <br>
                      <br>
                      <h5 style="text-decoration:underline;">Mushola ar Raudhah</h5>
                      </div>
                    </div>
             </div>
         </body>
</html>