<<!DOCTYPE html>
<html>
<head>
    <title>AFRIZALFA</title>
</head>
<body>
        <form action="" method="post">
               <fieldset>
                    <h2>Kelas XI RPL 2</h2>
                    <label for="">Masukan Nama Wali Kelas</label>
                    <input type="text" name="walikelas"><br>
                    <label for="">Masukan Nama Ketua Murid</label>
                    <input type="text" name="km"><br>
                    <label for="">Masukan Nama  Bendahara</label>
                    <input type="text" name="bendahara"><br>
                    <label for="">Masukan Nama Sekertaris</label>
                    <input type="text" name="sekertaris"><br>
                    <label for="">Masukan Jumlah Siswa</label>
                    <input type="number" name="jml_siswa"><br>
                    <input type="submit" name="simpan" value="Simpan"><br>
<?php
class AFR
{
    public $jml_siswa, $nama_km, $nama_wk, $nama_bndhr, $nama_sktrs;

    public function __construct($jml, $km, $wk, $bendahara, $sekertaris)
    {
        $this->jml_siswa = $jml;
        $this->nama_km = $km;
        $this->nama_wk = $wk;
        $this->nama_bendahara = $bendahara;
        $this->nama_skrtrs = $sekertaris;
    }
    public function organigram()
    {
        return "Susunan Organigram Kelas XI RPL 2 : <br> ";
    }
    public function absen()
    {
        return "jumlah  Siswa : $this->jml <br>";
    }
}
if (isset($_POST['simpan'])) {
    $wk = $_POST['walikelas'];
    $km = $_POST['km'];
    $bendahara = $_POST['bendahara'];
    $sekertaris = $_POST['sekertaris'];
    $jml = $_POST['jml_siswa'];

    $rpl = new AFR($wk, $bendahara, $sekertaris, $jml);
    echo $rpl->organigram() . "<br>";
    echo $rpl->absen();

}
?>

       </fieldset>
    </form>
</body>
</html>


