<?php
$nama = $_POST['namaa'];
$jabatan = $_POST['jabatan'];
$pndidikan = $_POST['pendidikann'];
$tgl = $_POST['tanggal_testa'];
$tgl_lahir = $_POST['tanggal_lahir'];
$usia = $_POST['usia'];
// $conn= mysqli_connect("localhost", "root", "", "cfit");

// if (isset( $_POST["submit"])) {
//   $kolom1  = htmlspecialchars($_POST["kolom1"]);
//   $kolom2  = htmlspecialchars($_POST["kolom2"]);
//   $kolom3  = htmlspecialchars($_POST["kolom3"]);
//   $kolom4  = htmlspecialchars($_POST["kolom4"]);
//   $kolom5  = htmlspecialchars($_POST["kolom5"]);
//   $kolom6  = htmlspecialchars($_POST["kolom6"]);
//   $kolom7  = htmlspecialchars($_POST["kolom7"]);
//   $kolom8  = htmlspecialchars($_POST["kolom8"]);
//   $kolom9  = htmlspecialchars($_POST["kolom9"]);
//   $kolom10 = htmlspecialchars($_POST["kolom10"]);
//   $kolom11 = htmlspecialchars($_POST["kolom11"]);
//   $kolom12 = htmlspecialchars($_POST["kolom12"]);
//   $kolom13 = htmlspecialchars($_POST["kolom13"]);
  
  

//   $query ="INSERT INTO sub1 VALUES('', '$kolom1', '$kolom2','$kolom3', '$kolom4','$kolom5'
//   ,'$kolom6','$kolom7','$kolom8','$kolom9'
//   ,'$kolom10', '$kolom11', '$kolom12', '$kolom13')";
  
