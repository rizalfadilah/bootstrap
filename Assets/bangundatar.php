<?php
class BangunDatar
{
    public $a, $b;


    public function __construct($alas, $tinggi)
    {
        $this->a = alas;
        $this->b = tinggi;
    }
    public function segitiga()
    {
        $luas = ($this->a * $this->b) / 2;
        return $luas;
    }
}
$hitung = new BangunDatar(6, 6);
echo "Alas Segitiga : " . $hitung->a . "<br>";
echo 'Tinggi Segitiga : ' . $hitung->b . '<br>';
echo $hitung->segitiga() . "<br>";
echo "<hr>";

class BangunRuang
{
    public $a, $b;
    public function __construct($phi, $r)
    {
        $this->$phi = $a;
        $this->$b = $r;
    }
    public function luas_lingkaran()
    {
        $luas = $this->a * $this->b * $this->b;
        return "Luas Lingkaran : " . $luas;
    }
    public function keliling()
    {
        $keliling = 2 * ($this->a * $this->b);
        return "Keliling Lingkaran : " . $keliling;
    }
}
$itungan = new BangunRuang(314, 35);
echo "Phi Lingkaran : " . $itungan->phi . "<br>";
echo "Jari Jari Lingkaran : " . $itungan->b . "<br>";
echo "Luas Lingkaran : " . $itungan->luas_lingkaran() . "<br>";
echo "Keliling Lingkaran : " . $itungan->keliling();
?>
