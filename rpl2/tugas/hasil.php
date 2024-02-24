<pre>
<?php

    $a = $_REQUEST['nama'];
    $b = $_REQUEST['jk'];
    $c = $_REQUEST['tanggal_lahir'];
    $d = $_REQUEST['olahraga'];
    $e = $_REQUEST['kelas'];
    $f = $_REQUEST['kemampuan'];
    $g = $_REQUEST['metode'];
    $diskon = 0;

    if($d == "sepakbola") {
        $harga = 0;
            if ($e == "pemula") {
                $harga += 200000;
            } elseif ($e == "menengah") {
                $harga += 250000;
            }elseif ($e == "lanjutan") {
                $harga += 300000;
            }
    } else if ($d == "bulutangkis") {
        $harga = 0;
            if ($e == "pemula") {
                $harga += 150000;
                if ($b == "Perempuan") {
                    $diskon += $harga * 0.1;
                }
            } elseif  ($e == "pemula") {
                $harga += 200000;
                if ($b == "Perempuan") {
                    $diskon += $harga * 0.1;
                }
            } elseif  ($e == "pemula") {
                $harga += 250000;
                if ($b == "Perempuan") {
                    $diskon += $harga * 0.1;
                }
            }
    } else if ($d == "berenang") {
        $harga = 0;
            if ($e == "pemula") {
                $harga += 180000;
            } elseif ($e == "menengah") {
                $harga += 220000;
            } elseif ($e == "lanjutan") {
                $harga += 270000;
            }
    }

     
    $total = $harga - $diskon;

    if ($total > 500000) {
        $keputusan = "Selamat Anda Mendapat hadiah";
    } else {
        $keputusan = "Sangat disayangkan total harga anda tidak mencapai tujuan,Anda tidak mendapat hadiah "; 
    }
 

    echo"=============FORMULIR============= <br>";
    echo"================================== <br>";


    echo "Nama                   : $a <br>";
    echo "Jenis kelamin          : $b <br>";
    echo "Tanggal lahir          : $c <br>";
    echo "Olahraga               : $d <br>";
    echo "kelas                  : $e <br>";
    echo "Kemampuan              : $f <br>";
    echo "Metode pembayaran      : $g <br>";
    echo "Harga                  :Rp. $harga <br>";
    echo "Diskon                 :Rp. $diskon <br>";
    echo "Total harga            :Rp. $total <br>";
    echo "<br>";
    echo $keputusan;



?>
 </pre>