//   mysqli_query($conn, $query);
//   };
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CFIT Test Sub 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <style>
    .container {
      display: flex;
      flex-wrap: wrap;
      flex-direction: row;
      margin: 20px;
      gap: 10px;
      user-select: none;
    }


    img {
      width: 50px;
      height: 50px;
      justify-content: space-around;
    }

    #pm {
      width: 200px;

    }

    input[type="radio"] {
      margin-left: 1em;
      cursor: pointer;
    }
    .timer{
            position:fixed ;
            margin-left:30em;
          }

    #il {
      margin: 10px;
    }

    #a {
      margin-left: 15px;
    }
    p{
      margin-left:20px;
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
  <section class="d-flex justify-content-center">
    <div class="card-body border-top">
      <div class="timer text-dark">
        <h2 id="countdown"></h2>
      </div>
      <h5 class="card-title text-center p-3">CFIT Test Sub 1</h5>
      <form action="instruksi2.php" id="myForm" method="post" enctype="multipart/form-data">
      <input type="hidden"value="<?= $nama ?>" name="namaa">
      <input type="hidden" value="<?= $jabatan ?>" name="jabatan">
      <input type="hidden" value="<?= $pndidikan ?>" name="pendidikann">
      <input type="hidden" value="<?= $tgl ?>" name="tanggal_testa">
      <input type="hidden" value="<?= $tgl_lahir ?>" name="tanggal_lahir">
      <input type="hidden" value="<?= $usia ?>" name="usia">
        <div>


          <div class="container">
            <div id="il">1</div>
            <div><img id="pm" src="asset/Screenshot 2023-10-18 110739.png" alt="" /></div>

          </div>
          <div class="container">
            <div>
              <p>a</p>
              <img src="asset/1.1.a.png" alt="" /> <br>
              <input  type="radio" value="A" name="kolom1">
            </div>
            <div>
              <p>b</p>
              <img src="asset/1.1.b w.png" alt="" /> <br>
              <input  type="radio" value="B" name="kolom1">

            </div>
            <div>
              <p>c</p>
              <img src="asset/1.1.c.png" alt="" /> <br>
              <input  type="radio" value="C" name="kolom1">

            </div>
            <div>
              <p>d</p>
              <img src="asset/1.1.d.png" alt="" /> <br>
              <input  type="radio" value="D" name="kolom1">

            </div>
            <div>
              <p>e</p>
              <img src="asset/1.1.E.png" alt="" /> <br>
              <input  type="radio" value="E" name="kolom1">

            </div>
            <div>
              <p>f</p>
              <img src="asset/1.1.F.png" alt="" /> <br>
              <input  type="radio" value="F" name="kolom1">

            </div>
          </div>

        </div>

        <div>

          <div class="container">
            <p id="il">2</p>
            <div><img id="pm" src="asset/2.png" alt="" /></div>

          </div>
          <div class="container">
            <div>
              <p>a</p>
              <img src="asset/1.2.A.png" alt="" /> <br>
              <input  type="radio" value="A" name="kolom2">

            </div>
            <div>
              <p>b</p>
              <img src="asset/1.2.B.png" alt="" /> <br>
              <input  type="radio" value="B" name="kolom2">
            </div>
            <div>
              <p>c</p>
              <img src="asset/1.2.C.png" alt="" /> <br>
              <input  type="radio" value="C" name="kolom2">
            </div>
            <div>
              <p>d</p>
              <img src="asset/1.2.D.png" alt="" /> <br>
              <input  type="radio" value="D" name="kolom2">
            </div>
            <div>
              <p>e</p>
              <img src="asset/1.2.E.png" alt="" /> <br>
              <input  type="radio" value="E" name="kolom2">
            </div>
            <div>
              <p>f</p>
              <img src="asset/1.2.F.png" alt="" /> <br>
              <input  type="radio" value="F" name="kolom2">
            </div>
          </div>
        </div>
        <div>

          <div class="container">
            <p id="il">3</p>
            <div><img id="pm" width="150px;" src="asset/1.3.png" alt="" /></div>
          </div>
          <div class="container">
            <div>
              <p>a</p>
              <img src="asset/1.3.A.png" alt="" /> <br>
              <input  type="radio" value="A" name="kolom3">
            </div>
            <div>
              <p>b</p>
              <img src="asset/1.3.B.png" alt="" /> <br>
              <input  type="radio" value="B" name="kolom3">
            </div>
            <div>
              <p>c</p>
              <img src="asset/1.3.C.png" alt="" /> <br>
              <input  type="radio" value="C" name="kolom3">
            </div>
            <div>
              <p>d</p>
              <img src="asset/1.3.D.png" alt="" /> <br>
              <input  type="radio" value="D" name="kolom3"> D
            </div>
            <div>
              <p>e</p>
              <img src="asset/1.3.E.png" alt="" /> <br>
              <input  type="radio" value="E" name="kolom3">
            </div>
            <div>
              <p>f</p>
              <img src="asset/1.3.F.png" alt="" /> <br>
              <input  type="radio" value="F" name="kolom3">
            </div>
          </div>
        </div>
        <div>

          <div class="container">
            <p id="il">4</p>
            <div><img id="pm" width="200px;" src="asset/4.jpg" alt="" /></div>
          </div>
          <div class="container">
            <div>
              <p>a</p>
              <img width="200px;" src="asset/4A.jpg" alt="" /> <br>
              <input  type="radio" value="A" name="kolom4">
            </div>
            <div>
              <p>b</p>
              <img width="200px;" src="asset/4B.jpg" alt="" /> <br>
              <input  type="radio" value="A" name="kolom4">
            </div>
            <div>
              <p>c</p>
              <img width="200px;" src="asset/4C.jpg" alt="" /> <br>
              <input  type="radio" value="C" name="kolom4">
            </div>
            <div>
              <p>d</p>
              <img width="200px;" src="asset/4D.jpg" alt="" /> <br>
              <input  type="radio" value="D" name="kolom4">
            </div>
            <div>
              <p>e</p>
              <img src="asset/4E.jpg" alt="" /> <br>
              <input  type="radio" value="E" name="kolom4">
            </div>
            <div>
              <p>f</p>
              <img src="asset/4F.jpg" alt="" /> <br>
              <input  type="radio" value="F" name="kolom4">
            </div>
          </div>
        </div>
        <div>

          <div class="container">
            <p id="il">5</p>
            <div><img id="pm" src="asset/5.jpg" alt="" /></div>
          </div>
          <div class="container">
            <div>
              <p>a</p>
              <img src="asset/5A.jpg" alt="" /> <br>
              <input  type="radio" value="A" name="kolom5">
            </div>
            <div>
              <p>b</p>
              <img src="asset/5B.jpg" alt="" /> <br>
              <input  type="radio" value="B" name="kolom5">
            </div>
            <div>
              <p>c</p>
              <img src="asset/5C.jpg" alt="" /> <br>
              <input  type="radio" value="C" name="kolom5">
            </div>
            <div>
              <p>d</p>
              <img src="asset/5D.jpg" alt="" /> <br>
              <input  type="radio" value="D" name="kolom5">
            </div>
            <div>
              <p>e</p>
              <img src="asset/5E.jpg" alt="" /> <br>
              <input  type="radio" value="E" name="kolom5">
            </div>
            <div>
              <p>f</p>
              <img src="asset/5F.jpg" alt="" /> <br>
              <input  type="radio" value="F" name="kolom5">
            </div>
          </div>
        </div>
        <div>

          <div class="container">
            <p id="il">6</p>
            <div><img id="pm" src="asset/6.jpg" alt="" /></div>
          </div>
          <div class="container">
            <div>
              <p>a</p>
              <img src="asset/6A.jpg" alt="" /> <br>
              <input  type="radio" value="A" name="kolom6">
            </div>
            <div>
              <p>b</p>
              <img src="asset/6B.jpg" alt="" /> <br>
              <input  type="radio" value="B" name="kolom6">
            </div>
            <div>
              <p>c</p>
              <img src="asset/6C.jpg" alt="" /> <br>
              <input  type="radio" value="C" name="kolom6">
            </div>
            <div>
              <p>d</p>
              <img src="asset/6D.jpg" alt="" /> <br>
              <input  type="radio" value="D" name="kolom6">
            </div>
            <div>
              <p>e</p>
              <img src="asset/6E.jpg" alt="" /> <br>
              <input  type="radio" value="E" name="kolom6">
            </div>
            <div>
              <p>f</p>
              <img src="asset/6F.jpg" alt="" /> <br>
              <input  type="radio" value="F" name="kolom6">
            </div>
          </div>
        </div>
        <div>

          <div class="container">
            <p id="il">7</p>
            <div><img id="pm" src="asset/7.jpg" alt="" /></div>
          </div>
          <div class="container">
            <div>
              <p>a</p>
              <img src="asset/7A.jpg" alt="" /> <br>
              <input  type="radio" value="A" name="kolom7">
            </div>
            <div>
              <p>b</p>
              <img src="asset/7B.jpg" alt="" /> <br>
              <input  type="radio" value="B" name="kolom7">
            </div>
            <div>
              <p>c</p>
              <img src="asset/7C.jpg" alt="" /> <br>
              <input  type="radio" value="C" name="kolom7"> C
            </div>
            <div>
              <p>d</p>
              <img src="asset/7D.jpg" alt="" /> <br>
              <input  type="radio" value="D" name="kolom7">
            </div>
            <div>
              <p>e</p>
              <img src="asset/7E.jpg" alt="" /> <br>
              <input  type="radio" value="E" name="kolom7">
            </div>
            <div>
              <p>f</p>
              <img src="asset/7F.jpg" alt="" /> <br>
              <input  type="radio" value="F" name="kolom7">
            </div>
          </div>
        </div>
        <div>

          <div class="container">
            <p id="il">8</p>
            <div><img id="pm" src="asset/8.jpg" alt="" /></div>
          </div>
          <div class="container">
            <div>
              <p>a</p>
              <img src="asset/8A.jpg" alt="" /> <br>
              <input  type="radio" value="A" name="kolom8">
            </div>
            <div>
              <p>b</p>
              <img src="asset/8B.jpg" alt="" /> <br>
              <input  type="radio" value="B" name="kolom8">
            </div>
            <div>
              <p>c</p>
              <img src="asset/8C.jpg" alt="" /> <br>
              <input  type="radio" value="C" name="kolom8">
            </div>
            <div>
              <p>d</p>
              <img src="asset/8D.jpg" alt="" /> <br>
              <input  type="radio" value="D" name="kolom8">
            </div>
            <div>
              <p>e</p>
              <img src="asset/8E.jpg" alt="" /> <br>
              <input  type="radio" value="E" name="kolom8">
            </div>
            <div>
              <p>f</p>
              <img src="asset/8F.jpg" alt="" /> <br>
              <input  type="radio" value="F" name="kolom8">
            </div>
          </div>
        </div>
        <div>

          <div class="container">
            <p id="il">9</p>
            <div><img id="pm" src="asset/9.jpg" alt="" /></div>
          </div>
          <div class="container">
            <div>
              <p>a</p>
              <img src="asset/9A.jpg" alt="" /> <br>
              <input  type="radio" value="A" name="kolom9">
            </div>
            <div>
              <p>b</p>
              <img src="asset/9B.jpg" alt="" /> <br>
              <input  type="radio" value="B" name="kolom9">
            </div>
            <div>
              <p>c</p>
              <img src="asset/9C.jpg" alt="" /> <br>
              <input  type="radio" value="C" name="kolom9">
            </div>
            <div>
              <p>d</p>
              <img src="asset/9D.jpg" alt="" /> <br>
              <input  type="radio" value="D" name="kolom9">
            </div>
            <div>
              <p>e</p>
              <img src="asset/9E.jpg" alt="" /> <br>
              <input  type="radio" value="E" name="kolom9">
            </div>
            <div>
              <p>f</p>
              <img src="asset/9F.jpg" alt="" /> <br>
              <input  type="radio" value="F" name="kolom9">
            </div>
          </div>
        </div>
        <div>

          <div class="container">
            <p id="il">10</p>
            <div><img id="pm" src="asset/10.jpg" alt="" /></div>
          </div>
          <div class="container">
            <div>
              <p>a</p>
              <img src="asset/10A.jpg" alt="" /> <br>
              <input  type="radio" value="A" name="kolom10">
            </div>
            <div>
              <p>b</p>
              <img src="asset/10B.jpg" alt="" /> <br>
              <input  type="radio" value="B" name="kolom10"> B
            </div>
            <div>
              <p>c</p>
              <img src="asset/10C.jpg" alt="" /> <br>
              <input  type="radio" value="C" name="kolom10"> C
            </div>
            <div>
              <p>d</p>
              <img src="asset/10D.jpg" alt="" /> <br>
              <input  type="radio" value="D" name="kolom10">
            </div>
            <div>
              <p>e</p>
              <img src="asset/10E.jpg" alt="" /> <br>
              <input  type="radio" value="E" name="kolom10">
            </div>
            <div>
              <p>f</p>
              <img src="asset/10F.jpg" alt="" /> <br>
              <input  type="radio" value="10" name="kolom10">
            </div>
          </div>
        </div>
        <div>

          <div class="container">
            <p id="il">11</p>
            <div><img id="pm" src="asset/11.jpg" alt="" /></div>
          </div>
          <div class="container">
            <div>
              <p>a</p>
              <img src="asset/11A.jpg" alt="" /> <br>
              <input  type="radio" value="A" name="kolom11">
            </div>
            <div>
              <p>b</p>
              <img src="asset/11B.jpg" alt="" /> <br>
              <input  type="radio" value="B" name="kolom11">
            </div>
            <div>
              <p>c</p>
              <img src="asset/11C.jpg" alt="" /> <br>
              <input  type="radio" value="C" name="kolom11">
            </div>
            <div>
              <p>d</p>
              <img src="asset/11D.jpg" alt="" /> <br>
              <input  type="radio" value="D" name="kolom11">
            </div>
            <div>
              <p>e</p>
              <img src="asset/11E.jpg" alt="" /> <br>
              <input  type="radio" value="E" name="kolom11">

            </div>
            <div>
              <p>f</p>
              <img src="asset/11F.jpg" alt="" /> <br>
              <input  type="radio" value="F" name="kolom11">

            </div>
          </div>
        </div>

        <div>

          <div class="container">
            <p id="il">12</p>
            <div><img id="pm" src="asset/12.jpg" alt="" /></div>
          </div>
          <div class="container">
            <div>
              <p>a</p>
              <img src="asset/12A.jpg" alt="" /> <br>
              <input  type="radio" value="A" name="kolom12">

            </div>
            <div>
              <p>b</p>
              <img src="asset/12B.jpg" alt="" /> <br>
              <input  type="radio" value="B" name="kolom12">

            </div>
            <div>
              <p>c</p>
              <img src="asset/12C.jpg" alt="" /> <br>
              <input  type="radio" value="C" name="kolom12">

            </div>
            <div>
              <p>d</p>
              <img src="asset/12D.jpg" alt="" /> <br>
              <input  type="radio" value="D" name="kolom12">

            </div>
            <div>
              <p>e</p>
              <img src="asset/12E.jpg" alt="" /> <br>
              <input  type="radio" value="E" name="kolom12">

            </div>
            <div>
              <p>f</p>
              <img src="asset/12F.jpg" alt="" /> <br>
              <input  type="radio" value="F" name="kolom12">

            </div>
          </div>
        </div>
        <div>

          <div class="container">
            <p id="il">13</p>
            <div><img id="pm" src="asset/13.jpg" alt="" /></div>
          </div>
          <div class="container">
            <div>
              <p>a</p>
              <img src="asset/13A.jpg" alt="" /> <br>
              <input  type="radio" value="A" name="kolom13">

            </div>
            <div>
              <p>b</p>
              <img src="asset/13B.jpg" alt="" /> <br>
              <input  type="radio" value="B" name="kolom13">

            </div>
            <div>
              <p>c</p>
              <img src="asset/13C.jpg" alt="" /> <br>
              <input  type="radio" value="C" name="kolom13">

            </div>
            <div>
              <p>d</p>
              <img src="asset/13D.jpg" alt="" /> <br>
              <input  type="radio" value="D" name="kolom13">

            </div>
            <div>
              <p>e</p>
              <img src="asset/13E.jpg" alt="" /> <br>
              <input  type="radio" value="E" name="kolom13">

            </div>
            <div>
              <p>f</p>
              <img src="asset/13F.jpg" alt="" /> <br>
              <input  type="radio" value="F" name="kolom13">

            </div>
          </div>
        </div>

        <button name="btnSubmit" type="submit" onclick="myFunction()" class="btn btn-dark text-light" style="width: 100%"
         >
          Submit
        </button>
      </form>
    </div>
  </section>

  </div>
<!-- <script src="js.js"></script> -->
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
          alert("waktuhabis")
          document.getElementById("myForm").submit();
        }
      }, 1000)
    }
    const countdownDuration = 180;
    countdownTimer(countdownDuration, countdownElement);

    


  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <!-- Sweet Alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>