<?php include 'header.php';
$stage=$_GET['stage'];
?>

<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Manage Reservation Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="reservation_add.php" class="btn btn-icon icon-left btn-primary">Add New</a>
                            </div>

                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Booking Number</th>
                                        <th>Phone Number</th>
                                        <th>Refer By</th>
                                        <th>Guest Name</th>
                                        <th>Reserved Room</th>
                                        <th>Advance Payment</th>
                                        <th>Due Payment</th>
                                        <th>Total Price</th>
                                        <th>Paid By</th>
                                        <th>Check In </th>
                                        <th>Check Out</th>
                                        <th>Note</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $sl = 1;
                                    $sql = "SELECT * FROM reservation where ((statuss='Reserved')&&(hotel_name='$hotel')) order by checkin_date ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                            $checkin = $row['checkin_date'];
                                            $date1 = new DateTime("$checkin");
                                            $date2 = new DateTime("$today");
                                            $diff = $date2->diff($date1)->format("%d");
                                            if (($diff < 3) && ($diff > 1)) {
                                                $background_color = "#FFFF33";
                                            }
                                            if (($diff <= 1)) {
                                                $background_color = "#ff8080";
                                            }

                                            if (($diff > 3)) {
                                                $background_color = "#fff";
                                            }
                                            if($stage=='All'){
                                    ?>
                                            <tr style="background-color:<?php echo $background_color ?>">
                                                <td><?php echo $sl++ ?></td>
                                                <td><?php echo $row['booking_number'] ?></td>
                                                <td><?php echo $row['contact_number'] ?></td>
                                                <td><?php echo $row['ref_by'] ?></td>
                                                <td><?php echo $row['guest_name'] ?></td>
                                                <td><?php echo $row['room_number'] ?></td>
                                                <td>৳<?php echo $row['advance_payment'] ?></td>
                                                <td>৳<?php echo $row['due_payment'] ?></td>
                                                <td>৳<?php echo $row['total_price'] ?></td>
                                                <td><?php echo $row['payment_method_advance'] ?></td>

                                                <td><?php echo $row['checkin_date'] ?></td>
                                                <td><?php echo $row['checkout_date'] ?></td>
                                                <td><?php echo $row['special_note'] ?></td>
                                                <td style="display: inline-flex;">
                                                    <a href="edit_reservation.php?id=<?php echo $row['id']?>" class="btn btn-icon btn-info custom_btn_info">Edit</a>
                                                    <a href="edit_checkin.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px">CheckIn</a>
                                                    <a href="invoice.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px">Invoice</a>
                                                    <form action="#" method="post">
                                                        <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>
                                                    </form>

                                                </td>
                                            </tr>
                                    <?php }}
                                    } ?>
                                    
                                    
                                        <?php
                                         if($stage=='Today'){
                                    $sl = 1;
                                    $sql = "SELECT * FROM reservation where ((statuss='Reserved')&&(hotel_name='$hotel')&&(checkin_date='$t_date')) order by checkin_date ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                            $checkin = $row['checkin_date'];
                                            $date1 = new DateTime("$checkin");
                                            $date2 = new DateTime("$today");
                                            $diff = $date2->diff($date1)->format("%d");
                                            if (($diff < 3) && ($diff > 1)) {
                                                $background_color = "#FFFF33";
                                            }
                                            if (($diff <= 1)) {
                                                $background_color = "#ff8080";
                                            }

                                            if (($diff > 3)) {
                                                $background_color = "#fff";
                                            }
                                           
                                    ?>
                                            <tr style="background-color:<?php echo $background_color ?>">
                                                <td><?php echo $sl++ ?></td>
                                                <td><?php echo $row['booking_number'] ?></td>
                                                <td><?php echo $row['contact_number'] ?></td>
                                                <td><?php echo $row['ref_by'] ?></td>
                                                <td><?php echo $row['guest_name'] ?></td>
                                                <td><?php echo $row['room_number'] ?></td>
                                                <td>৳<?php echo $row['advance_payment'] ?></td>
                                                <td>৳<?php echo $row['due_payment'] ?></td>
                                                <td>৳<?php echo $row['total_price'] ?></td>
                                                <td><?php echo $row['payment_method_advance'] ?></td>

                                                <td><?php echo $row['checkin_date'] ?></td>
                                                <td><?php echo $row['checkout_date'] ?></td>
                                                <td><?php echo $row['special_note'] ?></td>
                                                <td style="display: inline-flex;">
                                                    <a href="edit_reservation.php?id=<?php echo $row['id']?>" class="btn btn-icon btn-info custom_btn_info">Edit</a>
                                                    <a href="edit_checkin.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px">CheckIn</a>
                                                    <a href="invoice.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px">Invoice</a>
                                                    <form action="#" method="post">
                                                        <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>
                                                    </form>

                                                </td>
                                            </tr>
                                    <?php }}
                                    } ?>
                                    
                                    
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