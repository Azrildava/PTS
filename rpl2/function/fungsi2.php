<?php 

function persegi(){

    //Persegi
    $sisi1 = 5;
    $hasil = $sisi1 * $sisi1;

    echo "<h3>Meghitung Luas Persegi</h3>";
    echo "Rumus : sisi x sisi <br>";
    echo "Sisi  : $sisi1 <br>";
    echo "Luasnya : $hasil <br>";

}
function persegiPanjang(){

    $panjang = 5;
    $lebar = 4;
    $hasil2 = $panjang * $lebar;
    
    echo "<h3>Menghitung Luas Persegi Panjang</h3>";
    echo "Rumus : panjang x lebar <br>";
    echo "Panjang : $panjang <br>";
    echo "Lebar : $lebar <br>";
    echo "Luasnya : $hasil2 <br>";
}
function segiTiga(){

    $set = 0.5;
    $alas = 5;
    $tinggi = 8;
    $hasil3 = $set * $alas * $tinggi;

    echo "Rumus :<h3>Menghitung Luas Segitiga</h3>";
    echo "Rumus : 1/2 x Alas x tinggi  <br>";
    echo "Setengah : 1/2 <br>";
    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    echo "Luasnya : $hasil3 <br>";
}
function lingkaran(){

    $π = 3.14;
    $r = 7;
    $hasil4 = $π * $r * $r;


    echo "<h3>Menghitung Luas Lingkaran</h3>";
    echo "Rumus : π x r x r <br>";
    echo "π : $π <br>";
    echo "r : $r <br>";
    echo "Luasnya : $hasil4 <br>";
}
 persegi();
 echo "<hr>";
 persegiPanjang();
 echo "<hr>";
 segiTiga();
 echo "<hr>";
 lingkaran();

?>