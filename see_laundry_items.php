<?php include 'header.php';
$room_number=$_GET['room_number'];
$text=$_GET['text'];
?>

<section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="text-center">Manage Room Laundry Items</h4>
                    
                  </div>
                  <h6 style="background-color: #7CFC00;color:#000"><?php echo $text?></h6>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>SL</th>
                             <th>Item Name</th>
                             <th>Status</th>
                            <th >Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                             <?php
                           $sl=1;
                                    $sql = "SELECT * FROM laundry where ((hotel_name='$hotel')&&(room_number=$room_number)) order by id ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $status=$row['Staus'];
                                    ?>
                                      <tr>
                                        <td><?php echo  $sl++?></td>
                                         <td><?php echo $row['items']?></td>
                                         <td>
                                             <form action="update_laundry_status.php?id=<?php echo $row['id']?>" method="POST">
                                             <div class="form-group col-8">
                                                    <select class="form-control" name="status" required>
                                                     <option><?php echo $status?></option>
                                                     
                                                     <option>Go For Laundry</option>
                                                    
                                                     <option>Set On The Room</option>
                                                    
                                                  </select>
                    </div>
                    </td>
                    
                    <td>
                        <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Change Status
                    </button>
                  </div>
                        </form>
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