<?php
$nama = $_POST['namaa'];
$jabatan = $_POST['jabatan'];
$pndidikan = $_POST['pendidikan'];
$tgl = $_POST['tanggal_testa'];
$tgl_lahir = $_POST['tanggal_lahir'];
$usia = $_POST['usia'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instruksi Awal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <form action="instruksi1.php" method="post">
    <input type="hidden"value="<?= $nama ?>" name="namaa">
  <input type="hidden" value="<?= $jabatan ?>" name="jabatan">
  <input type="hidden" value="<?= $pndidikan ?>" name="pendidikann">
  <input type="hidden" value="<?= $tgl ?>" name="tanggal_testa">
  <input type="hidden" value="<?= $tgl_lahir ?>" name="tanggal_lahir">
  <input type="hidden" value="<?= $usia ?>" name="usia">
    <div class="container">
        <div class="card p-4 m-3">
            <h1>Hai,
                <?= $nama ?>

            </h1>
            <h3>Berikut adalah petunjuk mengenai CFIT</h3>
            <h4>Petunjuk</h4>

            <p>Tes ini terdiri dari 4 subtes yang masing-masing memiliki durasi waktu tersendiri, jadi
                harap anda mengerjakan secepat mungkin namun bukan berarti asal-asalan
            </p>


            <button type="submit" 
                class="btn btn-warning text-light">lanjut</button>
        </div>

    </div>
    </div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>