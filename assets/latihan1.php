<?php
class cafecoffe
{
    private $resepfilosofi = "RAHASIA";
    protected $cara_membuatcoffe = "Hanya Paara Pegawai yang Mengetahui,
    dan cara membuat coffe dilindungi oleh UU HAKI";

    public function pemasaran()
    {
        return $this->menu;
    }
    public function kepo_resep()
    {
        return $this->resepfilosofi;
    }
}
class kopiskuy extends cafecoffe
{
    public function kepo_resep()
    {
        return $this->resepfilosofi;
    }
    public function pemasaran()
    {
        return $this->menu;
    }
    public function cara_membuatcoffe()
    {
        return $this->cara_membuatcoffe;
    }
}
$cafe = new cafecoffe();
$caf = new kopiskuy();
echo "Menu Yang Disajikan di KopiSkuy Adalah :" . $cafe->pemasaran() . "<br>";
echo "Bahan Bahan Yang Harus Di Persiapkan Dalam Pembuatan 
Coffe Late di KopiSkuy Adalah : <br>" . $caf->cara_membuatcoffe() . "<br>";
echo "Bumbu yang digunakan oleh KOPISKUY adalah : " . $res->kepo_resep;
?>  
