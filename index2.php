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
$kolom2 = $_POST["kolom2"];


// if (isset("submit")) {
//   $chk = $_POST["kol1"]
//   foreach ($chk as $key => $value) {
//     $value." , "
//   }
// }


// $conn= mysqli_connect("localhost", "root", "", "cfit");

// if (isset( $_POST["submit"])) {
//   $kol1= htmlspecialchars($_POST["kol1"]);
//   $kol2 = htmlspecialchars($_POST["kol2"]);
//   $kol3= htmlspecialchars ($_POST["kol3"]);
//   $kol4 = htmlspecialchars($_POST["kol4"]);
//   $kol5 = htmlspecialchars($_POST["kol5"]);
//   $kol6 = htmlspecialchars($_POST["kol6"]);
//   $kol7 = htmlspecialchars($_POST["kol7"]);
//   $kol8 = htmlspecialchars($_POST["kol8"]);
//   $kol9=htmlspecialchars($_POST["kol9"]);
//   $kol10 = htmlspecialchars($_POST["kol10"]);
//   $kol11 = htmlspecialchars($_POST["kol11"]);
//   $kol12 = htmlspecialchars($_POST["kol12"]);
//   $kol13 = htmlspecialchars($_POST["kol13"]);
//   $kol14 = htmlspecialchars($_POST["kol14"]);
  
  

//   $query ="INSERT INTO sub2 VALUES('', '$kol1', '$kol2','$kol3', '$kol4','$kol5'
//   ,'$kol6','$kol7','$kol8','$kol9'
//   ,'$kol10', '$kol11', '$kol12', '$kol13' ,'$kol14')";
  
