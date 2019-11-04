<?php
class macan
{
    public $warna = 'orange';
    public $jumlah_kaki = 2;
    public $ukuran_badan = 24;

    public function sayap()
    {
        return "Macan ini mempunyai badan yang besar";
    }
    public function cakaran()
    {
        return "Mempunyai cakaran tajam";
    }
    public function taring()
    {
        return "Mempunyai taring yang tajam dan menusuk";
    }
    public function makan($var)
    {
        return "dan dia memakan makanan daging" . $var;
    }

}
$macan_cantik = new macan;
echo 'macan warnanya' . $macan_cantik->warna;
echo '<br> Mempunyai' . $macan_cantik->jumlah_kaki . 'kaki';
echo '<br> Ukuran badanya' . $macan_cantik->ukuran_badan . 'cm';
echo '<hr>';
echo '<br>' . $macan_cantik->badan();
echo '<br>' . $macan_cantik->cakaran();
echo '<br>' . $macan_cantik->taring();
echo '<br>' . $macan_cantik->makan(' ');
?>
