<?php
    include('header.php');
    $tempat1 = $_GET['tempat'];
?>
<br>
      <div class=row>
        <div class="col text-center" style="margin: 10px">
          <h1 class="display-4">Jenis Wisata</h1>
        </div>
      </div>
<br>    
    <div class="container">
      <div class=row style="margin: 10px">
        <div class=col>
          <div class="card">
             <a href="jumlah.php?tempat=<?php echo $tempat1?>&jenis=Calm"><img src="img/jenis/calm.jpg" class="card-img-top" href="#" alt=""></a>
              <div class="card-body">
                  <h5 class="card-title">Calm</h5>
                 <p class="card-text">Nikmati suasana tenang dan relax untuk menghilangkan stress</p>
              </div>
            </div>
          </div>
          
          <div class=col>
          <div class="card">
              <a href="jumlah.php?tempat=<?php echo $tempat1?>&jenis=Tropical"><img src="img/jenis/pant.jpg" class="card-img-top" href="#" alt=""></a>
              <div class="card-body">
                  <h5 class="card-title">Tropical</h5>
                 <p class="card-text">Habiskan waktu senggang dengan keindahan alam di lingkungan tropis</p>
              </div>
            </div>
          </div>

          <div class=col>
          <div class="card" >
              <a href="jumlah.php?tempat=<?php echo $tempat1?>&jenis=Art"><img src="img/jenis/art.jpg" class="card-img-top" href="#" alt=""></a>
              <div class="card-body">
                  <h5 class="card-title">Art Exhabition</h5>
                 <p class="card-text">Nikmati dan manjakan mata dengan berbagai macam keragaman budaya dan karya</p>
              </div>
            </div>
          </div>

          <div class=col>
          <div class="card" >
              <a href="jumlah.php?tempat=<?php echo $tempat1?>&jenis=Historical"><img src="img/jenis/candi.jpg" class="card-img-top" href="#" alt=""></a>
              <div class="card-body">
                  <h5 class="card-title">Historical</h5>
                 <p class="card-text">Kunjungi tempat/situs bersejarah yang berharga </p>
              </div>
            </div>
          </div>


        </div>

        <!-- <div class=row style="margin: 10px">
        <div class=col>
          <div class="card">
              <a href=#><img src="img/jenis/pant.jpg" class="card-img-top" href="#" alt=""></a>
              <div class="card-body">
                  <h5 class="card-title">Anjay </h5>
                 <p class="card-text">Capek gw pengen piknik tapi kemana ya</p>
              </div>
            </div>
          </div>
          
          <div class=col>
          <div class="card">
              <a href=#><img src="img/jenis/pant.jpg" class="card-img-top" href="#" alt=""></a>
              <div class="card-body">
                  <h5 class="card-title">Recreation Park</h5>
                 <p class="card-text">Habiskan waktu bersama keluarga di taman rekreasi, basahi keluarga anda di waterboom</p>
              </div>
            </div>
          </div>

          <div class=col>
          <div class="card" >
              <a href=#><img src="img/jenis/art.jpg" class="card-img-top" href="#" alt=""></a>
              <div class="card-body">
                  <h5 class="card-title">Market</h5>
                 <p class="card-text">Tempat lu beli gorenngan 3</p>
              </div>
            </div>
          </div>
        </div> -->

    </div>
    <br>
    <br>


<?php
    include('footer.php');
?>