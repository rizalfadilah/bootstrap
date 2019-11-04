<?php

class keluarga
{

    public function __construct($nama, $nik, $alamat, $umur)
    {
        $this->nama = $nama;
        $this->nik = $nik;
        $this->alamat = $alamat;
        $this->umur = $umur;
    }
    public function datakeluarga()
    {
        foreach ($this->nama as $data => $x) {
            echo "Nama : " . $this->nama[$data] .
                " NIK : " . $this->nik[$data] .
                " Alamat : " . $this->alamat[$data] .
                " Umur: " . $this->umur[$data] . "<br>";
        }
    }
}
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
    $nip = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $jhk = $_POST['umur'];

    $anggota = new keluarga($nama, $nik, $alamat, $umur);
    echo $gaji->datakeluarga() . "<br>";

}
?>