<?php include 'header.php';
include 'config1.php';
$text=$_GET['text'];
?>

<section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="text-center">Booking Request</h4>
                  </div>
                  <div class="card-body">
                       <h6 style="background-color: #7CFC00;color:#000"><?php echo $text?></h6>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>SL</th>
                             <th>Guest Contact Number</th>
                            <th>Guest Email</th>
                             <th>Arrival Date</th>
                            <th>Deperture Date</th>
                             <th>Number Of Adults</th>
                            <th>Number Of Childs</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                             <?php
                           
                             $sl=1;
                                    $sql = "SELECT * FROM booking_request order by id ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                       
                                    ?>
                                      <tr>
                                        <td><?php echo  $sl++?></td>
                                         <td><?php echo $row['guest_phone']?></td>
                                        <td><?php echo $row['guest_email']?></td>
                                        <td><?php echo $row['arival_date']?></td>
                                        <td><?php echo $row['deperture_date']?></td>
                                        <td><?php echo $row['adult_guest_number	']?></td>
                                        <td><?php echo $row['child_guest_number']?></td>
                                       
                                       
                                <td style="display:inline-flex">
                                     <!--<a href="reservation_add.php?id=<?php echo $row['id']?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px">Confirm Reservation</a>-->
                                     <a href="delete_items.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-info custom_btn_info" style="margin-left:10px">Delete Reservation</a>
                                     
                                </td>
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