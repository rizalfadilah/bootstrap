<?php


class laptop
{

// buat protected property
    protected $pemilik;
// buat protected method
    protected function hidupkan_laptop()
    {
        return "Hidupkan Laptop";
    }
}

// buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();

//set protected property akan menghasilkan error
$laptop_anto->pemilik = "Anto";
// Fatal error:Cannot access protected property laptop::$pemilik


//tampilkan protected property akan menghasilkan error
$laptop_anto->pemilik;
//Fatal error: Cannot access protected property
