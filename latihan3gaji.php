<?php

class Gaji
{
    public $nama, $nip, $alamat, $jhk;

    public function __construct($nama, $nip, $alamat, $jhk)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->alamat = $alamat;
        $this->jhk = $jhk;
    }
    public function datadiri()
    {
        $data = "Nama : " . $this->nama;
        $data .= "<br>NIP : " . $this->nip;
        $data .= "<br>Alamat : " . $this->alamat;
        $data .= "<br>Jumlah Hari Kerja : " . $this->jhk;
    }
    public function gajikotor()
    {
        $gajiktr = $this->jhk * 75000;
        return $gajiktr;
    }
    public function gajibersih()
    {
        $gajibrsh = $this->jhk * 75000;
        -(($this->jhk * 75000) * (2.5 / 100));
        return $gajibrsh;
    }
}
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $alamat = $_POST['alamat'];
    $jhk = $_POST['jhk'];

    $gaji = new Gaji($nama, $nip, $alamat, $jhk);
    echo "Gaji Kotor :" . $gaji->gajikotor() . "<br>";
    echo "Gaji Kotor :" . $gaji->gajikotor() . "<br>";
}
?>