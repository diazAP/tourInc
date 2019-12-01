<?php
    include('header.php');
    include('koneksi.php');

    $tempat4 = $_GET['tempat'];
    // echo $tempat4;
    // echo "<br>";

    $jenis4 = $_GET['jenis'];
    // echo $jenis4;
    // echo "<br>";

    $jumlah4 = $_GET['jumlah'];
    // echo $jumlah4;
    // echo "<br>";

    $biaya4 = $_GET['biaya'];
    // echo $biaya4;
    // echo "<br>";

    // $view = mysqli_query($con, "SELECT MIN(c11) AS minc11 FROM tb" );
    // $datafetch = mysqli_fetch_all($view, MYSQLI_ASSOC);
    
    

    $view = mysqli_query($con, "SELECT * FROM tb WHERE kota = '$tempat4' AND jenis = '$jenis4' AND jumlah = '$jumlah4' AND biaya = '$biaya4' ORDER BY cpi DESC");
    $datafetch = mysqli_fetch_all($view, MYSQLI_ASSOC);

    
  // echo "<pre>";
  // print_r($datafetch);
  // echo "</pre>";

  // $cpi = ((($datafetch[$i]['c11'] / 1)*100)*0.4)+ ((($datafetch[$i]['c12'] / 1)*100)*0.4)+((($datafetch[$i]['c13'] / 1)*100)*0.4)+((($datafetch[$i]['c14'] / 1)*100)*0.4)+((($datafetch[$i]['c21'] / 1)*100)*0.3)+((($datafetch[$i]['c22'] / 1)*100)*0.3)+((($datafetch[$i]['c23'] / 1)*100)*0.3)+((($datafetch[$i]['c24'] / 1)*100)*0.3)+(((1 / $datafetch[$i]['c31'])*100)*0.3)+(((1 / $datafetch[$i]['c32'])*100)*0.3)+(((1 / $datafetch[$i]['c33'])*100)*0.3);

   // $cpi = ((($datafetch[0]['c11'] / 1)*100)*0.4)+ ((($datafetch[0]['c12'] / 1)*100)*0.4)+((($datafetch[0]['c13'] / 1)*100)*0.4)+((($datafetch[0]['c14'] / 1)*100)*0.4)+((($datafetch[0]['c21'] / 1)*100)*0.3)+((($datafetch[0]['c22'] / 1)*100)*0.3)+((($datafetch[0]['c23'] / 1)*100)*0.3)+((($datafetch[0]['c24'] / 1)*100)*0.3)+(((1 / $datafetch[0]['c31'])*100)*0.3)+(((1 / $datafetch[0]['c32'])*100)*0.3)+(((1 / $datafetch[0]['c33'])*100)*0.3);






?>
      <div class="container">
      <div class=row>
        <div class="col text-left" style="margin: 10px">
          <h1 class="display-4">Rekomendasi</h1>
        </div>
       </div>
      </div>




      <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-1-list" data-toggle="list" href="#list-1" role="tab" aria-controls="home">
            <!-- <img src="img/jenis/pant.jpg" style="width: 18rem;"> nampilin gambar di pojok kiri atas --><?php echo $datafetch[0]['rekomendasi'];?>
            </a>
            <a class="list-group-item list-group-item-action" id="list-2-list" data-toggle="list" href="#list-2" role="tab" aria-controls="profile"><?php echo $datafetch[1]['rekomendasi'];?></a>
            <a class="list-group-item list-group-item-action" id="list-3-list" data-toggle="list" href="#list-3" role="tab" aria-controls="messages"><?php echo $datafetch[2]['rekomendasi'];?></a>
          </div>
        </div>

        <div class="col-8">
          <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-1" role="tabpanel" aria-labelledby="list-1-list">

                    <div class="card mb-3">
                      <img src="<?php echo $datafetch[0]['gambar'];?>" class="card-img-top" alt="...">
                      <div class="card-body">
                      <h6 class="text-right"><div class="badge badge-primary text-wrap" style="width: 7rem;">CPI Score: <?php echo $datafetch[0]['cpi'];?></div></h6> 
                        <h3 class="card-title "><?php echo $datafetch[0]['rekomendasi'];?></h3>
                        <p class="card-text"><?php echo $datafetch[0]['deskripsi'];?></p>
                       </div>
                      </div>
                     </div>

          <div class="tab-pane fade" id="list-2" role="tabpanel" aria-labelledby="list-2-list">
          
          <div class="card mb-3">
                      <img src="<?php echo $datafetch[1]['gambar'];?>" class="card-img-top" alt="...">
                      <div class="card-body">
                      <h6 class="text-right"><div class="badge badge-primary text-wrap" style="width: 7rem;">CPI Score: <?php echo $datafetch[1]['cpi'];?></div></h6> 
                        <h3 class="card-title "><?php echo $datafetch[1]['rekomendasi'];?></h3>
                        <p class="card-text"><?php echo $datafetch[1]['deskripsi'];?></p>
                       </div>
                      </div>
                     </div>


          
          <div class="tab-pane fade" id="list-3" role="tabpanel" aria-labelledby="list-3-list">
          
          <div class="card mb-3">
                      <img src="<?php echo $datafetch[2]['gambar'];?>" class="card-img-top" alt="...">
                      <div class="card-body">
                      <h6 class="text-right"><div class="badge badge-primary text-wrap" style="width: 7rem;">CPI Score: <?php echo $datafetch[2]['cpi'];?></div></h6> 
                        <h3 class="card-title "><?php echo $datafetch[2]['rekomendasi'];?></h3>
                        <p class="card-text"><?php echo $datafetch[2]['deskripsi'];?></p>
                       </div>
                      </div>
                     </div>
      </div>
      </div>
    </div>
</div>

 

<?php
    include('footer.php');
    

?>

