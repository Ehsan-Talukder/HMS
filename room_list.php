<?php include 'header.php';
$staus=$_GET['status'];
?>

<section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="text-center">Your Available Rooms</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>SL</th>
                             <th>Room Number</th>
                            <th >Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                             <?php
                             if($staus=="all"){
                             $sl=1;
                                    $sql = "SELECT * FROM room where hotel_name='$hotel' order by id ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                      <tr>
                                        <td><?php echo  $sl++?></td>
                                         <td><?php echo $row['room_number']?></td>
                                       
                                        <td>
                                             <a href="add_laundry_items.php?room_number=<?php echo $row['room_number']?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px">Add Laundry Items Of This Room</a>
                                             <a href="see_laundry_items.php?room_number=<?php echo $row['room_number']?>" class="btn btn-danger btn-info custom_btn_info" style="margin-left:10px">See Laundry Items Of the Room</a>
                                     </td>
                                      </tr>
                          <?php }}}?>
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