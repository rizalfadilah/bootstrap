<?php

// buat class computer
class komputer
{
    // property dengan hak akses protected
    private $jenis_processor = "Intel Core i7-4790 3.6Ghz";
    public function tampilkan_processor()
    {
        return $this->jenis_processor;

    }
}

// buat class laptop
class laptop extends komputer
{

    public function tampilkan_processor()
    {
        return $this->jenis_processor;
    }
}
// buat objek dari class laptop (instansiasi)
$komputer_baru = new komputer();
$laptop_baru = new laptop();
//Jalan method dari class computer
echo $komputer_baru->tampilkan_processor();//intel core 17
//
?>
