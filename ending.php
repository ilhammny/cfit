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

$no1 = $_POST["no1"];
$no2 = $_POST["no2"];
$no3 = $_POST["no3"];
$no4 = $_POST["no4"];
$no5 = $_POST["no5"];
$no6 = $_POST["no6"];
$no7 = $_POST["no7"];
$no8 = $_POST["no8"];
$no9 = $_POST["no9"];
$no10 = $_POST["no10"];

$conn= @mysqli_connect("localhost", "root", "", "cfit");



if (isset( $_POST["submit"])) {
  // $namaa= htmlspecialchars($_POST["namaa"]);
  // $jabatann = htmlspecialchars($_POST["jabatan"]);
  // $pndidikan= htmlspecialchars ($_POST["pendidikann"]);
  // $tgl_tes = htmlspecialchars($_POST["tanggal_testa"]);
  // $tgl_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
  // $usia = htmlspecialchars($_POST["usia"]);
  // $kolom1= htmlspecialchars($_POST["kolom1"]);
  // $kolom2 = htmlspecialchars($_POST["kolom2"]);
  // $kolom3= htmlspecialchars ($_POST["kolom3"]);
  // $kolom4 = htmlspecialchars($_POST["kolom4"]);
  // $kolom5 = htmlspecialchars($_POST["kolom5"]);
  // $kolom6 = htmlspecialchars($_POST["kolom6"]);
  // $kolom7 = htmlspecialchars($_POST["kolom7"]);
  // $kolom8 = htmlspecialchars($_POST["kolom8"]);
  // $kolom9 = htmlspecialchars($_POST["kolom9"]);
  // $kolom10 = htmlspecialchars($_POST["kolom10"]);
  // $kolom11 = htmlspecialchars($_POST["kolom11"]);
  // $kolom12 = htmlspecialchars($_POST["kolom12"]);
  // $kolom13 = htmlspecialchars($_POST["kolom13"]);
  // $kol1 = $_POST["kol1"];
  // $kol2 = $_POST["kol2"];
  // $kol3 =  $_POST["kol3"];
  // $kol4 = $_POST["kol4"];
  // $kol5 = $_POST["kol5"];
  // $kol6 = $_POST["kol6"];
  // $kol7 = $_POST["kol7"];
  // $kol8 = $_POST["kol8"];
  // $kol9 = $_POST["kol9"];
  // $kol10 = $_POST["kol10"];
  // $kol11 = $_POST["kol11"];
  // $kol12 = $_POST["kol12"];
  // $kol13 = $_POST["kol13"];
  // $kol14 = $_POST["kol14"];
  // $nomor1= $_POST["nomor1"];
  // $nomor2 = $_POST["nomor2"];
  // $nomor3= $_POST["nomor3"];
  // $nomor4 = $_POST["nomor4"];
  // $nomor5 = $_POST["nomor5"];
  // $nomor6 = $_POST["nomor6"];
  // $nomor7 = $_POST["nomor7"];
  // $nomor8 = $_POST["nomor8"];
  // $nomor9 = $_POST["nomor9"];
  // $nomor10 = $_POST["nomor10"];
  // $nomor11 = $_POST["nomor11"];
  // $nomor12 = $_POST["nomor12"];
  // $nomor13 = $_POST["nomor13"];
  // $no1 = htmlspecialchars($_POST["no1"]);
  // $no2 = htmlspecialchars($_POST["no2"]);
  // $no3 = htmlspecialchars ($_POST["no3"]);
  // $no4 = htmlspecialchars($_POST["no4"]);
  // $no5 = htmlspecialchars($_POST["no5"]);
  // $no6 = htmlspecialchars($_POST["no6"]);
  // $no7 = htmlspecialchars($_POST["no7"]);
  // $no8 = htmlspecialchars($_POST["no8"]);
  // $no9 = htmlspecialchars($_POST["no9"]);
  // $no10 = htmlspecialchars($_POST["no10"]);
  
  
  
  $queri ="INSERT INTO peserta VALUES('', '$nama', '$jabatan','$pndidikan', '$tgl','$tgl_lahir','$usia')";
  $query ="INSERT INTO sub1 VALUES('', '$kolom1', '$kolom2','$kolom3', '$kolom4','$kolom5','$kolom6','$kolom7','$kolom8','$kolom9','$kolom10', '$kolom11', '$kolom12', '$kolom13')";

  $queryy ="INSERT INTO sub2 VALUES('', '$kol1', '$kol2','$kol3', '$kol4','$kol5','$kol6','$kol7','$kol8','$kol9','$kol10', '$kol11', '$kol12', '$kol13' ,'$kol14')";

  $querii ="INSERT INTO
	sub3
SET
	ID = '',
	nomor1 = '$nomor1',
	nomor2 = '$nomor2',
	nomor3 = '$nomor3',
	nomor4 = '$nomor4',
	nomor5 = '$nomor5',
	nomor6 = '$nomor6',
	nomor7 = '$nomor7',
	nomor8 = '$nomor8',
	nomor9 = '$nomor9',
	nomor10 = '$nomor10',
	nomor11 = '$nomor11',
	nomor12 = '$nomor12',
	nomor13 = '$nomor13'

	
	
;";
  
  $queryyyy ="INSERT INTO sub4 VALUES('', '$no1', '$no2','$no3', '$no4','$no5','$no6','$no7','$no8','$no9','$no10')";
  
  mysqli_query($conn, $queri);
  mysqli_query($conn, $query);
  mysqli_query($conn, $queryy);
  mysqli_query($conn, $querii);
  mysqli_query($conn, $queryyyy);

 return mysqli_affected_rows($conn);

  };
  // if ($_POST > 0) {
  //   echo "<script>alert('data tes anda telah direkam');
  //   </script>";
  // }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>terima kasih</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>

  <body>
  <form action="" method="post">
  <input type="hidden" value="<?= $nama ?>" name="namaa">
  <input type="hidden" value="<?= $jabatan ?>" name="jabatan">
  <input type="hidden" value="<?= $pndidikan ?>" name="pendidikann">
  <input type="hidden" value="<?= $tgl ?>" name="tanggal_testa">
  <input type="hidden" value="<?= $tgl_lahir ?>" name="tanggal_lahir">
  <input type="hidden" value="<?= $usia ?>" name="usia">

  <input type="hidden" value="<?= $kolom1 ?>" name="kolom1">
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
  <input type="hidden" value="<?= $kolom12 ?>" name="kolom12">
  <input type="hidden" value="<?= $kolom13 ?>" name="kolom13">

  <input type="hidden" value="<?= $kol1 ?>" name="kol1">
  <input type="hidden" value="<?= $kol2 ?>" name="kol2">
  <input type="hidden" value="<?= $kol3 ?>" name="kol3">
  <input type="hidden" value="<?= $kol4 ?>" name="kol4">
  <input type="hidden" value="<?= $kol5 ?>" name="kol5">
  <input type="hidden" value="<?= $kol6 ?>" name="kol6">
  <input type="hidden" value="<?= $kol7 ?>" name="kol7">
  <input type="hidden" value="<?= $kol8 ?>" name="kol8">
  <input type="hidden" value="<?= $kol9 ?>" name="kol9">
  <input type="hidden" value="<?= $kol10 ?>" name="kol10">
  <input type="hidden" value="<?= $kol11 ?>" name="kol11">
  <input type="hidden" value="<?= $kol12 ?>" name="kol12">
  <input type="hidden" value="<?= $kol13 ?>" name="kol13">
  <input type="hidden" value="<?= $kol14 ?>" name="kol14">

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
  <input type="hidden" value="<?= $nomor12 ?>" name="nomor12">
  <input type="hidden" value="<?= $nomor13 ?>" name="nomor13">

  <input type="hidden" value="<?= $no1 ?>" name="no1">
  <input type="hidden" value="<?= $no2 ?>" name="no2">
  <input type="hidden" value="<?= $no3 ?>" name="no3">
  <input type="hidden" value="<?= $no4 ?>" name="no4">
  <input type="hidden" value="<?= $no5 ?>" name="no5">
  <input type="hidden" value="<?= $no6 ?>" name="no6">
  <input type="hidden" value="<?= $no7 ?>" name="no7">
  <input type="hidden" value="<?= $no8 ?>" name="no8">
  <input type="hidden" value="<?= $no9 ?>" name="no9">
  <input type="hidden" value="<?= $no10 ?>" name="no10">

    <div class="container pt-3">
      <div class="card border-top border-warning">
        <div class="card-body">
          <h5 class="card-title">Terima Kasih telah mengisi Tes</h5>

          <p class="card-text">Kirim Semua Jawabann Anda</p>
          <button name="submit" type="submit" class="btn btn-warning text-light" style="width: 100%">Kirim</button>
        </div>
      </div>
    </div></form>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
