<?php include 'header.php'?>
        <section class="section">
          <div class="row ">
              <?php
                $sql = "SELECT * FROM restaurent_menu where hotel_name='$hotel' order by id ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
              ?>
          
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row">
                   
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pr-0 pt-3 text-center">
                          <a href="food_order.php?id=<?php echo $row['id']?>">
                        <div class="card-content">
                          <h5 class="font-15"><?php echo $row['food_name']?></h5>
                          <h2 class="mb-3 font-18"><?php echo  $row['food_price']?></h2>
                           <h2 class="mb-3 font-18"><?php echo  $row['food_dtails']?></h2>
                        </div>
                        </a>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          <?php }}?>
             
            
       
          
          </div>
          
         
        </section>
       <?php include 'footer.php'?>