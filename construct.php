<?php
class Siswa
{
    public function __destruct()
    {

        echo "<br>ini adalah Destructor";

    }

    public function hallo()
    {
        return "<br>Hello PHP";

    }

    public function __construct()
    {
        echo "Ini adalah Constructur";
    }

}
$Hello = new Siswa();
echo $Hello->hallo();
?> 