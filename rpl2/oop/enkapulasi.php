<?php 

class manusia{
    
        public $nama = "girban gtg";
    
        private function tampilkan_nama(){
            echo "Nama saya malasja <br>";
        }
        public function keluarkan(){
            $this->tampilkan_nama();
        }
}

$cetak = new manusia();

//manggil method
echo $cetak->keluarkan();
//memanggil property
echo $cetak->nama;


?>