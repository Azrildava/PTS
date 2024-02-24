<?php 

class bangunDatar{

        public $bangun1 = "PERSEGI";
        public $bangun2 = "PERSEGI PANJANG";
        public $bangun3 = "SEGITIGA";
        public $bangun4 = "LINGKARAN";


        public function persegi(){
                 $sisi = 4; 
                 $hasil = $sisi * $sisi;
                echo "<b><h2>MENGHITUNG LUAS $this->bangun1</h2></b>";
                echo "sisi = 4 <br>";
                echo "rumus = sisi x sisi <br>";
                echo "hasil = $hasil";
                echo "<hr>";
        }

        public function persegiPanjang(){
                $panjang = 5;
                $lebar = 8;
                $hasil = $panjang * $lebar;
                echo "<b><h2>MENGHITUNG LUAS $this->bangun2</h2></b>";
                echo "panjang = 5 <br>";
                echo "lebar = 8 <br>";
                echo "rumus = panjang x lebar <br>";
                echo "hasil = $hasil";
                echo "<hr>";
        }
        public function segitiga(){
            $set = 0.5;
            $alas = 5;
            $tinggi = 3;
            $hasil = $set * $alas * $tinggi;
            echo "<b><h2>MENGHITUNG LUAS $this->bangun3</h2></b>";
            echo "setengah = 0.5 <br>";
            echo "alas = 5 <br>";
            echo "tinggi = 3 <br>";
            echo "rumus = setengah x alas x tinggi <br>";
            echo "hasil = $hasil";
            echo "<hr>";
    }
        public function lingkaran(){
            $π = 3.14;
            $r = 5;
            $hasil = $π * $r * $r;
            echo "<b><h2>MENGHITUNG LUAS $this->bangun4</h2></b>";
            echo "π = 3.14 <br>";
            echo "jari-jari = 5 <br>";
            echo "rumus = π x r x r <br>";
            echo "hasil = $hasil";
            echo "<hr>";
    }

}

$cetak = new bangunDatar();

echo $cetak->persegi();
echo "<br>";
echo $cetak->persegiPanjang();
echo "<br>";
echo $cetak->segitiga();
echo "<br>";
echo $cetak->lingkaran();

?>