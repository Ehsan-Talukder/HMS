<?php include 'header.php';
$stage=$_GET['stage']?>

<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Manage  Banking Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="add_opening_balance.php" class="btn btn-icon icon-left btn-primary"> Add New</a>
                            </div>

                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Bank Name</th>
                                        <th>Account Number</th>
                                        <th>Opening Balance </th>
                                        <th>Current Balance</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sl = 1;
                                    
                                    $sql = "SELECT * FROM bank order by id ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                         

                                    ?>
                                            <tr style="background-color:<?php echo $background_color ?>">
                                                <td><?php echo $sl++ ?></td>
                                                <td><?php echo $row['bank_name'] ?></td>
                                                <td><?php echo $row['account_number'] ?></td>
                                                <td><?php echo $row['opening_balance'] ?></td>
                                                <td><?php echo $row['current_balance'] ?></td>
                                                <td style="display:inline-flex;"> <a href="add_balance_bank.php?id=<?php echo $row['id']?>" class="btn btn-icon btn-info custom_btn_info">Add Balance</a>
                                                    <a href="deduct_balance_bank.php?id=<?php echo $row['id']?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px">Deduct Balance</a>
                                                    <a href="bank_statement.php?id=<?php echo $row['id']?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px">See Statement</a>
                                                </td>
                                            </tr>
                                    <?php }
                                     }?>
                                    
                                    
                                            
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