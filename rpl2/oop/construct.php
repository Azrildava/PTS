<?php 

class contoh{

    public function __construct(){
            echo "Assalaamualaikum Ukhtea <br>";
    }

    public function perkenalan(){
            echo "Nama saya Fakhri <br>";
    }
    public function __destruct(){
            echo "Hallo tan";
    }
}

$cetak = new contoh();

echo $cetak->perkenalan();

?>