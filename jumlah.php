<?php
    include('header.php');
    $tempat2 = $_GET['tempat'];
    // echo $tempat2;

    $jenis2 = $_GET['jenis'];
    // echo $jenis2;
?>
<br>
<div class=row>
  <div class="col text-center"  style="margin: 10px">
    <h1 class="display-4">Jumlah Orang</h1>
  </div>
</div>
<br>
<div class="container">
<div class=row style="margin: 10px">

  <div class=col>
    <div class="card">
        <a href="biaya.php?tempat=<?php echo $tempat2?>&jenis=<?php echo $jenis2?>&jumlah=Solo"><img src="img/jumlah/single.jpg" class="card-img-top" href="#" alt=""></a>
        <div class="card-body">
            <h5 class="card-title">Solo</h5>
            <p class="card-text">Cocok untuk anda yang ingin menyendiri ataupun jomblo</p>
        </div>
      </div>
    </div>
    
    <div class=col>
    <div class="card">
        <a href="biaya.php?tempat=<?php echo $tempat2?>&jenis=<?php echo $jenis2?>&jumlah=Couple"><img src="img/jumlah/couple.jpg" class="card-img-top" href="#" alt=""></a>
        <div class="card-body">
            <h5 class="card-title">Couple</h5>
            <p class="card-text">Cocok untuk anda yang ingin menghabiskan waktu berduaan bersama pasangan</p>
        </div>
      </div>
    </div>

    <div class=col>
    <div class="card" >
        <a href="biaya.php?tempat=<?php echo $tempat2?>&jenis=<?php echo $jenis2?>&jumlah=Family"><img src="img/jumlah/family.jpg" class="card-img-top" href="#" alt=""></a>
        <div class="card-body">
            <h5 class="card-title">Family</h5>
            <p class="card-text">Habiskan waktu bersama keluarga tercinta karena harta yang pang berharga adalah keluarga</p>
        </div>
      </div>
    </div>

    <div class=col>
    <div class="card" >
        <a href="biaya.php?tempat=<?php echo $tempat2?>&jenis=<?php echo $jenis2?>&jumlah=Group"><img src="img/jumlah/group.jpg" class="card-img-top" href="#" alt=""></a>
        <div class="card-body">
            <h5 class="card-title">Groups</h5>
            <p class="card-text">Cocok untuk liburan bersama teman-teman ataupun grup</p>
        </div>
      </div>
    </div>

  </div>
</div>

</div>

<br>
<br>


<?php
    include('footer.php');
?>
    
