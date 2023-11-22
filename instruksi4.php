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

$nomor1 = $_POST["nomor1"];
$nomor2 = $_POST["nomor2"];
$nomor3 = $_POST["nomor3"];
$nomor4 = $_POST["nomor4"];
$nomor5 = $_POST["nomor5"];
$nomor6 = $_POST["nomor6"];
$nomor7 = $_POST["nomor7"];
$nomor8 = $_POST["nomor8"];
$nomor9 = $_POST["nomor9"];
$nomor10 = $_POST["nomor10"];
$nomor11 = $_POST["nomor11"];
$nomor12 = $_POST["nomor12"];
$nomor13 = $_POST["nomor13"];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Instruksi sesi 4</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <style>
      .container {
        display: flex;
      }
      .container {
        flex-direction: row;
      }
      img {
        width: 50px;
        height: 50px;
        justify-content: space-beetween;
      }

      p {
        margin-left: 25px;
      }
      
    </style>
  </head>

  <body>
    <form action="index4.php" method="post">
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

    <input type="hidden"value="<?= $nomor1 ?>" name="nomor1">
  <input type="hidden" value="<?= $nomor2 ?>" name="nomor2">
  <input type="hidden" value="<?= $nomor3 ?>" name="nomor3">
  <input type="hidden" value="<?= $nomor4 ?>" name="nomor4">
  <input type="hidden" value="<?= $nomor5 ?>" name="nomor5">
  <input type="hidden" value="<?= $nomor6 ?>" name="nomor6">
  <input type="hidden" value="<?= $nomor7 ?>" name="nomor7">
  <input type="hidden" value="<?= $nomor8 ?>" name="nomor8">
  <input type="hidden" value="<?= $nomor9 ?>" name="nomor9">
  <input type="hidden" value="<?= $nomor10 ?>" name="nomor10">
  <input type="hidden" value="<?= $nomor11 ?>" name="nomor11">
  <input type="hidden" value="<?= $nomor12?>" name="nomor12">
  <input type="hidden" value="<?= $nomor13  ?>" name="nomor13">
    <div class="container">
      <div class="card p-4 m-3">
        <h2>Berikut adalah petunjuk mengenai CFIT Test sub keempat</h2>
        <h3>Petunjuk</h3>

        <p>
          Instruksi sesi 4 Pilihlah satu dari kelima jawaban yang mencerminkan
          kondisi yang sama dengan gambar contoh disebelah kiri.
        </p>

        <h3>Contoh</h3>
        <div class="container" style="margin-bottom: 40px;">
          <div style="margin-top: 50px;">
          <p id="v">1</p>
        </div>
        <div style="margin-top: 40px;">
          <div style="margin-left: 40px;">
            <img id="pm" src="asset/SUB 4.png" alt="" />
          </div></div>

          <div class="container" style="margin-left: 50px;">
            <div>
              <p>a</p>
              <img src="asset/SUB 41A.png" alt="" />
            </div>
            <div>
              <p>b</p>
              <img src="asset/SUB 41B.png" alt="" />
            </div>
            <div>
              <p>c</p>
              <img src="asset/SUB 41C.png" alt="" />
            </div>
            <div>
              <p>d</p>
              <img src="asset/SUB 41D.png" alt="" />
            </div>
            <div>
              <p>e</p>
              <img src="asset/SUB 41E.png" alt="" />
            </div>
          </div>
        </div>

          <div class="container" style="margin-bottom: 40px;">
            <div style="margin-top: 50px;">
              <p id="v">2</p>
            </div>
            <div style="margin-top: 40px;">
            <div style="margin-left: 40px;">
              <img id="pm" src="asset/SUB 42.png" alt="" />
            </div></div>
          
          <div class="container" style="margin-left: 50px;">
            <div>
              <p>a</p>
              <img src="asset/SUB 42A.png" alt="" />
            </div>
            <div>
              <p>b</p>
              <img src="asset/SUB 42B.png" alt="" />
            </div>
            <div>
              <p>c</p>
              <img src="asset/SUB 42C.png" alt="" />
            </div>
            <div>
              <p>d</p>
              <img src="asset/SUB 42D.png" alt="" />
            </div>
            <div>
              <p>e</p>
              <img src="asset/SUB 42E.png" alt="" />
            </div>
          </div>
        </div>

         
          <div class="container mb-3"  >
            <div style="margin-top: 50px;">
              <p id="v">3</p>
            </div> 
            <div style="margin-top: 40px;">
            <div style="margin-left: 40px;">
              
              <img id="pm" src="asset/SUB 43.png" alt="" />
            </div></div>
          
          <div class="container" style="margin-left: 50px;">
            <div>
              <p>a</p>
              <img src="asset/SUB 43A.png" alt="" />
            </div>
            <div>
              <p>b</p>
              <img src="asset/SUB 43B.png" alt="" />
            </div>
            <div>
              <p>c</p>
              <img src="asset/SUB 43C.png" alt="" />
            </div>
            <div>
              <p>d</p>
              <img src="asset/SUB 43D.png" alt="" />
            </div>
            <div>
              <p>e</p>
              <img src="asset/SUB 43E.png" alt="" />
            </div>
          </div>
        </div>
          <button
            type="submit"
            
            class="btn btn-warning text-light"
          >
            mulai
          </button>
        </div>
      </div>
    </div>
</form>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
