 <?php include 'header.php'?>

<section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="text-center">Manage Swimming-pool Information</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                          <div class="text-right">
                                <a href="swimming_pool_add.php" class="btn btn-icon icon-left btn-primary"> Add New</a>
                            </div>

                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>SL</th>
                           <th>Guest Name</th>
                            <th>Phone</th>
                            <th>Start Time </th>
                            <th>End Time</th>
                            <th>Token No</th>
                            <th>Price</th>
                            <th>Status</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                                    <?php
                             $sl=1;
                             
                                    $sql = "SELECT * FROM swim order by id ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    
                                        $statuuss=$row['statuss'];
                                        ?>
                          <tr>
                            <td><?php echo $sl++?></td>
                            <td><?php echo $row['guest_name']?></td>
                            <td><?php echo $row['phone']?></td>
                            <td><?php echo $row['start_time']?></td>
                            
                            <td><?php echo $row['end_time']?></td>
                            
                            <td><?php echo $row['token']?></td>
                            <td><?php echo $row['price']?></td>
                           <td style="display:inline-flex">
                               <?php if($statuuss!='Cancel'){?>
                                <a href="update_swim.php?status=Completed&&id=<?php echo $row['id']?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px"><?php echo $row['statuss']?></a>
                                <?php }?>
                                <a href="update_swim.php?status=Canceled&&id=<?php echo $row['id']?>" class="btn btn-danger btn-info custom_btn_info" style="margin-left:10px">Cancel</a>
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