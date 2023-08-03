<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Data Aktual Tinggi Air Sungai</title>
  </head>
  <body>
    <h1>Tambah Data Aktual Tinggi Air Sungai</h1>
    <form action="aktual.php" method="POST">
      <p>Masukkan waktu</p>
      <input type="time" name="waktu" id="" required/>
      <p>Masukkan tinggi air sungai</p>
      <input type="number" name="tas" id="" step="any" required/>
      <br><br>
      <input type="submit" name="simpan" value="Simpan">
      <br><br>
      <div id="notification" style="display: none;"></div>
    </form>
    <?php
      /*Mengecek apabila tombol simpan di klik*/
      if ($_POST['simpan']) {
        include ('dbcon_ultrasonic.php');
        /*Menerima dan Menampung data*/
        $waktu = $_POST['waktu'];
        $tinggiAir = $_POST['tas'];
        $tgl = date('Y-m-d');
        /*Melakukan penyimpanan data*/
        $sql= ("INSERT INTO aktual VALUES ('','$waktu', '$tinggiAir', '$tgl')");
        $result = mysqli_query($conn, $sql);
        // echo "<div>Data berhasil disimpan!</div>";
      }
    ?>
  </body>
</html>
