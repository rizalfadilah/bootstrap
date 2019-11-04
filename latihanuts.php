<?php
class Aritmatika
{
    public $bil1, $bil2;

    public function tambah($bil1, $bil2)
    {
        return "Perhitungan tambah $bil1 + $bil2 = " . ($bil1 + $bil2) . "<br>";
    }
    public function kurang($bil1, $bil2)
    {
        return "Perhitungan  kurang $bil1 - $bil2 = " . ($bil1 - $bil2) . "<br>";
    }
    public function bagi($bil1, $bil2)
    {
        return "Perhitungan  bagi $bil1 / $bil2 = " . ($bil1 / $bil2) . "<br>";
    }
    public function kali($bil1, $bil2)
    {
        return "Perhitungan  kali $bil1 * $bil2 = " . ($bil1 * $bil2) . "<br>";
    }
}

$hitung = new Aritmatika();
echo $hitung->bagi(100, 20);
echo $hitung->tambah(100, 20);
echo $hitung->kali(100, 20);
echo $hitung->kurang(100, 20);

echo "<hr>";


$hitung2 = new Aritmatika();
echo $hitung->bagi(20, 5);
echo $hitung->tambah(20, 5);
echo $hitung->kali(20, 5);
echo $hitung->kurang(20, 5);
?>