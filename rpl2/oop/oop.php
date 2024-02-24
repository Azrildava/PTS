<?php 

///buat class

class Manusia{


            //buat property / atribut
            public $nama = "Azril";
            public $nama2 = "Luci";
            public $jenis_kelamin;

            //buat method / function
            public function makan(){
                    echo "$this->nama2 Suka Makan Daging Ayam";
            }
            public function minum(){
                    echo "$this->nama Suka Minum Susu ";
            }
}

//buat object
$cetak = new Manusia;

echo $cetak ->makan();
echo "<br>";
echo $cetak ->minum();


?>