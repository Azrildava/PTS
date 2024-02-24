<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php
if(isset($_POST['daftar'])){

    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit_pendidikan = $_POST['pendidikan'];
    $tanggal_gaji = $_POST['tanggal_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $status_kerja = $_POST['status'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $lainnya = $_POST['lainnya'];

    if ($jabatan == "kepala sekolah") {
        $gaji = 5000000;
    } elseif ($jabatan == "wakasek") {
        $gaji = 4000000;
    } elseif ($jabatan == "guru") {
        $gaji = 3000000;
    } elseif ($jabatan == "karyawan") {
        $gaji = 2000000;
    } else {
        echo "Isi formulir dengan Benar";
    }

    if ($status_kerja == "Tetap") {
        $bonus = 1000000;
    } else  {
        $bonus = 0;
    }

$hasil = ($gaji + $bonus) - $bpjs - $pinjaman - $tabungan - $lainnya;

class Penggajihan{
    public function gaji($no2,$nama2,$unit_pendidikan2,$tanggal_gaji2,$jabatan2,$gaji2,$lama_kerja2,$status_kerja2,$bonus2,$bpjs2,$pinjaman2,$tabungan2,$lainnya2,$hasil){?>
        <center>
            <div class="card border-dark mb-3 mt-5" style="max-width: 35rem;">
                <div class="card-header bg- border-dark text-drag " style="font-size:20px;"><b>HASIL</b></div>
                <div class="card-body text-draf bg-secondary" >
                    <h5 class="card-title">STRUK GAJI</h5>
                    <table class="text-left text-light">
                        <tr>
                            <td>No</td>
                            <td> : </td>
                            <td><?php echo $no2 ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td> : </td>
                            <td><?php echo $nama2 ?></td>
                        </tr>
                        <tr>
                            <td>Unit Pendidikan</td>
                            <td> : </td>
                            <td><?php echo $unit_pendidikan2 ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Gaji</td>
                            <td> : </td>
                            <td><?php echo $tanggal_gaji2 ?></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td> : </td>
                            <td><?php echo $jabatan2 ?></td>
                        </tr>
                        <tr>
                            <td>Gaji</td>
                            <td> : </td>
                            <td>Rp.<?php echo $gaji2 ?></td>
                        </tr>
                        <tr>
                            <td>Lama Kerja</td>
                            <td> : </td>
                            <td><?php echo $lama_kerja2 ?></td>
                        </tr>
                        <tr>
                            <td>Status Kerja</td>
                            <td> : </td>
                            <td><?php echo $status_kerja2 ?></td>
                        </tr>
                        <tr>
                            <td>Bonus</td>
                            <td> : </td>
                            <td>Rp.<?php echo $bonus2 ?></td>
                        </tr>
                        <tr>
                            <td>BPJS</td>
                            <td> : </td>
                            <td>Rp.<?php echo $bpjs2 ?></td>
                        </tr>
                        <tr>
                            <td>Pinjaman</td>
                            <td> : </td>
                            <td>Rp.<?php echo $pinjaman2 ?></td>
                        </tr>
                        <tr>
                            <td>Tabungan</td>
                            <td> : </td>
                            <td>Rp.<?php echo $tabungan2 ?></td>
                        </tr>
                        <tr>
                            <td>Lainnya</td>
                            <td> : </td>
                            <td>Rp.<?php echo $lainnya2 ?></td>
                        </tr>
                        <tr>
                            <td>Gaji Bersih</td>
                            <td> : </td>
                            <td>Rp.<?php echo $hasil ?></td>
                        </tr>
                    </table>
                </div>
         </div>
        </center>
<?php       }
}

$cetak = new penggajihan();

echo $cetak ->gaji($no,$nama,$unit_pendidikan,$tanggal_gaji,$jabatan,$gaji,$lama_kerja,$status_kerja,$bonus,$bpjs,$pinjaman,$tabungan,$lainnya,$hasil);
}

?>