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
        <div class="isi">
        <hr>
            <h2 style="text-align:center;">DATA ROMBONGAN HAUL  {{\carbon\carbon::parse($haul->tanggal_mulai)->translatedFormat('Y')}}</h2>
            <br>
            <table class="table table-bordered table-striped mb-0" id="datatable-default">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Haul</th>
                                    <th>Asal Rombongan</th>
                                    <th>Ketua Rombongan</th>
                                    <th>Jumlah Rombongan</th>
                                    <th>Pendata</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>Periode
                                        {{\carbon\carbon::parse($d->haul_sekumpul->tanggal_mulai)->translatedFormat('Y')}}
                                    </td>
                                    <td>{{$d->asal_rombongan}}</td>
                                    <td>{{$d->nama_ketua_rombongan}}</td>
                                    <td>{{$d->jumlah_rombongan}} orang</td>
                                    <td>{{$d->posko->nama_posko}}</td>
                                </tr>
                                @endforeach
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