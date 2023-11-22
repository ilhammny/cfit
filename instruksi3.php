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


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instruksi sesi 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

`   <style>
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
    width: 100px;
    height: 100px;
  }
  p{
    margin-left:25px;
  }
  #v{
    margin-right: 20px;
  }
</style>        
</head>

<body>
  <form action="index3.php" method="post">
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

  <input type="hidden"value="<?= $kol1[0] ?><?= $kol1[1] ?>" name="kol1">
  <input type="hidden" value="<?= $kol2[0] ?><?= $kol2[1] ?>" name="kol2">
  <input type="hidden" value="<?= $kol3[0] ?><?= $kol3[1] ?>" name="kol3">
  <input type="hidden" value="<?= $kol4[0] ?><?= $kol4[1] ?>" name="kol4">
  <input type="hidden" value="<?= $kol5[0] ?><?= $kol5[1] ?>" name="kol5">
  <input type="hidden" value="<?= $kol6[0] ?><?= $kol6[1] ?>" name="kol6">
  <input type="hidden" value="<?= $kol7[0] ?><?= $kol7[1] ?>" name="kol7">
  <input type="hidden" value="<?= $kol8[0] ?><?= $kol8[1] ?>" name="kol8">
  <input type="hidden" value="<?= $kol9[0] ?><?= $kol9[1] ?>" name="kol9">
  <input type="hidden" value="<?= $kol10[0] ?><?= $kol10[1] ?> " name="kol10">
  <input type="hidden" value="<?= $kol11[0] ?><?= $kol11[1] ?> " name="kol11">
  <input type="hidden" value="<?= $kol12[0] ?><?= $kol12[1] ?>" name="kol12">
  <input type="hidden" value="<?= $kol13[0]  ?><?= $kol13[1] ?> " name="kol13">
  <input type="hidden" value="<?= $kol14[0]  ?><?= $kol14[1] ?> " name="kol14">

 
    <div class="container">
        <div class="card p-4 m-3">
            
            <h2>Berikut adalah petunjuk mengenai CFIT Test sub ketiga</h2>
            <h3>Petunjuk</h3>

            <p>Instruksi sesi 3
                Di bagian sebelah kiri, anda akan menemukan sebuah kotak besar, yang didalamnya terdapat kotak-kotak
                kecil bergambar. Anggaplah ini adalah gambar sebuah sapu tangan, di mana kotak-kotaktersebut memiliki
                pola tertentu. Perhatikan bahwa bagian sebelah kanan bawah masih kosong.Tugas anda adalah melengkapi
                bagian kosong tersebut dengan salah satu dari 5 pilihan jawaban disebelah kanan.


            </p>

            
            <h3>Contoh</h3>
      
      <div class="container mb-3" style="margin-top: 40px;">
        <p id="v">1</p>
        <div><img id="pm" src="asset/SOAL SUB 3.png" alt="" /></div>
      
      <div class="container" style="margin-left: 10px;">
        <div>
          <p>a</p>
          <img src="asset/SUB 31A.png" alt="" />
        </div>
        <div>
          <p>b</p>
          <img src="asset/SUB 31B.png" alt="" />
        </div>
        <div>
          <p>c</p>
          <img src="asset/SUB 31C.png" alt="" />
        </div>
        <div>
          <p>d</p>
          <img src="asset/SUB 31D.png" alt="" />
        </div>
        <div>
          <p>e</p>
          <img src="asset/SUB 31E.png" alt="" />
        </div>
        <div>
          <p>f</p>
          <img src="asset/SUB 31F.png" alt="" />
        </div>
      </div>
    </div>
      
      <div class="container" style="margin-top:40px ;">
        <p id="v">2</p>
        <div ><img id="pm" src="asset/SUB 32.png" alt="" /></div>
      
      <div class="container" style="margin-left: 10px;">
        <div>
          <p>a</p>
          <img src="asset/SUB 32A.png" alt="" />
        </div>
        <div>
          <p>b</p>
          <img src="asset/SUB 32B.png" alt="" />
        </div>
        <div>
          <p>c</p>
          <img src="asset/SUB 32C.png" alt="" />
        </div>
        <div>
          <p>d</p>
          <img src="asset/SUB 32D.png" alt="" />
        </div>
        <div>
          <p>e</p>
          <img src="asset/SUB 32E.png" alt="" />
        </div>
        <div>
          <p>f</p>
          <img src="asset/SUB 32F.png" alt="" />
        </div>
      </div>
    </div>

      <div class="container mb-3 " style="margin-top:40px ;">
        <p id="v">3</p>
        <div ><img id="pm" src="asset/SUB 33.png" alt="" /></div>
    
      <div class="container mb-3" style="margin-left: 10px;" >
        <div>
          <p>a</p>
          <img src="asset/SUB 33A.png" alt="" />
        </div>
        <div>
          <p>b</p>
          <img src="asset/SUB 33B.png" alt="" />
        </div>
        <div>
          <p>c</p>
          <img src="asset/SUB 33C.png" alt="" />
        </div>
        <div>
          <p>d</p>
          <img src="asset/SUB 33D.png" alt="" />
        </div>
        <div>
          <p>e</p>
          <img src="asset/SUB 33E.png" alt="" />
        </div>
        <div>
          <p>f</p>
          <img src="asset/SUB 33F.png" alt="" />
        </div>
      </div>
    </div>

            <button type="submit"  class="btn btn-warning text-light">mulai</button>
        </div>


    </div>
    </div>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>