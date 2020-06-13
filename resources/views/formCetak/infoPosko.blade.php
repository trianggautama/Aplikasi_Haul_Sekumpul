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
      }
      th{
        text-align: center;
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
         height: 150px;
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
            <hr>
            <br>
    </div>
    <div class="container">
        <div class="isi">
            <h2 style="text-align:center;">INFORMASI POSKO</h2>
            <br>
            <table>
                <tr>
                    <td width="170px;">Nama Posko</td>
                    <td>: {{$data->nama_posko}}</td>
                </tr>
                <tr>
                    <td>Jenis Posko</td>
                    <td>: @if($data->jenis_posko == 1)
                                Posko Induk
                                @elseif($data->jenis_posko == 2)
                                Posko Non Induk
                                @else
                                Posko Kesehatan
                                @endif
                    </td>
                </tr>
                <tr>
                    <td>Periode Haul</td>
                    <td>: Periode Haul {{\carbon\carbon::parse($data->haul_sekumpul->created_at)->translatedFormat('Y')}}</td>
                </tr>
                <tr>
                    <td>Alamat Posko</td>
                    <td>: {{$data->alamat}}</td>
                </tr>
                <tr>
                    <td>Nomor Hp Posko</td>
                    <td>: {{$data->no_hp}}</td>
                </tr>
                <tr>
                    <td>Ketua Posko</td>
                    <td>: {{$data->ketua_posko->user->nama}}</td>
                </tr>
                <tr>
                    <td>Alamat Ketua Posko</td>
                    <td>: {{$data->ketua_posko->alamat}}</td>
                </tr>
                <tr>
                    <td>No hp Ketua Posko</td>
                    <td>: {{$data->ketua_posko->user->no_hp}}</td>
                </tr>
                <tr>
                    <td>Jumlah Anggota Posko</td>
                    <td>: 
                        @if($data->anggota_posko->count() != 0)
                            {{$data->anggota_posko->count()}} Orang
                        @endif
                        </td>
                </tr>
                <tr>
                    <td>Jumlah Lokasi Parkir</td>
                    <td>: 
                        @if($data->parkiran->count() != 0)
                            {{$data->parkiran->count()}} Lokasi Parkir
                        @endif
                    </td>
                </tr>
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