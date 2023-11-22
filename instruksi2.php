<?php
error_reporting(0);
ini_set('display_errors', 0);

$nama = $_POST['namaa'];
$jabatan = $_POST['jabatan'];
$pndidikan = $_POST['pendidikann'];
$tgl = $_POST['tanggal_testa'];
$tgl_lahir = $_POST['tanggal_lahir'];
$usia = $_POST['usia'];

$kolom1 = $_POST['kolom1'];
$kolom2 = $_POST['kolom2'];
$kolom3 = $_POST['kolom3'];
$kolom4 = $_POST['kolom4'];
$kolom5 = $_POST['kolom5'];
$kolom6 = $_POST['kolom6'];
$kolom7 = $_POST['kolom7'];
$kolom8 = $_POST['kolom8'];
$kolom9 = $_POST['kolom9'];
$kolom10 = $_POST['kolom10'];
$kolom11 = $_POST['kolom11'];
$kolom12 = $_POST['kolom12'];
$kolom13 = $_POST['kolom13'];
// $kolom14 = $_POST["kolom14"];

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instruksi sesi 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <style>
            .container {
            display: flex;
            
          }
          .container {
            flex-direction: row;
          }
          img{
            width: 50px;
            height: 50px;
            justify-content: space-beetween;
          }
          #pm {
            width: 200px;
            
          }
          p{
            margin-left:25px;
          }
         
        </style>
</head>

<body>
<form action="index2.php" method="post">
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

    <div class="container">
        <div class="card p-4 m-3">
            <h2>Berikut adalah petunjuk mengenai CFIT Test sub Kedua</h2>
            <h3>Petunjuk</h3>

            <p>Instruksi sesi 2
                Pada setiap soal, anda akan menemukan 5 buah gambar yang disusun secara berdampingan.Telitilah
                gambar-gambar tersebut. Tugas anda adalah menemukan tepat DUA gambar yang memilikikarakteristik yang
                serupa. TIGA gambar lainnya berfungsi sebagai pengecoh anda, sehingga berhati-hatilah dalam menentukan
                pilihan.


            </p>

            
      
      <h3>Contoh</h3>
      <div class="container mb-3">
      
      <div class="conttainer" style="margin-top: 50px;" >
        <p id="v">1</p>
      </div>
      <div class="container" style="margin-left: 40px;">
        
        <div>
          <p>a</p>
          <img src="asset/CONTOH SUB 2 A.png" alt="" />
        </div>
        <div>
          <p>b</p>
          <img src="asset/CONTOH SUB 2B.png" alt="" />
        </div>
        <div>
          <p>c</p>
          <img src="asset/CONTOH SUB 2C.png" alt="" />
        </div>
        <div>
          <p>d</p>
          <img src="asset/CONTOH SUB 2D.png" alt="" />
        </div>
        <div>
          <p>e</p>
          <img src="asset/CONTOH SUB 2E.png" alt="" />
        </div>
      </div>
      </div>

      <div class="container mb-3">
      <div class="cottainer" style="margin-top: 50px;">
        <p id="v">2</p>
      </div>
      <div class="container mb-3" style=" margin-left:40px ;" >
        
        <div>
          <p>a</p>
          <img src="asset/CONTOH SUB 22A.png" alt="" />
        </div>
        <div>
          <p>b</p>
          <img src="asset/CONTOH SUB 22B.png" alt="" />
        </div>
        <div>
          <p>c</p>
          <img src="asset/CONTOH 22C.png" alt="" />
        </div>
        <div>
          <p>d</p>
          <img src="asset/CONTOH 22D.png" alt="" />
        </div>
        <div>
          <p>e</p>
          <img src="asset/CONTOH 22E.png" alt="" />
        </div>
      </div>
    </div>



            <button type="submit" class="btn btn-warning text-light">mulai</button>
        </div>
</form>

    </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>