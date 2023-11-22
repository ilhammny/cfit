<?php
error_reporting(0);
ini_set('display_errors', 0);

$nama = $_POST['namaa'];
$jabatan = $_POST['jabatan'];
$pndidikan = $_POST['pendidikann'];
$tgl = $_POST['tanggal_testa'];
$tgl_lahir = $_POST['tanggal_lahir'];
$usia = $_POST['usia'];

$kolom1 = $_POST["kolom1"];
$kolom2 = $_POST["kolom2"];
$kolom3 = $_POST["kolom3"];
$kolom4 = $_POST["kolom4"];
$kolom5 = $_POST["kolom5"];
$kolom6 = $_POST["kolom6"];
$kolom7 = $_POST["kolom7"];
$kolom8 = $_POST["kolom8"];
$kolom9 = $_POST["kolom9"];
$kolom10 = $_POST["kolom10"];
$kolom11 = $_POST["kolom11"];
$kolom12 = $_POST["kolom12"];
$kolom13 = $_POST["kolom13"];

$kol1 = $_POST["kol1"];
$kol2 = $_POST["kol2"];
$kol3 = $_POST["kol3"];
$kol4 = $_POST["kol4"];
$kol5 = $_POST["kol5"];
$kol6 = $_POST["kol6"];
$kol7 = $_POST["kol7"];
$kol8 = $_POST["kol8"];
$kol9 = $_POST["kol9"];
$kol10 = $_POST["kol10"];
$kol11 = $_POST["kol11"];
$kol12 = $_POST["kol12"];
$kol13 = $_POST["kol13"];
$kol14 = $_POST["kol14"];
// $conn= mysqli_connect("localhost", "root", "", "cfit");

// if (isset( $_POST["submit"])) {
//   $nomor1= htmlspecialchars($_POST["nomor1"]);
//   $nomor2 = htmlspecialchars($_POST["nomor2"]);
//   $nomor3= htmlspecialchars ($_POST["nomor3"]);
//   $nomor4 = htmlspecialchars($_POST["nomor4"]);
//   $nomor5 = htmlspecialchars($_POST["nomor5"]);
//   $nomor6 = htmlspecialchars($_POST["nomor6"]);
//   $nomor7 = htmlspecialchars($_POST["nomor7"]);
//   $nomor8 = htmlspecialchars($_POST["nomor8"]);
//   $nomor9=htmlspecialchars($_POST["nomor9"]);
//   $nomor10 = htmlspecialchars($_POST["nomor10"]);
//   $nomor11 = htmlspecialchars($_POST["nomor11"]);
//   $nomor12 = htmlspecialchars($_POST["nomor12"]);
//   $nomor13 = htmlspecialchars($_POST["nomor13"]);
  
  

//   $query ="INSERT INTO sub3 VALUES('', '$nomor1', '$nomor2','$nomor3', '$nomor4','$nomor5'
//   ,'$nomor6','$nomor7','$nomor8','$nomor9'
//   ,'$nomor10', '$nomor11', '$nomor12', '$nomor13')";
  
//   mysqli_query($conn, $query);
//   };
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CFIT Sub 3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <style>
    .container .container {
      display: flex;
      flex-wrap: nowrap;
      flex-direction: row;
      gap: 10px;
    }

    img {
      width: 50px;
      height: 50px;

    }

    #pm {
      width: 100px;
      height: 100px;
    }

    p {
      margin-left: 25px;
    }

    #il {
      margin-top: 80px;
      font-size: 20px;
    }

    #hb {
      margin-top: 40px;
    }

    #op {
      margin-top: 50px;
    }

    #a {
      margin-left: 15px;
    }

    .timer {
      position: fixed;
    }

    @media screen and (max-width: 480px) {
      .container {
        flex-wrap: wrap;
      }

      .timer {
        margin-left: 20em;
      }
    }
  </style>
</head>

