<?php
    include('header.php');
    $tempat3 = $_GET['tempat'];
    // echo $tempat2;

    $jenis3 = $_GET['jenis'];
    // echo $jenis2;

    $jumlah3 = $_GET['jumlah'];
    // echo $jenis2;
?>
<br>
      <div class=row>
        <div class="col text-center" style="margin: 10px">
          <h1 class="display-4">Biaya</h1>
        </div>
      </div>
<br>   
    <div class="container">
      <div class=row style="margin: 10px">

        <div class=col>
          <div class="card">
              <a href="hasil.php?tempat=<?php echo $tempat3?>&jenis=<?php echo $jenis3?>&jumlah=<?php echo $jumlah3?>&biaya=Budget"><img src="img/biaya/budget.jpg" class="card-img-top" href="#" alt=""></a>
              <div class="card-body">
                  <h5 class="card-title">Budget</h5>
                 <p class="card-text">Cocok untuk mahasiswa yang berada di akhir bulan dan bagi yang belum gajian</p>
              </div>
            </div>
          </div>
          
          <div class=col>
          <div class="card">
              <a href="hasil.php?tempat=<?php echo $tempat3?>&jenis=<?php echo $jenis3?>&jumlah=<?php echo $jumlah3?>&biaya=Moderate"><img src="img/biaya/moderate.jpg" class="card-img-top" href="#" alt=""></a>
              <div class="card-body">
                  <h5 class="card-title">Modetare</h5>
                 <p class="card-text">Cocok untuk anda yang punya keuangan sedang stabil</p>
              </div>
            </div>
          </div>

          <div class=col>
          <div class="card" >
              <a href="hasil.php?tempat=<?php echo $tempat3?>&jenis=<?php echo $jenis3?>&jumlah=<?php echo $jumlah3?>&biaya=Fancy"><img src="img/biaya/fancy.jpg" class="card-img-top" href="#" alt=""></a>
              <div class="card-body">
                  <h5 class="card-title">Fancy</h5>
                 <p class="card-text">Cocok untuk anda yang rela menghabiskan uang lebih</p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

    <br>
    <br>
    <br>

<?php
    include('footer.php');
?>