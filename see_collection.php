<?php
 include 'header.php';
 $room_number=$_GET['room_number'];
?>


<section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="text-center">Room Wise Collection</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>SL</th>
                            
                            <th>Guest Name</th>
                           
                            <th>Check-In Date</th>
                            <th>Check-Out Date</th>
                          
                            <th>Advance</th>
                            <th>Due</th>
                            <th>Discount</th>
                            <th>Total</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                            
                             <?php
                            
                             $sl=1;
                                    $sql = "SELECT * FROM reservation where ((room_number='$room_number')&&(hotel_name='$hotel')) order by id ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                        
                                    ?>
                                      <tr><a href="">
                                        <td><?php echo  $sl++?></td>
                                         <td><?php echo $row['guest_name']?></td>
                                        <td style="background-color:<?php echo $background_color?>"><?php echo $row['checkin_date']?></td>
                                       
                                        <td><?php echo $row['checkout_date']?></td>
                                        <td style="background-color:<?php echo $background_color?>">৳<?php echo $row['advance_payment']?></td>
                                        <td>৳<?php echo $row['due_payment']?></td>
                                      
                                        <td>৳<?php echo $row['discount']?></td>
                                        <td>৳<?php echo $row['total_price']?></td>
                                         </tr>
                          <?php }}?>
                          
                         
                          
                          
                       
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

<?php include 'footer.php'?>