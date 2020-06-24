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
         width:40px;
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
         margin-top: 2%;
         height: 1px;
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
     @page { 
         size: 80 mm 140 mm ; 
         margin: 10px;
         }

    </style>
</head>
<body>
    <div class="header">
            <div class="logo">
                    <img  class="pemko" src="admin/img/logo.png" >
            </div>
            <div class="headtext">
                <h5 style="margin:1px;">MUSHOLA AR-RAUDHAH SEKUMPUL </h5>
                <p style="margin:0px; font-size:8px">Jl.Sekumpul Komplek ar-Raudhah Martapura 70614</p>
                <p style="margin:0px; font-size:8px">website : http://www.arraudhah-sekumpul.com</p>
            </div>
            <br>
    </div>
    <div class="container">
     <div class="isi">
     <hr>
         <br>
        <div class="text-center">
        <p style="margin:0px ; text-transform:uppercase;"><b>TANDA PENGENAL</b></p>
        <br>
        <img style="margin-bottom:20px;" src="images/user/{{$data->user->foto}}" alt="" width="100%">
        <p style="margin:0px ; text-transform:uppercase;"><b>{{$data->user->nama}}</b></p>
        <p style="margin:0px; color:green">(Ketua {{$data->posko->nama_posko}})</p>
        <p style="margin:0px">No hp: {{$data->user->no_hp}}</p>
        </div>
        
     </div>
    </div>
       
         </body>
</html>