<?php
$nama = $_POST['namaa'];
$jabatan = $_POST['jabatan'];
$pndidikan = $_POST['pendidikann'];
$tgl = $_POST['tanggal_testa'];
$tgl_lahir = $_POST['tanggal_lahir'];
$usia = $_POST['usia'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instruksi sesi 1</title>
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
      #v{
        margin-top: 30px;
      }
      .b{
        position: relative;
      }
      .g{
        margin-left:30px;
      }
    </style>
</head>

<body>
  <form action="indexx.php" method="post">
  <input type="hidden"value="<?= $nama ?>" name="namaa">
  <input type="hidden" value="<?= $jabatan ?>" name="jabatan">
  <input type="hidden" value="<?= $pndidikan ?>" name="pendidikann">
  <input type="hidden" value="<?= $tgl ?>" name="tanggal_testa">
  <input type="hidden" value="<?= $tgl_lahir ?>" name="tanggal_lahir">
  <input type="hidden" value="<?= $usia ?>" name="usia">
    <div class="container">
        <div class="card p-4 m-3">
            <h2>Berikut adalah petunjuk mengenai CFIT Test sub pertama</h2>
            <h3>Petunjuk</h3>

            <p>Instruksi sesi 1
                Di sebelah atas, anda akan menemukan sederet kotak yang berisi urutan gambar. Namun, kotak terakhir
                belum
                ada isinya. Tugas anda adalah mengisi kotak tersebut dengan gambar yang sesuai,yang bisa dipilih dari
                enam pilihan jawaban yang tersedia, yaitu A, B, C, D, E dan F. Perlu diingatbahwa gambar-gambar pada
                soal memiliki pola tertentu sehingga untuk mengisinya,anda perlumengetahui pola dari urutan gambar
                tersebut.

            </p>

            <h3>Contoh</h3>
      <div>
      <div class="b">1</div>
      <div class="g">
      <div class="container" >
        
        <div><img id="pm" src="asset/CONTOH 1.png" alt="" /></div>
      </div>
      <div class="container">
        <div>
          <p>a</p>
          <img src="asset/CONTOH 1 A.png" alt="" />
        </div>
        <div>
          <p>b</p>
          <img src="asset/CONTOH 1B.png" alt="" />
        </div>
        <div>
          <p>c</p>
          <img src="asset/CONTOH 1C.png" alt="" />
        </div>
        <div>
          <p>d</p>
          <img src="asset/CONTOH 1D.png" alt="" />
        </div>
        <div>
          <p>e</p>
          <img src="asset/CONTOH 1E.png" alt="" />
        </div>
        <div>
          <p>f</p>
          <img src="asset/CONTOH 1F.png" alt="" />
        </div>
      </div>
      </div>
      </div>
      
      <div class="container">
        
        <div style="margin-top:50px ;"><p id="v">2</p><img id="pm" src="asset/CONTOH 2.png" alt="" /></div>
      </div>
      <div class="container">
        <div>
          <p>a</p>
          <img src="asset/CONTOH 2A.png" alt="" />
        </div>
        <div>
          <p>b</p>
          <img src="asset/CONTOH 2B.png" alt="" />
        </div>
        <div>
          <p>c</p>
          <img src="asset/CONTOH 2C.png" alt="" />
        </div>
        <div>
          <p>d</p>
          <img src="asset/CONTOH 2D.png" alt="" />
        </div>
        <div>
          <p>e</p>
          <img src="asset/CONTOH 2E.png" alt="" />
        </div>
        <div>
          <p>f</p>
          <img src="asset/CONTOH 2F.png" alt="" />
        </div>
      </div>


      <div class="container mb-3 ">
        
        <div style="margin-top:50px ;"><p id="v">3</p><img id="pm" src="asset/CONTOH 3.png" alt="" /></div>
    </div>
      <div class="container mb-3" >
        <div>
          <p>a</p>
          <img src="asset/CONTOH 3A.png" alt="" />
        </div>
        <div>
          <p>b</p>
          <img src="asset/CONTOH 3B.png" alt="" />
        </div>
        <div>
          <p>c</p>
          <img src="asset/CONTOH 3C.png" alt="" />
        </div>
        <div>
          <p>d</p>
          <img src="asset/CONTOH 3D.png" alt="" />
        </div>
        <div>
          <p>e</p>
          <img src="asset/CONTOH 3E.png" alt="" />
        </div>
        <div>
          <p>f</p>
          <img src="asset/CONTOH 3F.png" alt="" />
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