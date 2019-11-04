<<!DOCTYPE html>
<html>
<head>
    <title>Latihan</title>
</head>
<body>
<form action="" method="post">
<fieldset>
<label for="">Masukan Alas</label>
<input type="number" name="alas"><br>
<label for="">Masukan Tinggi</label>
<input type="number" name="tinggi"><br>
<input type="submit" name="simpan" value="Submit">
</fieldset>
</form>
<?php
if (isset($_POST['simpan'])) {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];

    class BangunDatar
    {
        public $a, $b;
        public function __construct($alas, $tinggi)
        {
            $this->$alas;
            $this->$tinggi;
        }
        public function segitiga()
        {
            $luas = ($this->a * $this->b) / 2;
            return $luas;
        }
    }
    $hitung = new BangunDatar($alas, $tinggi);
    echo "Alas Segitiga   : " . $hitung->a . "<br>";
    echo 'Tinggi Segitiga : ' . $hitung->b . '<br>';
    echo "Luas Segitiga   : " . $hitung->segitiga() . "<br>";
    echo "<hr>";
}
?>
         <form action="" method="post">
         <fieldset>
         <label for="">Masukan Jari Jari</label>
         <input type="number" name="r"><br>
         <input type="submit" name="save" value="Submit">
         </form>
         </fieldset>
         </form>
         <?php
        if (isset($_POST['save'])) {
            $r = $_POST['r'];
            class BangunRuang
            {
                public $b;
                public $phi = 3.14;

                public function __construct($r)
                {
                    $this->$b = $r;
                }
                public function luas_lingkaran()
                {
                    $luas = $this->phi * $this->b * $this->b;
                    return $luas;
                }
                public function keliling()
                {
                    $keliling = 2 * ($this->phi * $this->b);
                    return $keliling;
                }
            }
            $itungan = new BangunRuang(314, 35);
            echo "Phi Lingkaran : " . $itungan->phi . "<br>";
            echo "Jari Jari Lingkaran : " . $itungan->b . "<br>";
            echo "Luas Lingkaran : " . $itungan->luas_lingkaran() . "<br>";
            echo "Keliling Lingkaran : " . $itungan->keliling();
        }
        ?>
</body>
</html>