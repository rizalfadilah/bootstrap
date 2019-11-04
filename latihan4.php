<!DOCTYPE html>
<html>
<head>
    <title>Latihan1</title>
</head>
<body>
<fieldset>
<legend>Latihan Array</legend>
  <form action="latihan4data.php" method="post" name="input">
  <center><h5>Anggota Keluarga</h5></center>
  <label for="">Masukan Jumlah Anggota Keluarga</label>
  <input type="number" min="0" name="masuk" required><input type="submit" name="input" value="proses">
  <hr>
  </form>
  <?php
    if (isset($_GET['input'])) {
        $masuk = $_GET['masuk'];


        for ($i = 0; $i < $masuk; $i++) {
            echo '<br>Nama <input type = "text" name="nama[]"required>
           NIK <input type="number" name="nik[]"required>
           Alamat <input type="text" name="alamat[]"required>
           Umur <input type="number" name="umur[]"required><br><br>';
        }
        echo '<input type="submit" name="input" value="simpan">
        <input tybpe ="reset" name = "reset" value="reset">';
    }
    ?>
    </form>
    </fieldset>
    
</body>
</html>