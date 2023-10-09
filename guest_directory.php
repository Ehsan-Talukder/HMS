<?php include 'header.php';
$stage=$_GET['stage']?>

<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Manage  Checkin Information of <?php echo $stage?></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Guest Name</th>
                                        <th>Phone</th>
                                        <th>Referenced </th>
                                        <th>Email </th>
                                        <th>Identity </th>
                                        <th>Guest Quantity</th>
                                        <th>Allocated Room</th>
                                        <th>Advance payment</th>
                                        <th>Discount</th>
                                        <th>Due Payment</th>
                                        <th>Total Room Price</th>
                                        <th>Check In</th>
                                        <th>Check Out</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    
                                <?php
                                    $sl = 1;
                                    $contact_number=0;
                                    $sql = "SELECT * FROM reservation where ((statuss='CHECKEDIN')||(statuss='CHECKEDOUT')) Order By id DESC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $contact_number=$row['contact_number'];

                                    ?>
                                            <tr style="background-color:<?php echo $background_color ?>">
                                                <td><?php echo $sl++ ?></td>
                                                <td><?php echo $row['guest_name'] ?></td>
                                                <td><?php echo $row['contact_number'] ?></td>
                                                <td><?php echo $row['ref_by'] ?></td>
                                                <td><?php echo $row['email'] ?></td>
                                                 <td><?php echo $row['identity'] ?></td>
                                                <td><?php echo $row['pax'] ?></td>
                                                <td><?php echo $row['room_number'] ?></td>
                                                <td><?php echo $row['advance_payment'] ?></td>
                                                <td><?php echo $row['discount'] ?></td>
                                                <td><?php echo $row['due_payment'] ?></td>
                                                <td><?php echo $row['total_price'] ?></td>
                                                <td><?php echo $row['checkin_date'] ?></td>
                                                <td><?php echo $row['checkout_date'] ?></td>
                                                <td style="display:inline-flex"> 
                                                <!--<a href="edit_checkin.php?id=<?php echo $row['id'] ?>" class="btn btn-icon btn-info custom_btn_info">Reserve Again</a>-->
                                                 <a href="edit_checkin.php?id=<?php echo $row['id'] ?>" class="btn btn-icon btn-info custom_btn_info">Reserve Again</a>
                                                    <!--<a href="invoice.php?id=<?php echo $row['id']?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px">Invoice</a>-->
                                                    <!--<a href="check_out.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px">Checkout</a>-->
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