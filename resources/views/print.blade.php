<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title></title>
        <link rel="shortcut icon" href="img/uin.png" type="image/x-icon" />
        <!-- Bootstrap -->
        </head>
    <body onload="read()">
        <style type="text/css"> 
            th{
                font-size: 10pt;
            }
            td{
                font-size: 10pt;
            }
        </style>

    <div class="book">
            <div class="page" id="page">
                <div id="sub">
                <table border=1 class="table table-striped table-condensed">
                <tr>
                    <td>Dosen</td>
                    <td>{{$dosen->name}}</td>
                </tr>
                <tr>
                    <td>Mata Kuliah</td>
                    <td>{{$Matkul->name}}</td>
                </tr>
                </div>
            </div>
    </div>