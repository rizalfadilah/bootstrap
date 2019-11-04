<?php
class manusia
{
    public $umur, $tgl_lahir;
    protected $jenis_kelamin;
    private $status;

    public function makan()
    {
        return "Manusia juga butuh makan";
    }
    public function minum()
    {
        return "Manusia juga butuh minum";
    }
    public function ambil_status($status_saat_ini)
    {
        return $this->status = $status_saat_ini;
    }
    public function status_gua()
    {
        return "barbar namun kadang ambyar";
    }
}
class pria extends manusia
{
    public function jk($jk)
    {
        return $this->jenis_kelamin = $jk;
    }
    public function datadiri()
    {
        $datadiri = "<br> aku seorang" . $this->$jenis_kelamin;
        $datadiri = "<br> aku seorang" . $this->$jenis_kelamin;
        $datadiri = "<br> aku seorang" . $this->$jenis_kelamin;
        $datadiri = "<br> aku seorang" . $this->$jenis_kelamin;
        $datadiri = "<br> aku seorang" . $this->$jenis_kelamin;
    }
}

$saya = new pria();
$saya->tgl_lahir = "8 agustus 2001";
$saya->jk("laki-laki");
$saya->ambil_status("lajang");
$saya->umur = "18 tahun";


echo $saya->datadiri();
echo $saya->makan() . "<br>";
echo $saya->minum();
?>