//   mysqli_query($conn, $query);
//   };
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CFIT Test Sub 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <style>
    .container {
      display: flex;
      flex-wrap: wrap;
      flex-direction: row;
      user-select: none;
      text-align: center;
    }

    input[type="checkbox"] {
      cursor: pointer;
    }

    img {
      width: 100px;
      height: 100px;
      justify-content: space-beetween;
    }

    p {
      margin-left: 25px;
    }

    #il {
      margin-top: 80px;
      font-size: 20px;
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

      <div class="card-body border-top" style="overflow: scroll;">
        <div class="timer ">
          <h2 id="countdown"></h2>
        </div>
        <h5 class="card-title text-center p-3">CFIT Test Sub 2</h5>
        <form action="instruksi3.php" id="form2" method="post" enctype="multipart/form-data" name="form1">
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
          <div class="container mb-3" style="margin-top: 20px;">

            <p id="il">1</p>

            <div class="container" style="gap: 10px;">
              <div>
                <p>a</p>
                <img src="asset/1A.jpg" alt="" />
              </div>
              <div>
                <p>b</p>
                <img src="asset/1B.jpg" alt="" />
              </div>
              <div>
                <p>c</p>
                <img src="asset/1C.jpg" alt="" />
              </div>
              <div>
                <p>d</p>
                <img src="asset/1D.jpg" alt="" />
              </div>
              <div>
                <p>e</p>
                <img src="asset/1E.jpg" alt="" />
              </div>
            </div>

            <div class="container" style="margin-right: 100px;">
              <div class="container" style="margin-top: 80px;">
                <b>Jawaban Anda<b><br>
                    <input type="checkbox" id="a" name="kol1[]" class="kol1" value="A" onclick="return limitFunc();">
                    <label for="a"> A</label>
                    <input type="checkbox" id="a1" name="kol1[]" class="kol1" value="B" onclick="return limitFunc();">
                    <label for="a1"> B</label>
                    <input type="checkbox" id="a2" name="kol1[]" class="kol1" value="C" onclick="return limitFunc();">
                    <label for="a2">C</label>
                    <input type="checkbox" id="a3" name="kol1[]" class="kol1" value="D" onclick="return limitFunc();">
                    <label for="a3">D</label>
                    <input type="checkbox" id="a4" name="kol1[]" class="kol1" value="E" onclick="return limitFunc();">
                    <label for="a4">E</label>
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <div>
              <p id="il">2</p>
            </div>
            <div class="container" style="gap: 10px;">
              <div>
                <p>a</p>
                <img src="asset/2A-1.jpg" alt="" />
              </div>
              <div>
                <p>b</p>
                <img src="asset/2B-1.jpg" alt="" />
              </div>
              <div>
                <p>c</p>
                <img src="asset/2C-1.jpg" alt="" />
              </div>
              <div>
                <p>d</p>
                <img src="asset/2D-1.jpg" alt="" />
              </div>
              <div>
                <p>e</p>
                <img src="asset/2E-1.jpg" alt="" />
              </div>
            </div>
            <div class="container" style="margin-right: 100px;">
              <div class="container" style="margin-top: 80px;">
                <b>Jawaban Anda<b><br>
                    <input type="checkbox" id="b" name="kol2[]" class="kol2" onclick="return limitFunct();" value="A">
                    <label for="b"> A</label>
                    <input type="checkbox" id="b1" name="kol2[]" class="kol2" onclick="return limitFunct();" value="B">
                    <label for="b1"> B</label>
                    <input type="checkbox" id="b2" name="kol2[]" class="kol2" onclick="return limitFunct();" value="C">
                    <label for="b2">C</label>
                    <input type="checkbox" id="b3" name="kol2[]" class="kol2" onclick="return limitFunct();" value="D">
                    <label for="b3">D</label>
                    <input type="checkbox" id="b4" name="kol2[]" class="kol2" onclick="return limitFunct();" value="E">
                    <label for="b4">E</label>
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <div>
              <p id="il">3</p>
            </div>
            <div class="container" style="gap: 10px;">
              <div>
                <p>a</p>
                <img src="asset/3A-1.jpg" alt="" />
              </div>
              <div>
                <p>b</p>
                <img src="asset/3B-1.jpg" alt="" />
              </div>
              <div>
                <p>c</p>
                <img src="asset/3C-1.jpg" alt="" />
              </div>
              <div>
                <p>d</p>
                <img src="asset/3D-1.jpg" alt="" />
              </div>
              <div>
                <p>e</p>
                <img src="asset/3E-1.jpg" alt="" />
              </div>
            </div>
            <div class="container" style="margin-right: 100px;">
              <div class="container" style="margin-top: 80px;">
                <b>Jawaban Anda<b> <br>
                    <input type="checkbox" id="c" class="kol3" name="kol3[]" onclick="return limitFuncti();" value="A">
                    <label for="c"> A</label>
                    <input type="checkbox" id="c1" class="kol3" name="kol3[]" onclick="return limitFuncti();" value="B">
                    <label for="c1"> B</label>
                    <input type="checkbox" id="c2" class="kol3" name="kol3[]" onclick="return limitFuncti();" value="C">
                    <label for="c2">C</label>
                    <input type="checkbox" id="c3" class="kol3" name="kol3[]" onclick="return limitFuncti();" value="D">
                    <label for="c3">D</label>
                    <input type="checkbox" id="c4" class="kol3" name="kol3[]" onclick="return limitFuncti();" value="E">
                    <label for="c4">E</label>
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <div>
              <p id="il">4</p>
            </div>
            <div class="container" style="gap: 10px;">
              <div>
                <p>a</p>
                <img src="asset/4A-1.jpg" alt="" />
              </div>
              <div>
                <p>b</p>
                <img src="asset/4B-1.jpg" alt="" />
              </div>
              <div>
                <p>c</p>
                <img src="asset/4C-1.jpg" alt="" />
              </div>
              <div>
                <p>d</p>
                <img src="asset/4D-1.jpg" alt="" />
              </div>
              <div>
                <p>e</p>
                <img src="asset/4E-1.jpg" alt="" />
              </div>
            </div>
            <div class="container" style="margin-right: 100px;">
              <div class="container" style="margin-top: 80px;">
                <b>Jawaban Anda<b> <br>
                    <input type="checkbox" id="d" class="kol4" name="kol4[]" onclick="return limitFunctio();"  value="A">
                    <label for="d"> A</label>
                    <input type="checkbox" id="d1" class="kol4" name="kol4[]" onclick="return limitFunctio();"  value="B">
                    <label for="d1"> B</label>
                    <input type="checkbox" id="d2" class="kol4" name="kol4[]" onclick="return limitFunctio();"  value="C">
                    <label for="d2">C</label>
                    <input type="checkbox" id="d3" class="kol4" name="kol4[]" onclick="return limitFunctio();"  value="D">
                    <label for="d3">D</label>
                    <input type="checkbox" id="d4" class="kol4" name="kol4[]" onclick="return limitFunctio();"  value="E">
                    <label for="d4">E</label>
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <div>
              <p id="il">5</p>
            </div>
            <div class="container" style="gap: 10px;">
              <div>
                <p>a</p>
                <img src="asset/5A-1.jpg" alt="" />
              </div>
              <div>
                <p>b</p>
                <img src="asset/5B-1.jpg" alt="" />
              </div>
              <div>
                <p>c</p>
                <img src="asset/5C-1.jpg" alt="" />
              </div>
              <div>
                <p>d</p>
                <img src="asset/5D-1.jpg" alt="" />
              </div>
              <div>
                <p>e</p>
                <img src="asset/5E-1.jpg" alt="" />
              </div>
            </div>
            <div class="container" style="margin-right: 100px;">
              <div class="container" style="margin-top: 80px;">
                <b>Jawaban Anda<b> <br>
                    <input type="checkbox" id="e" name="kol5[]" class="kol5" onclick="return limitFunction();" value="A">
                    <label for="e"> A</label>
                    <input type="checkbox" id="e1" name="kol5[]" class="kol5" onclick="return limitFunction();" value="B">
                    <label for="e1"> B</label>
                    <input type="checkbox" id="e2" name="kol5[]" class="kol5" onclick="return limitFunction();" value="C">
                    <label for="e2">C</label>
                    <input type="checkbox" id="e3" name="kol5[]" class="kol5" onclick="return limitFunction();" value="D">
                    <label for="e3">D</label>
                    <input type="checkbox" id="e4" name="kol5[]" class="kol5" onclick="return limitFunction();" value="E">
                    <label for="e4">E</label>
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <div>
              <p id="il">6</p>
            </div>
            <div class="container" style="gap: 10px;">
              <div>
                <p>a</p>
                <img src="asset/6A-1.jpg" alt="" />
              </div>
              <div>
                <p>b</p>
                <img src="asset/6B-1.jpg" alt="" />
              </div>
              <div>
                <p>c</p>
                <img src="asset/6C-1.jpg" alt="" />
              </div>
              <div>
                <p>d</p>
                <img src="asset/6D-1.jpg" alt="" />
              </div>
              <div>
                <p>e</p>
                <img src="asset/6E-1.jpg" alt="" />
              </div>
            </div>
            <div class="container" style="margin-right: 100px;">
              <div class="container" style="margin-top: 80px;">
                <b>Jawaban Anda<b> <br>
                    <input type="checkbox" id="f" class="kol6" name="kol6[]" onclick="return limitFunctione();" value="A">
                    <label for="f"> A</label>
                    <input type="checkbox" id="f1" class="kol6" name="kol6[]" onclick="return limitFunctione();" value="B">
                    <label for="f1"> B</label>
                    <input type="checkbox" id="f2" class="kol6" name="kol6[]" onclick="return limitFunctione();" value="C">
                    <label for="f2">C</label>
                    <input type="checkbox" id="f3" class="kol6" name="kol6[]" onclick="return limitFunctione();" value="D">
                    <label for="f3">D</label>
                    <input type="checkbox" id="f4" class="kol6" name="kol6[]" onclick="return limitFunctione();" value="E">
                    <label for="f4">E</label>
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <div>
              <p id="il">7</p>
            </div>
            <div class="container" style="gap: 10px;">
              <div>
                <p>a</p>
                <img src="asset/7A-1.jpg" alt="" />
              </div>
              <div>
                <p>b</p>
                <img src="asset/7B-1.jpg" alt="" />
              </div>
              <div>
                <p>c</p>
                <img src="asset/7C-1.jpg" alt="" />
              </div>
              <div>
                <p>d</p>
                <img src="asset/7D-1.jpg" alt="" />
              </div>
              <div>
                <p>e</p>
                <img src="asset/7E-1.jpg" alt="" />
              </div>
            </div>
            <div class="container" style="margin-right: 100px;">
              <div class="container" style="margin-top: 80px;">
                <b>Jawaban Anda<b> <br>
                    <input type="checkbox" id="g" class="kol7" onclick="return limitFunctioner();" name="kol7[]" value="A">
                    <label for="g"> A</label>
                    <input type="checkbox" id="g1" class="kol7" onclick="return limitFunctioner();" name="kol7[]" value="B">
                    <label for="g1"> B</label>
                    <input type="checkbox" id="g2" class="kol7" onclick="return limitFunctioner();" name="kol7[]" value="C">
                    <label for="g2">C</label>
                    <input type="checkbox" id="g3" class="kol7" onclick="return limitFunctioner();" name="kol7[]" value="D">
                    <label for="g3">D</label>
                    <input type="checkbox" id="g4" class="kol7" onclick="return limitFunctioner();" name="kol7[]" value="E">
                    <label for="g4">E</label>
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <div>
              <p id="il">8</p>
            </div>
            <div class="container" style="gap: 10px;">
              <div>
                <p>a</p>
                <img src="asset/8A-1.jpg" alt="" />
              </div>
              <div>
                <p>b</p>
                <img src="asset/8B-1.jpg" alt="" />
              </div>
              <div>
                <p>c</p>
                <img src="asset/8C-1.jpg" alt="" />
              </div>
              <div>
                <p>d</p>
                <img src="asset/8D-1.jpg" alt="" />
              </div>
              <div>
                <p>e</p>
                <img src="asset/8E-1.jpg" alt="" />
              </div>
            </div>
            <div class="container" style="margin-right: 100px;">
              <div class="container" style="margin-top: 80px;">
                <b>Jawaban Anda<b><br>
                    <input type="checkbox" id="h" class="kol8" onclick="return limitF();" name="kol8[]" value="A">
                    <label for="h"> A</label>
                    <input type="checkbox" id="h1" class="kol8" onclick="return limitF();" name="kol8[]" value="B">
                    <label for="h1"> B</label>
                    <input type="checkbox" id="h2" class="kol8" onclick="return limitF();" name="kol8[]" value="C">
                    <label for="h2">C</label>
                    <input type="checkbox" id="h3" class="kol8" onclick="return limitF();" name="kol8[]" value="D">
                    <label for="h3">D</label>
                    <input type="checkbox" id="h4" class="kol8" onclick="return limitF();" name="kol8[]" value="E">
                    <label for="h4">E</label>
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <div>
              <p id="il">9</p>
            </div>
            <div class="container" style="gap: 10px;">
              <div>
                <p>a</p>
                <img src="asset/9A-1.jpg" alt="" />
              </div>
              <div>
                <p>b</p>
                <img src="asset/9B-1.jpg" alt="" />
              </div>
              <div>
                <p>c</p>
                <img src="asset/9C-1.jpg" alt="" />
              </div>
              <div>
                <p>d</p>
                <img src="asset/9D-1.jpg" alt="" />
              </div>
              <div>
                <p>e</p>
                <img src="asset/9E-1.jpg" alt="" />
              </div>
            </div>
            <div class="container" style="margin-right: 100px;">
              <div class="container" style="margin-top: 80px;">
                <b>Jawaban Anda<b> <br>
                    <input type="checkbox" id="i" class="kol9" onclick="return  limitFunctir();" name="kol9[]" value="A">
                    <label for="i"> A</label>
                    <input type="checkbox" id="i1" class="kol9" onclick="return  limitFunctir();" name="kol9[]" value="B">
                    <label for="i1"> B</label>
                    <input type="checkbox" id="i2" class="kol9" onclick="return  limitFunctir();" name="kol9[]" value="C">
                    <label for="i2">C</label>
                    <input type="checkbox" id="i3" class="kol9" onclick="return  limitFunctir();" name="kol9[]" value="D">
                    <label for="i3">D</label>
                    <input type="checkbox" id="i4" class="kol9" onclick="return  limitFunctir();" name="kol9[]" value="E">
                    <label for="i4">E</label>
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <div>
              <p id="il">10</p>
            </div>
            <div class="container" style="gap: 10px;">
              <div>
                <p>a</p>
                <img src="asset/10A-1.jpg" alt="" />
              </div>
              <div>
                <p>b</p>
                <img src="asset/10B-1.jpg" alt="" />
              </div>
              <div>
                <p>c</p>
                <img src="asset/10C-1.jpg" alt="" />
              </div>
              <div>
                <p>d</p>
                <img src="asset/10D-1.jpg" alt="" />
              </div>
              <div>
                <p>e</p>
                <img src="asset/10E-1.jpg" alt="" />
              </div>
            </div>
            <div class="container" style="margin-right: 100px;">
              <div class="container" style="margin-top: 80px;">
                <b>Jawaban Anda<b> <br>
                    <input type="checkbox" id="j" class="kol10" onclick="return  limit();" name="kol10[]" value="A">
                    <label for="j"> A</label>
                    <input type="checkbox" id="j1" class="kol10" onclick="return  limit();" name="kol10[]" value="B">
                    <label for="j1"> B</label>
                    <input type="checkbox" id="j2" class="kol10" onclick="return  limit();" name="kol10[]" value="C">
                    <label for="j2">C</label>
                    <input type="checkbox" id="j3" class="kol10" onclick="return  limit();" name="kol10[]" value="D">
                    <label for="j3">D</label>
                    <input type="checkbox" id="j4" class="kol10" onclick="return  limit();" name="kol10[]" value="E">
                    <label for="j4">E</label>
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <div>
              <p id="il">11</p>
            </div>
            <div class="container" style="gap: 10px;">
              <div>
                <p>a</p>
                <img src="asset/11A-1.jpg" alt="" />
              </div>
              <div>
                <p>b</p>
                <img src="asset/11B-1.jpg" alt="" />
              </div>
              <div>
                <p>c</p>
                <img src="asset/11C-1.jpg" alt="" />
              </div>
              <div>
                <p>d</p>
                <img src="asset/11D-1.jpg" alt="" />
              </div>
              <div>
                <p>e</p>
                <img src="asset/11E-1.jpg" alt="" />
              </div>
            </div>
            <div class="container" style="margin-right: 100px;">
              <div class="container" style="margin-top: 80px;">
                <b>Jawaban Anda<b> <br>
                    <input type="checkbox" id="k" class="kol11" onclick="return  limitt();" name="kol11[]" value="A">
                    <label for="k"> A</label>
                    <input type="checkbox" id="k1" class="kol11" onclick="return  limitt();" name="kol11[]" value="B">
                    <label for="k1"> B</label>
                    <input type="checkbox" id="k2" class="kol11" onclick="return  limitt();" name="kol11[]" value="C">
                    <label for="k2">C</label>
                    <input type="checkbox" id="k3" class="kol11" onclick="return  limitt();" name="kol11[]" value="D">
                    <label for="k3">D</label>
                    <input type="checkbox" id="k4" class="kol11" onclick="return  limitt();" name="kol11[]" value="E">
                    <label for="k4">E</label>
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <div>
              <p id="il">12</p>
            </div>
            <div class="container" style="gap: 10px;">
              <div>
                <p>a</p>
                <img src="asset/12A-1.jpg" alt="" />
              </div>
              <div>
                <p>b</p>
                <img src="asset/12B-1.jpg" alt="" />
              </div>
              <div>
                <p>c</p>
                <img src="asset/12C-1.jpg" alt="" />
              </div>
              <div>
                <p>d</p>
                <img src="asset/12D-1.jpg" alt="" />
              </div>
              <div>
                <p>e</p>
                <img src="asset/12E-1.jpg" alt="" />
              </div>
            </div>
            <div class="container" style="margin-right: 100px;">
              <div class="container" style="margin-top: 80px;">
                <b>Jawaban Anda<b> <br>
                    <input type="checkbox" id="l" class="kol12" onclick="return  limitFunctitin();" name="kol12[]" value="A">
                    <label for="l"> A</label>
                    <input type="checkbox" id="l1" class="kol12" onclick="return  limitFunctitin();" name="kol12[]" value="B">
                    <label for="l1"> B</label>
                    <input type="checkbox" id="l2" class="kol12" onclick="return  limitFunctitin();" name="kol12[]" value="C">
                    <label for="l2">C</label>
                    <input type="checkbox" id="l3" class="kol12" onclick="return  limitFunctitin();" name="kol12[]" value="D">
                    <label for="l3">D</label>
                    <input type="checkbox" id="l4" class="kol12" onclick="return  limitFunctitin();" name="kol12[]" value="E">
                    <label for="l4">E</label>
              </div>
            </div>
          </div>
          <div class="container mb-3">
            <div>
              <p id="il">13</p>
            </div>
            <div class="container" style="gap: 10px;">
              <div>
                <p>a</p>
                <img src="asset/13A-1.jpg" alt="" />
              </div>
              <div>
                <p>b</p>
                <img src="asset/13B-1.jpg" alt="" />
              </div>
              <div>
                <p>c</p>
                <img src="asset/13C-1.jpg" alt="" />
              </div>
              <div>
                <p>d</p>
                <img src="asset/13D-1.jpg" alt="" />
              </div>
              <div>
                <p>e</p>
                <img src="asset/13E-1.jpg" alt="" />
              </div>
            </div>
            <div class="container" style="margin-right: 100px;">
              <div class="container" style="margin-top: 80px;">
                <b>Jawaban Anda<b> <br>
                    <input type="checkbox" id="m" class="kol13" onclick="return  limitFunctib();" name="kol13[]" value="A">
                    <label for="m"> A</label>
                    <input type="checkbox" id="m1" class="kol13" onclick="return  limitFunctib();" name="kol13[]" value="B">
                    <label for="m1"> B</label>
                    <input type="checkbox" id="m2" class="kol13" onclick="return  limitFunctib();" name="kol13[]" value="C">
                    <label for="m2">C</label>
                    <input type="checkbox" id="m3" class="kol13" onclick="return  limitFunctib();" name="kol13[]" value="D">
                    <label for="m3">D</label>
                    <input type="checkbox" id="m4" class="kol13" onclick="return  limitFunctib();" name="kol13[]" value="E">
                    <label for="m4">E</label>
              </div>
            </div>
          </div>
          <div class="container mb-3">

            <div class="container" style="gap: 10px;">
              <p id="il">14</p>
              <div>
                <p>a</p>
                <img src="asset/14A.jpg" alt="" />
              </div>
              <div>
                <p>b</p>
                <img src="asset/14B.jpg" alt="" />
              </div>
              <div>
                <p>c</p>
                <img src="asset/14C.jpg" alt="" />
              </div>
              <div>
                <p>d</p>
                <img src="asset/14D.jpg" alt="" />
              </div>
              <div>
                <p>e</p>
                <img src="asset/14E.jpg" alt="" />
              </div>
            </div>
            <div class="container" style="margin-right: 100px;">
              <div class="container" style="margin-top: 80px;">
                <b>Jawaban Anda<b> <br>
                    <input type="checkbox" id="n" class="kol14" onclick="return  limitFunctin();" name="kol14[]" value="A">
                    <label for="n"> A</label>
                    <input type="checkbox" id="n1" class="kol14" onclick="return  limitFunctin();" name="kol14[]" value="B">
                    <label for="n1"> B</label>
                    <input type="checkbox" id="n2" class="kol14" onclick="return  limitFunctin();" name="kol14[]" value="C">
                    <label for="n2">C</label>
                    <input type="checkbox" id="n3" class="kol14" onclick="return  limitFunctin();" name="kol14[]" value="D">
                    <label for="n3">D</label>
                    <input type="checkbox" id="n4" class="kol14" onclick="return  limitFunctin();" name="kol14[]" value="E">
                    <label for="n4">E</label>
              </div>
            </div>
          </div>

          <button name="btnSubmit" type="submit" class="btn btn-dark text-light" style="width: 100%"
          onclick="myFunction()" ;>
            Submit
          </button>
      </div>
  </div>
  </div>

  <script src="script.js">
  <script src="js2.js">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>