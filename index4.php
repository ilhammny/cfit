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
// $conn= mysqli_connect("localhost", "root", "", "cfit");

// if (isset( $_POST["submit"])) {
//   $no1= htmlspecialchars($_POST["no1"]);
//   $no2 = htmlspecialchars($_POST["no2"]);
//   $no3= htmlspecialchars ($_POST["no3"]);
//   $no4 = htmlspecialchars($_POST["no4"]);
//   $no5 = htmlspecialchars($_POST["no5"]);
//   $no6 = htmlspecialchars($_POST["no6"]);
//   $no7 = htmlspecialchars($_POST["no7"]);
//   $no8 = htmlspecialchars($_POST["no8"]);
//   $no9=htmlspecialchars($_POST["no9"]);
//   $no10 = htmlspecialchars($_POST["no10"]);
  
  

//   $query ="INSERT INTO sub4 VALUES('', '$no1', '$no2','$no3', '$no4','$no5'
//   ,'$no6','$no7','$no8','$no9'
//   ,'$no10')";
// $query ="INSERT INTO sub2 VALUES('', '$no1', '$no2','$no3', '$no4','$no5'
//   ,'$no6','$no7','$no8','$no9'
//   ,'$no10')";
  
//   mysqli_query($conn, $query);
//   };
  
  ?>
  

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CFIT Sub 4</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <style>
    .container {
      display: flex;
      flex-wrap: nowrap;
      flex-direction: row;
    }

    img {
      width: 50px;
      height: 50px;
      justify-content: space-beetween;
    }

    #pm {
      width: 100px;
      height: 100px;
    }

    p {
      margin-left: 25px;
    }

    #mn {
      margin-left: 10px;
    }

    .timer {
      width: auto;
      height: auto;
      margin: 0;
      position: fixed;
    }

    input[type="radio"] {
      margin-left: 1em;
    }

    /* #mn > img{
      margin: 1em;
    } */

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
        <h5 class="card-title text-center p-3">CFIT Test Sub 4</h5>
        <form action="ending.php" id="form4" method="post" enctype="multipart/form-data">
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
  <input type="hidden" value="<?= $kol13 ?> " name="kol13">
  <input type="hidden" value="<?= $kol14 ?> " name="kol14">

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
          <div class="container mb-3">

            <div class="container" style="margin-top: 40px">
              1
              <div id="mn"><img id="pm" src="asset/1 (2).jpg" alt="" /></div>
            </div>
            <div class="container" style="margin-top: 50px;gap: 20px;">
              <div>
                <p>a</p>
                <img src="asset/1A (2).jpg" alt="" /><br>
                <input type="radio" name="no1" id="" value="A">
              </div>
              <div>
                <p>b</p>
                <img src="asset/1B (2).jpg" alt="" />
                <br>
                <input type="radio" name="no1" id="" value="B">
              </div>
              <div>
                <p>c</p>
                <img src="asset/1C (2).jpg" alt="" />
                <br>
                <input type="radio" name="no1" id="" value="C">
              </div>
              <div>
                <p>d</p>
                <img src="asset/1D (2).jpg" alt="" />
                <br>
                <input type="radio" name="no1" id="" value="D">
              </div>
              <div>
                <p>e</p>
                <img src="asset/1E (2).jpg" alt="" />
                <br>
                <input type="radio" name="no1" id="" value="E">
              </div>
            </div>
          </div>
          <div class="container mb-3">

            <div class="container" style="margin-top: 40px">
              2 <div id="mn"><img id="pm" src="asset/2 (2).jpg" alt="" /></div>
            </div>
            <div class="container" style="margin-top: 50px;gap: 20px;">
              <div>
                <p>a</p>
                <img src="asset/2A (2).jpg" alt="" />
                <br>
                <input type="radio" name="no2" id="" value="A">
              </div>
              <div>
                <p>b</p>
                <img src="asset/2B (2).jpg" alt="" />
                <br>
                <input type="radio" name="no2" id="" value="B">
              </div>
              <div>
                <p>c</p>
                <img src="asset/2C (2).jpg" alt="" />
                <br>
                <input type="radio" name="no2" id="" value="C">
              </div>
              <div>
                <p>d</p>
                <img src="asset/2D (2).jpg" alt="" />
                <br>
                <input type="radio" name="no2" id="" value="D">
              </div>
              <div>
                <p>e</p>
                <img src="asset/2E (2).jpg" alt="" />
                <br>
                <input type="radio" name="no2" id="" value="E">
              </div>
            </div>
          </div>
          <div class="container mb-3">

            <div class="container" style="margin-top: 40px">
              3<div id="mn"><img id="pm" src="asset/3 (2).jpg" alt="" /></div>
            </div>
            <div class="container" style="margin-top: 50px;gap: 20px;">
              <div>
                <p>a</p>
                <img src="asset/3A (2).jpg" alt="" />
                <br>
                <input type="radio" name="no3" id="" value="A">
              </div>
              <div>
                <p>b</p>
                <img src="asset/3B (2).jpg" alt="" /><br>
                <input type="radio" name="no3" id="" value="B">
              </div>
              <div>
                <p>c</p>
                <img src="asset/3C (2).jpg" alt="" />
                <br>
                <input type="radio" name="no3" id="" value="C">
              </div>
              <div>
                <p>d</p>
                <img src="asset/3D (2).jpg" alt="" />
                <br>
                <input type="radio" name="no3" id="" value="D">
              </div>
              <div>
                <p>e</p>
                <img src="asset/3E (2).jpg" alt="" />
                <br>
                <input type="radio" name="no3" id="" value="E">
              </div>
            </div>

          </div>
          <div class="container mb-3">

            <div class="container" style="margin-top: 40px">
              4<div id="mn"><img id="pm" src="asset/4 (2).jpg" alt="" /></div>
            </div>
            <div class="container" style="margin-top: 50px;gap: 20px;">
              <div>
                <p>a</p>
                <img src="asset/4A (2).jpg" alt="" /><br>
                <input type="radio" name="no4" id="" value="A">
              </div>
              <div>
                <p>b</p>
                <img src="asset/4B (2).jpg" alt="" /><br>
                <input type="radio" name="no4" id="" value="B">
              </div>
              <div>
                <p>c</p>
                <img src="asset/4C (2).jpg" alt="" /><br>
                <input type="radio" name="no4" id="" value="C">
              </div>
              <div>
                <p>d</p>
                <img src="asset/4D (2).jpg" alt="" />
                <br>
                <input type="radio" name="no4" id="" value="D">
              </div>
              <div>
                <p>e</p>
                <img src="asset/4E (2).jpg" alt="" />
                <br>
                <input type="radio" name="no4" id="" value="E">
              </div>
            </div>


          </div>
          <div class="container mb-3">

            <div class="container" style="margin-top: 40px">
              5<div id="mn"><img id="pm" src="asset/5 (2).jpg" alt="" /></div>
            </div>
            <div class="container" style="margin-top: 50px;gap: 20px;">
              <div>
                <p>a</p>
                <img src="asset/5A (2).jpg" alt="" />
                <br>
                <input type="radio" name="no5" id="" value="A">
              </div>
              <div>
                <p>b</p>
                <img src="asset/5B (2).jpg" alt="" />
                <br>
                <input type="radio" name="no5" id="" value="B">
              </div>
              <div>
                <p>c</p>
                <img src="asset/5C (2).jpg" alt="" /><br>
                <input type="radio" name="no5" id="" value="C">
              </div>
              <div>
                <p>d</p>
                <img src="asset/5D (2).jpg" alt="" />
                <br>
                <input type="radio" name="no5" id="" value="D">
              </div>
              <div>
                <p>e</p>
                <img src="asset/5E (2).jpg" alt="" />
                <br>
                <input type="radio" name="no5" id="" value="E">
              </div>
            </div>
          </div>

          <div class="container mb-3">

            <div class="container" style="margin-top: 40px">
              6<div id="mn"><img id="pm" src="asset/6 (2).jpg" alt="" /></div>
            </div>
            <div class="container" style="margin-top: 50px;gap: 20px;">
              <div>
                <p>a</p>
                <img src="asset/6A (2).jpg" alt="" />
                <br>
                <input type="radio" name="no6" id="" value="A">
              </div>
              <div>
                <p>b</p>
                <img src="asset/6B (2).jpg" alt="" />
                <br>
                <input type="radio" name="no6" id="" value="B">
              </div>
              <div>
                <p>c</p>
                <img src="asset/6C (2).jpg" alt="" />
                <br>
                <input type="radio" name="no6" id="" value="C">
              </div>
              <div>
                <p>d</p>
                <img src="asset/6D (2).jpg" alt="" />
                <br>
                <input type="radio" name="no6" id="" value="D">
              </div>
              <div>
                <p>e</p>
                <img src="asset/6E (2).jpg" alt="" />
                <br>
                <input type="radio" name="no6" id="" value="E">
              </div>
            </div>


          </div>
          <div class="container mb-3">

            <div class="container" style="margin-top: 40px">
              7<div id="mn"><img id="pm" src="asset/7 (2).jpg" alt="" /></div>
            </div>
            <div class="container" style="margin-top: 50px;gap: 20px;">
              <div>
                <p>a</p>
                <img src="asset/7A (2).jpg" alt="" />
                <br>
                <input type="radio" name="no7" id="" value="A">
              </div>
              <div>
                <p>b</p>
                <img src="asset/7B (2).jpg" alt="" />
                <br>
                <input type="radio" name="no7" id="" value="B">
              </div>
              <div>
                <p>c</p>
                <img src="asset/7C (2).jpg" alt="" />
                <br>
                <input type="radio" name="no7" id="" value="C">
              </div>
              <div>
                <p>d</p>
                <img src="asset/7D (2).jpg" alt="" />
                <br>
                <input type="radio" name="no7" id="" value="D">
              </div>
              <div>
                <p>e</p>
                <img src="asset/7E (2).jpg" alt="" />
                <br>
                <input type="radio" name="no7" id="" value="E">
              </div>
            </div>
          </div>
          <div class="container mb-3">

            <div class="container" style="margin-top: 40px">
              8<div id="mn"><img id="pm" src="asset/8 (2).jpg" alt="" /></div>
            </div>
            <div class="container" style="margin-top: 50px;gap: 20px;">
              <div>
                <p>a</p>
                <img src="asset/8A (2).jpg" alt="" /><br>
                <input type="radio" name="no8" id="" value="A">
              </div>
              <div>
                <p>b</p>
                <img src="asset/8B (2).jpg" alt="" /><br>
                <input type="radio" name="no8" id="" value="B">
              </div>
              <div>
                <p>c</p>
                <img src="asset/8C (2).jpg" alt="" /><br>
                <input type="radio" name="no8" id="" value="C">
              </div>
              <div>
                <p>d</p>
                <img src="asset/8D (2).jpg" alt="" />
                <br>
                <input type="radio" name="no8" id="" value="D">
              </div>
              <div>
                <p>e</p>
                <img src="asset/8E (2).jpg" alt="" />
                <br>
                <input type="radio" name="no8" id="" value="E">
              </div>
            </div>


          </div>

          <div class="container mb-3">

            <div class="container" style="margin-top: 40px">
              9<div id="mn"><img id="pm" src="asset/9 (2).jpg" alt="" /></div>
            </div>
            <div class="container" style="margin-top: 50px;gap: 20px;">
              <div>
                <p>a</p>
                <img src="asset/9A (2).jpg" alt="" />
                <br>
                <input type="radio" name="no9" id="" value="A">
              </div>
              <div>
                <p>b</p>
                <img src="asset/9B (2).jpg" alt="" />
                <br>
                <input type="radio" name="no9" id="" value="B">
              </div>
              <div>
                <p>c</p>
                <img src="asset/9C (2).jpg" alt="" />
                <br>
                <input type="radio" name="no9" id="" value="C">
              </div>
              <div>
                <p>d</p>
                <img src="asset/9D (2).jpg" alt="" />
                <br>
                <input type="radio" name="no9" id="" value="D">
              </div>
              <div>
                <p>e</p>
                <img src="asset/9E (2).jpg" alt="" />
                <br>
                <input type="radio" name="no9" id="" value="E">
              </div>
            </div>
          </div>
          <div class="container mb-3">

            <div class="container" style="margin-top: 40px">
              10<div id="mn"><img id="pm" src="asset/10 (2).jpg" alt="" /></div>
            </div>
            <div class="container" style="margin-top: 50px;gap: 20px;">
              <div>
                <p>a</p>
                <img src="asset/10A (2).jpg" alt="" /><br>
                <input type="radio" name="no10" id="" value="A">
              </div>
              <div>
                <p>b</p>
                <img src="asset/10B (2).jpg" alt="" /><br>
                <input type="radio" name="no10" id="" value="B">
              </div>
              <div>
                <p>c</p>
                <img src="asset/10C (2).jpg" alt="" />
                <br>
                <input type="radio" name="no10" id="" value="C">
              </div>
              <div>
                <p>d</p>
                <img src="asset/10D (2).jpg" alt="" /><br>
                <input type="radio" name="no10" id="" value="D">
              </div>
              <div>
                <p>e</p>
                <img src="asset/10E (2).jpg" alt="" />
                <br>
                <input type="radio" name="no10" id="" value="E">
              </div>
            </div>

          </div>

          <button name="btn-submit" type="submit" class="btn btn-warning text-light" style="width: 100%"
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
          alert("Waktu Habis")
          document.getElementById("form4").submit();
        }
      }, 1000)
    }
    const countdownDuration = 150;
    countdownTimer(countdownDuration, countdownElement);
    // setInterval(() => {
   
    // }, 181000);
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <!-- Sweet Alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>