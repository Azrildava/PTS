<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>PTS</title>
  </head>
  <body>
   <center><img src="../logoYAYASAN.png" alt="">
    <h2>PENGGAJIHAN <br></h2>
    <h2>GURU/KARYAWAN YAYASAN ASSLAAM</h2>
    </center>

    <!-- content -->
    <div class="card mt-5 ml-5 mr-5 bg-success text-light">
  <div class="card-header bg-secondary">
    Data Penggajihan
    </div>
    <div class="card-body">
    <form method="POST" action="hasil_pts.php">
    <div class="form">
        <div class="form-group">
            <label for="exampleNo">No</label>
            <input type="int" class="form-control" placeholder="No" name="no">
        </div>
        <div class="form-group">
            <label for="exampleNama">Nama</label>
            <input type="text" class="form-control" placeholder="Nama" name="nama">
        </div>
        <div class="form-group">
            <label for="pendidikan" >Unit Pendidikan</label>
            <select class="custom-select"  name="pendidikan">
                <option selected >Pilih unit pendidikan</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="SMK">SMK</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputTanggal">Tanggal Gaji</label>
            <input type="date" class="form-control" name="tanggal_gaji">
        </div>
            <h2 class="text-center">Gaji </h2>
        <div class="form_group">
            <label for="exampleInputJabatan">Jabatan</label>
            <select class="custom-select"  name="jabatan">
            <option selected >Pilih unit pendidikan</option>
            <option value="kepala sekolah">Kepala sekolah</option>
            <option value="karyawan">Karyawan</option>
            <option value="wakasek">Wakasek</option>
            <option value="guru">Guru</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleLamaKerja">Lama Kerja</label>
            <input type="text" class="form-control" placeholder="Lama Kerja" name="lama_kerja">
        </div>
        <div class="form-group">
            <label for="exampleStatus">Status Kerja</label>
            <select class="custom-select" name="status">
                <option selected>Pilih Status Kerja</option>
                <option value="Tetap">Tetap</option>
                <option value="Kontrak">Kontrak</option>
            </select>
        </div>
        <h2 class="text-center">Potongan</h2>
        <div class="form-group">
            <label for="exampleBpjs">BPJS</label>
            <input type="int" class="form-control" placeholder="bpjs" name="bpjs">
        </div>
        <div class="form-group">
            <label for="examplePinjaman">Pinjaman</label>
            <input type="text" class="form-control" placeholder="Pinjaman" name="pinjaman">
        </div>
        <div class="form-group">
            <label for="exampleTabungan">Tabungan</label>
            <input type="text" class="form-control" placeholder="Tabungan" name="tabungan">
        </div>
        <div class="form-group">
            <label for="exampleLainnya">Lainnya</label>
            <input type="text" class="form-control" placeholder="Lainya" name="lainnya">
        </div>
        </div>
    </div>




    <button type="submit" class="btn btn-danger" name="daftar">GAS LEE</button>
    </form>
    </div>
</div>
    <!-- /content -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

