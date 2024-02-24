<!DOCTYPE html>
<html lang="en">
    <title>Document</title>
<body>
    <h2><b><center>DAFTAR SMK</center></b></h2>
    <center>
    <!-- form -->
    <form method ="POST" action="">
        <table>
        <tr>
            <td>nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>tanggal lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal"></td>
        </tr>
        <tr>
            <td>jenis kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jk" value="lakilaki"> Laki-laki
                <input type="radio" name="jk" value="perempuan"> Perempuan
            </td>
        </tr>
        <tr>
            <td>biaya register</td>
            <td>:</td>
            <td><input type="number" name="biaya"></td>
        </tr>
        <tr>
            <td>jurusan</td>
            <td>:</td>
            <td>
                <select name="jurusan">
                    <option value=""></option>
                    <option value="RPL">RPL</option>
                    <option value="TBSM">TBSM</option>
                    <option value="TKRO">TKRO</option>>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value="daftar" ></td>
        </tr>
        </table>
    </form>
    </center>
</body>
</html>

    <?php
    if(isset($_POST['simpan'])) {
        $a =$_POST ['nama'];
        $b =$_POST ['tanggal'];
        $c =$_POST ['jk'];
        $d =$_POST ['biaya'];
        $e =$_POST ['jurusan'];

                if ($e == "RPL") {
                    $harga = 2500000;
                } elseif ($e == "TKRO") {
                    $harga = 3000000;
                }elseif ($e == "TBSM") {
                    $harga = 3500000;
                }else {
                    echo "Pilih Jurusan Anda";
                }
        
         $total = $d + $harga;

        echo "<center>";
        echo "<b><h2>==========>STRUK REGISTER<==========</h2></b> <br>";
        echo " Nama                      : $a <br>";
        echo " Tanggal lahir             : $b <br>";
        echo " Jenis kelamin             : $c <br>";
        echo " Biaya register            :Rp. $d <br>";
        echo " Jurusan                   : $e <br>";
        echo " Biaya jurusan             :Rp. $harga <br>";
        echo " Total pembayaran          :Rp. $total <br>";
        echo "</center>";
    }
    



    ?>
