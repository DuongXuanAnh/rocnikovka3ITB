<div class="container mt-5">
<ul class="nav nav-tabs" id="myTab" role="tablist">


  <?php 
      include('../../modules/Config.php');
      $sql = "SELECT * FROM svetDetail";
      $query = mysqli_query($conn,$sql);
   ?>

    <?php while($radek = mysqli_fetch_array($query)){ ?>     
      <li class="nav-item">
        <a class="nav-link <?php echo $radek['status'] ?>" id="<?php echo $radek['nazev'] ?>-tab" data-toggle="tab" href="#<?php echo $radek['nazev'] ?>" role="tab" aria-controls="svetDetail" aria-selected="<?php echo $radek['selected'] ?>"><?php echo $radek['text'] ?></a>
      </li>
      <?php } ?>
</ul>
<div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="svetDetail" role="tabpanel" aria-labelledby="svetDetail-tab">
            <?php include('../svet/OSveteDetail.php'); ?>
      </div>
      <div class="tab-pane fade" id="historieDetail" role="tabpanel" aria-labelledby="historieDetail-tab">

    </div>
      <div class="tab-pane fade" id="mapyDetail" role="tabpanel" aria-labelledby="mapyDetail-tab">
      
    </div>
      <div class="tab-pane fade" id="knihovnaDetail" role="tabpanel" aria-labelledby="knihovnaDetail-tab">
        
    </div>
      <div class="tab-pane fade" id="bohoveDetail" role="tabpanel" aria-labelledby="bohoveDetail-tab">
       
    </div>
      <div class="tab-pane fade" id="frakciDetail" role="tabpanel" aria-labelledby="frakciDetail-tab">
          <?php include('../frakceDetail/FrakceDetail.php'); ?>
    </div>
      <div class="tab-pane fade" id="rasyDetail" role="tabpanel" aria-labelledby="rasyDetail-tab">
        
      </div>
      <div class="tab-pane fade" id="postavyDetail" role="tabpanel" aria-labelledby="postavyDetail-tab">
        
    </div>
</div>
</div>