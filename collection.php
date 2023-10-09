<?php include 'header.php';
$status = $_GET['status'];
$text=$_GET['text'];
?>

<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center"><?php echo $status?> Collection List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <!--<div class="text-right">-->
                            <!--    <a href="room_add.php" class="btn btn-icon icon-left btn-primary"> Add New</a>-->
                            <!--</div>-->

                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <h6 style="background-color: #red;color:#fff"><?php echo $text?></h6>
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Date</th>
                                        <th>Ammount</th>
                                        <th>Status</th>
                                        <th>Done By</th>
                                        
                                        <!--<th>Actions</th>-->
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    if ($status == "All") {
                                        $sl = 1;
                                        $sql = "SELECT * FROM statement where status='Earning' order by date ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                
                                                
                                               
                                    ?>
                                                <tr>
                                                    <td><?php echo  $sl++ ?></td>
                                                    <td><?php echo  $row['date'] ?></td>
                                                    <td><?php echo  $row['ammount'] ?></td>
                                                    <td><?php echo  $row['stage'] ?></td>
                                                     <td>Front Desk</td>
                                                </tr>
                                                                                                        
                                    <?php }
                                        }
                                    } ?>


                                               <?php
                                    if ($status == "Today") {
                                        $sl = 1;
                                        $t_balance=0;
                                        $sql = "SELECT * FROM statement where ((status='Earning')&&(date='$t_date')) order by id ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                        ?>
                                                <tr>
                                                    <td><?php echo  $sl++ ?></td>
                                                    <td><?php echo  $row['date'] ?></td>
                                                    <td><?php echo  $row['ammount'] ?></td>
                                                    <td><?php echo  $row['stage'] ?></td>
                                                </tr>
                                                                                                        
                                    <?php }
                                        }}
                                    ?>


                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php' ?>