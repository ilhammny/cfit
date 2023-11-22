

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <title>Login</title>
  </head>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap");

    * {
      margin: 0px;
      padding: 0px;
      font-family: "poppins", sans-serif;
    }

    section {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      width: 100%;
      background-image: url("5767946.jpg");
      background-size: cover;
    }

    .wrapper {
      border: 2px solid rgb(255, 255, 255);
      border-radius: 5%;
      position: relative;
      height: 700px;
      width: 400px;
      background-color: rgb(255, 255, 255, 0);
      backdrop-filter: blur(20px);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    h2 {
      margin-top: 1em;
      font-size: 2em;
      color: rgb(0, 0, 0);
      text-align: center;
    }

    .inputbox {
      position: relative;
      margin-bottom: 30px;
      width: 310px;
      border-bottom: 2px solid #000000;
    }

    .inputbox label {
      position: absolute;
      top: 50%;
      left: 5px;
      transform: translateY(-50%);
      color: #000000;
      font-size: 1em;
      pointer-events: none;
      transition: 0.1s;
    }

    #pendidikan {
      top: -60%;
    }

    #tgl {
      top: -0%;
    }

    input:focus ~ label,
    input:valid ~ label {
      top: 5px;
    }

    .inputbox input {
      width: 100%;
      height: 50px;
      background: transparent;
      border: none;
      outline: none;
      font-size: 1em;
      padding: 0 35px 0 5px;
      color: #000000;
      font-size: medium;
      user-select: none;
    }

    .inputbox ion-icon {
      position: absolute;
      right: 5px;
      font-size: 1.2em;
      top: 20px;
      color: #000000;
    }

    .forget {
      margin: -15px 0 15px;
      font-size: 0.9em;
      color: #000000;
      display: flex;
      justify-content: center;
    }

    .forget label input {
      margin-right: 3px;
    }

    .forget label a {
      color: #ffffff;
      text-decoration: none;
    }

    .forget label a:hover {
      text-decoration: underline;
      color: #000000;
    }

    button {
      text-anchor: middle;
      width: 100%;
      height: 40px;
      border-radius: 40px;
      border: none;
      outline: none;
      cursor: pointer;
      font-size: 1rem;
      font-weight: 600;
      color: white;
      background-color: rgb(0, 0, 0);
      transition: 100ms;
    }

    button:hover {
      background-color: #ffffff;
      color: #000000;
    }

    .register {
      font-size: 0.9em;
      color: #000000;
      text-align: center;
      margin: 25px 0 10px;
    }

    .register p a {
      color: #ffffff;
      text-decoration: none;
    }

    .register p a:hover {
      color: #000000;
      text-decoration: underline;
    }

    .loginwith {
      text-align: center;
      margin: 10px 5px;
    }

    .loginwith ion-icon {
      font-size: 2em;
      color: #000000;
      margin: 5px 5px;
      padding-left: 10px;
      padding-right: 10px;
    }

    .loginwith ion-icon:hover {
      font-size: 2.2em;
      transition: 0.1s;
    }

    footer {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    select {
      background-color: transparent;
      outline: none;
      border: none;
      font-size: medium;
    }
  </style>

  <body>
    <section>
      <div class="wrapper">
        <form action="instruksiAwal.php" method="post">
          <h2>CFIT Test</h2>
          <div class="inputbox" id="nama">
            <input type="text" id="ussr" required class="input" name="namaa" />
            <label for="ussr">NAMA LENGKAP</label>
          </div>
          <div class="inputbox">
            <input
              type="text"
              id="jenis-kelamin"
              required
              class="input"
              name="jabatan"
            />
            <label for="jenis-kelamin">JABATAN</label>
          </div>

          <div class="inputbox">
            <label for="PENDIDIKAN" id="pendidikan">PENDIDIKAN TERAKHIR</label>
            <select name="pendidikan" id="PENDIDIKAN">
              <option value="SD">SD</option>
              <option value="SMP">SMP</option>
              <option value="SMA">SMA</option>
              <option value="SMK">SMK</option>
              <option value="D1">D1</option>
              <option value="D2">D2</option>
              <option value="D3">D3</option>
              <option value="D4/S1">D4/S1</option>
            </select>
          </div>
          <div class="inputbox">
            <input
              type="date"
              id="pw"
              required
              class="input"
              name="tanggal_testa"
            />
            <label id="tgl" for="pw">Tanggal Tes</label>
          </div>
          <div class="inputbox">
            <input
              type="date"
              id="pw"
              required
              class="input"
              name="tanggal_lahir"
            />
            <label id="tgl" for="pw">Tanggal Lahir</label>
          </div>
          <div class="inputbox">
            <input type="text" id="usia" required class="input" name="usia" />
            <label for="usia">USIA</label>
          </div>
          <div class="buton">
            <button
              type="submit"
              
            >
              Masuk ke test
            </button>
          </div>
          <footer>
            <?= date('Y-m-d H:i:s'); ?>
          </footer>
        </form>
      </div>
    </section>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
