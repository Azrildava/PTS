<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Tugas OOP</title>
  </head>
  <body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <a class="navbar-brand" href="#">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="form.php">Pendaftaran <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="form2.php">Data ortu <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 bg-light" type="submit">Search</button>
    </form>
  </div>
</nav>
  <!-- /NAVBAR -->

  <center><img src="../logoSMK.png" style="width:30%;" alt="">


  </center>

  <!-- CONTENT -->
  <div class="card mt-5 ml-5 mr-5 bg-warning">
  <div class="card-header">
    Form pendaftaran
  </div>
  <div class="card-body">
  <form method="post" action="">
  <div class="form">
    <div class="form-group">
      <label for="exampleInputNama">Nama Ayah</label>
      <input type="text" class="form-control" placeholder="Nama Ayah" name="nama_ayah">
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">tanggal lahir (ayah)</label>
    <input type="date" class="form-control" name="tanggal_lahir_ayah">
  </div>
  <div class="form-group">
      <label for="exampleInputNama">Nama Ibu</label>
      <input type="text" class="form-control" placeholder="Nama Depan" name="nama_ibu">
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">tanggal lahir (Ibu)</label>
    <input type="date" class="form-control" name="tanggal_lahir_ibu">
  </div>



  <button type="submit" class="btn btn-danger" name="daftar">GAS LEE</button>
</form>
  </div>
</div>
</div>
  <!-- /CONTENT -->



  

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

<?php 
echo "<h2><b></b></h2>";
echo "<pre>";
if(isset($_POST['daftar'])){
    $nama_ayah = $_POST['nama_ayah'];
    $tanggal_lahirayah = $_POST['tanggal_lahir_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $tanggal_lahiribu = $_POST['tanggal_lahir_ibu'];

    class hasil {
        public function pendaftaran($nama_ayah2,$tanggal_lahirayah2,$nama_ibu2,$tanggal_lahiribu2){
          ?>
          <center>
          <div class="card text-white bg-success mb-3 mt-5  " name="hasil" style="max-width: 35rem;">
          <div class="card-header"><h3>Hasil Pendaftaran</h3></div>
          <div class="card-body">
          <h4 class="card-title md-5">yeayy sukses mendaftar</h4>
            <table><pre>
              <tr>
                <td>Nama Ayah</td>
                <td></td>
                <td></td>
                <td>:</td>
                <td><?php echo $nama_ayah2 ?></td>
              </tr>
              <tr>
                <td>Tanggal Lahir(ayah)</td>
                <td></td>
                <td></td>
                <td>:</td>
                <td><?php echo $tanggal_lahirayah2 ?></td>
              </tr>
              <tr>
                <td>Nama Ibu</td>
                <td></td>
                <td></td>
                <td>:</td>
                <td><?php echo $nama_ibu2 ?></td>
              </tr>
              <tr>
                <td>Tanggal Lahir(ibu)</td>
                <td></td>
                <td></td>
                <td>:</td>
                <td><?php echo $tanggal_lahiribu2 ?></td>
              </tr>
        
              </pre></table>
          </div>
        </div>
        </center>
<?php
        }
    }

    $cetak = new hasil();

    echo $cetak->pendaftaran($nama_ayah,$tanggal_lahirayah,$nama_ibu,$tanggal_lahiribu);
}

?>