<body>
  <div class="p-3 mb-2 bg-dark text-white">
    <section class="d-flex justify-content-center">
      <div class="card-body border-top">
        <div class="timer ">
          <h2 id="countdown"></h2>
        </div>
        <h5 class="card-title text-center p-3">CFIT Test Sub 3</h5>
        <form action="instruksi4.php" id="form3" method="post" enctype="multipart/form-data">
        <input type="hidden"value="<?= $nama ?>" name="namaa">
  <input type="hidden" value="<?= $jabatan ?>" name="jabatan">
  <input type="hidden" value="<?= $pndidikan ?>" name="pendidikann">
  <input type="hidden" value="<?= $tgl ?>" name="tanggal_testa">
  <input type="hidden" value="<?= $tgl_lahir ?>" name="tanggal_lahir">
  <input type="hidden" value="<?= $usia ?>" name="usia">

  <input type="hidden"value="<?= $kolom1 ?>" name="kolom1">
  <input type="hidden" value="<?= $kolom2 ?>" name="kolom2">
  <input type="hidden" value="<?= $kolom3 ?>" name="kolom3">
  <input type="hidden" value="<?= $kolom4 ?>" name="kolom4">
  <input type="hidden" value="<?= $kolom5 ?>" name="kolom5">
  <input type="hidden" value="<?= $kolom6 ?>" name="kolom6">
  <input type="hidden" value="<?= $kolom7 ?>" name="kolom7">
  <input type="hidden" value="<?= $kolom8 ?>" name="kolom8">
  <input type="hidden" value="<?= $kolom9 ?>" name="kolom9">
  <input type="hidden" value="<?= $kolom10 ?>" name="kolom10">
  <input type="hidden" value="<?= $kolom11 ?>" name="kolom11">
  <input type="hidden" value="<?= $kolom12?>" name="kolom12">
  <input type="hidden" value="<?= $kolom13  ?>" name="kolom13">

  <input type="hidden"value="<?= $kol1 ?>" name="kol1">
  <input type="hidden" value="<?= $kol2 ?>" name="kol2">
  <input type="hidden" value="<?= $kol3 ?>" name="kol3">
  <input type="hidden" value="<?= $kol4 ?>" name="kol4">
  <input type="hidden" value="<?= $kol5 ?>" name="kol5">
  <input type="hidden" value="<?= $kol6 ?>" name="kol6">
  <input type="hidden" value="<?= $kol7 ?>" name="kol7">
  <input type="hidden" value="<?= $kol8 ?>" name="kol8">
  <input type="hidden" value="<?= $kol9 ?>" name="kol9">
  <input type="hidden" value="<?= $kol10 ?> " name="kol10">
  <input type="hidden" value="<?= $kol11 ?> " name="kol11">
  <input type="hidden" value="<?= $kol12 ?>" name="kol12">
  <input type="hidden" value="<?= $kol13   ?> " name="kol13">
  <input type="hidden" value="<?= $kol14   ?> " name="kol14">
          <div class="container mb-3">
            <p id="il">1</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/1A-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor1">
              </div>
              <div>
                <p>b</p>
                <img src="asset/1B-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor1">
              </div>
              <div>
                <p>c</p>
                <img src="asset/1C-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor1">
              </div>
              <div>
                <p>d</p>
                <img src="asset/1D-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor1">
              </div>
              <div>
                <p>e</p>
                <img src="asset/1E-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor1">
              </div>
              <div>
                <p>f</p>
                <img src="asset/1F.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor1">
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">2</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/2.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/2A-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor2">
              </div>
              <div>
                <p>b</p>
                <img src="asset/2B-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor2">
              </div>
              <div>
                <p>c</p>
                <img src="asset/2C-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor2">
              </div>
              <div>
                <p>d</p>
                <img src="asset/2D-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor2">
              </div>
              <div>
                <p>e</p>
                <img src="asset/2E-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor2">
              </div>
              <div>
                <p>f</p>
                <img src="asset/2F.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor2">
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">3</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/3.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/3A-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor3">
              </div>
              <div>
                <p>b</p>
                <img src="asset/3B-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor3">
              </div>
              <div>
                <p>c</p>
                <img src="asset/3C-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor3">
              </div>
              <div>
                <p>d</p>
                <img src="asset/3D-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor3">
              </div>
              <div>
                <p>e</p>
                <img src="asset/3E-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor3">
              </div>
              <div>
                <p>f</p>
                <img src="asset/3F.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor3">
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">4</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/4-1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/4A-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor4">
              </div>
              <div>
                <p>b</p>
                <img src="asset/4B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor4">
              </div>
              <div>
                <p>c</p>
                <img src="asset/4C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor4">
              </div>
              <div>
                <p>d</p>
                <img src="asset/4D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor4">
              </div>
              <div>
                <p>e</p>
                <img src="asset/4E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor4">
              </div>
              <div>
                <p>f</p>
                <img src="asset/4F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor4">
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">5</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/5-2.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/5A-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor5">
              </div>
              <div>
                <p>b</p>
                <img src="asset/5B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor5">
              </div>
              <div>
                <p>c</p>
                <img src="asset/5C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor5">
              </div>
              <div>
                <p>d</p>
                <img src="asset/5D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor5">
              </div>
              <div>
                <p>e</p>
                <img src="asset/5E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor5">
              </div>
              <div>
                <p>f</p>
                <img src="asset/5F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor5">
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">6</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/6-1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/6A-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor6">
              </div>
              <div>
                <p>b</p>
                <img src="asset/6B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor6">
              </div>
              <div>
                <p>c</p>
                <img src="asset/6C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor6">
              </div>
              <div>
                <p>d</p>
                <img src="asset/6D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor6">
              </div>
              <div>
                <p>e</p>
                <img src="asset/6E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor6">
              </div>
              <div>
                <p>f</p>
                <img src="asset/6F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor6">
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">7</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/7-1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/7A-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor7">
              </div>
              <div>
                <p>b</p>
                <img src="asset/7B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor7">
              </div>
              <div>
                <p>c</p>
                <img src="asset/7C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor7">
              </div>
              <div>
                <p>d</p>
                <img src="asset/7D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor7">
              </div>
              <div>
                <p>e</p>
                <img src="asset/7E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor7">
              </div>
              <div>
                <p>f</p>
                <img src="asset/7F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor7">
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">8</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/8-1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/8A-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor8">
              </div>
              <div>
                <p>b</p>
                <img src="asset/8B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor8">
              </div>
              <div>
                <p>c</p>
                <img src="asset/8C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor8">
              </div>
              <div>
                <p>d</p>
                <img src="asset/8D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor8">
              </div>
              <div>
                <p>e</p>
                <img src="asset/8E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor8">
              </div>
              <div>
                <p>f</p>
                <img src="asset/8F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor8">
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">9</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/9-1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/9A-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor9">
              </div>
              <div>
                <p>b</p>
                <img src="asset/9B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor9">
              </div>
              <div>
                <p>c</p>
                <img src="asset/9C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor9">
              </div>
              <div>
                <p>d</p>
                <img src="asset/9D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor9">
              </div>
              <div>
                <p>e</p>
                <img src="asset/9E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor9">
              </div>
              <div>
                <p>f</p>
                <img src="asset/9F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor9">
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">10</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/10-1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/10A-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor10">
              </div>
              <div>
                <p>b</p>
                <img src="asset/10B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor10">
              </div>
              <div>
                <p>c</p>
                <img src="asset/10C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor10">

              </div>
              <div>
                <p>d</p>
                <img src="asset/10D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor10">

              </div>
              <div>
                <p>e</p>
                <img src="asset/10E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor10">

              </div>
              <div>
                <p>f</p>
                <img src="asset/10F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor10">

              </div>
            </div>
          </div>
          <div class="container">
            <p id="il">11</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/11-1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/11A-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor11">

              </div>
              <div>
                <p>b</p>
                <img src="asset/11B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor11">

              </div>
              <div>
                <p>c</p>
                <img src="asset/11C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor11">

              </div>
              <div>
                <p>d</p>
                <img src="asset/11D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor11">

              </div>
              <div>
                <p>e</p>
                <img src="asset/11E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor11">

              </div>
              <div>
                <p>f</p>
                <img src="asset/11F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor11">

              </div>
            </div>
          </div>

          <div class="container mb-3">
            <p id="il">12</p>
            <div class="container" id="hb">
              <div><img id="pm" src="asset/12-1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op">
              <div>
                <p>a</p>
                <img src="asset/12A-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor12">

              </div>
              <div>
                <p>b</p>
                <img src="asset/12B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor12">

              </div>
              <div>
                <p>c</p>
                <img src="asset/12C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor12">

              </div>
              <div>
                <p>d</p>
                <img src="asset/12D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor12">

              </div>
              <div>
                <p>e</p>
                <img src="asset/12E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor12">

              </div>
              <div>
                <p>f</p>
                <img src="asset/12F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor12">

              </div>
            </div>
          </div>
          <div class="container mb-3">
            <p id="il">13</p>
            <div class="container" id="hb" style="margin-top: 40px">
              <div><img id="pm" src="asset/13-1.jpg" alt="" /></div>
            </div>
            <div class="container" id="op" style="margin-top: 50px">
              <div>
                <p>a</p>
                <img src="asset/13A-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="A" name="nomor13">

              </div>
              <div>
                <p>b</p>
                <img src="asset/13B-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="B" name="nomor13">

              </div>
              <div>
                <p>c</p>
                <img src="asset/13C-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="C" name="nomor13">

              </div>
              <div>
                <p>d</p>
                <img src="asset/13D-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="D" name="nomor13">

              </div>
              <div>
                <p>e</p>
                <img src="asset/13E-2.jpg" alt="" /> <br>
                <input id="a" type="radio" value="E" name="nomor13">

              </div>
              <div>
                <p>f</p>
                <img src="asset/13F-1.jpg" alt="" /> <br>
                <input id="a" type="radio" value="F" name="nomor13">

              </div>
            </div>
          </div>

          <button name="btnSubmit" type="submit" class="btn btn-light text-dark" style="width: 100%"
          onclick="myFunction()" ;>
            Submit
          </button>
        </form>
      </div>
    </section>
  </div>

  <script>
    const countdownElement = document.getElementById('countdown');

    function countdownTimer(duration, displayElement) {
      let timer = duration;
      let minutes, seconds;

      setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        second = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        second = second = 60 ? + second : seconds;

        displayElement.textContent = minutes + ":" + second;
        if (--timer < 0) {
          alert("waktu Habis")
          document.getElementById("form3").submit();
        }
      }, 1000)
    }
    const countdownDuration = 180;
    countdownTimer(countdownDuration, countdownElement);

  </script>
  <script src="js3.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>