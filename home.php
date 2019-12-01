<?php
    include('header.php');
?>

    <div class="jumbotron jumbotron-fluid">
     <div class="container" style="height: 550px;">
     <br>
     <br>
      <h1 class="display-4">Selamat Datang!</h1>
      <p class="lead">Tour.inc merupakan platform yang merekomendasikan berbagai tempat wisata</p>
      <hr class="my-10">
      <p>Tentukan destinasi yang anda tuju:</p>
      <form action="jenis.php" method="get">
        <select name = "tempat" class="form-control form-control-lg" style=width:200px>
              <option value="Yogyakarta">Kota Yogyakarta</option>
              <option>Sleman</option>
              <option>Bantul</option>
              <option>Gunungkidul</option>
              <option>Kulonprogo</option>
        </select>
        <hr class="my-10">
        <input class="btn btn-primary" type="submit" value="Pilih Lokasi">
        <!-- <a class="btn btn-primary" href="jenis.php" role="button">Pilih Lokasi</a> -->
      </div>
    </div>

<style type="text/css">
    .jumbotron{
    background-image: url(img/back.jpg);
    background-size: cover;
    color: white;}
</style>

<?php
    include('footer.php');
?>