<?php include 'header.php';
$stage=$_GET['stage'];?>
        <section class="section">
          <div class="row ">
             <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Statement</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <!--<div class="text-right">-->
                            <!--    <a href="reservation_add.php" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>-->
                            <!--</div>-->

                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Status</th>
                                        <th>Stage</th>
                                       
                                        <th>Date</th>
                                        <th>Ammount</th>
                                        
                                        <th>Purpose </th>
                                        <th>Month</th>
                                        
                                        <!--<th>Actions</th>-->
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                   
                                    $sl = 1;
                                    $sql = "SELECT * FROM statement where ((hotel_name='$hotel')&&(month='$month')) order by date DESC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                            
                                    ?>
                                            <tr style="background-color:<?php echo $background_color ?>">
                                                <td><?php echo $sl++ ?></td>
                                                <td><?php echo $row['status'] ?></td>
                                                <td><?php echo $row['stage'] ?></td>
                                                
                                                <td><?php echo $row['date'] ?></td>
                                                <td><?php echo $row['ammount'] ?></td>
                                               

                                                <td><?php echo $row['purpose'] ?></td>
                                                <td><?php echo $row['month'] ?></td>
                                                
                                                
                                            </tr>
                                    <?php 
                                    } }?>
                                     
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
            
            </div>
          
        </section>
       <?php include 'footer.php'?>