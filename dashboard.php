<?php include 'header.php' ?>
<section class="section">
    <div class="row ">
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="collection.php?status=Today">
                    <div class="card-statistic-4" style="background-color: #e73489;border-radius: 19px;">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pr-0 pt-3 text-center">
                                    <div class="card-content">
                                        <h5 class="font-15">Today's Collection</h5>
                                        <h2 class="mb-3 font-18"><?php echo $t_balance ?></h2>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="expense_list.php?stage=Today">
                    <div class="card-statistic-4" style="background-color: #34bfe7;border-radius: 19px;">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pr-0 pt-3 text-center">
                                    <div class="card-content">
                                        <h5 class="font-15"> Today's Expnese</h5>
                                        <h2 class="mb-3 font-18"><?php echo $t_expense ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!--<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
        <!--    <div class="card">-->
        <!--        <a href="">-->
        <!--            <div class="card-statistic-4" style="border-radius: 19px;height: 110px;">-->
        <!--                <div class="align-items-center justify-content-between">-->
        <!--                    <div class="row ">-->
        <!--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pr-0 pt-3 text-center">-->
        <!--                            <div class="card-content">-->
        <!--                                <a href="check_free_room.php">-->
        <!--                                    <h5 class="font-15" style="margin-top: 1rem;"> Free Room List</h5>-->
        <!--                                </a>-->
        <!--                                <h2 class="mb-3 font-18"></h2>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </a>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="expense_list.php?stage=Monthly">
                    <div class="card-statistic-4" style="background-color: #1ef4e6;border-radius: 19px;">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pr-0 pt-3 text-center">
                                    <div class="card-content">
                                        <h5 class="font-15"> Monthly Expense</h5>
                                        <h2 class="mb-3 font-18"><?php echo $m_expense ?></h2>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="manage_reservations.php?stage=Today">
                    <div class="card-statistic-4" style="background-color: #ff8080;border-radius: 19px;">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pr-0 pt-3  text-center">
                                    <div class="card-content">
                                        <h5 class="font-15">Today's Reservation</h5>
                                        <h2 class="mb-3 font-18"><?php echo $t_reservation ?></h2>


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
                <a href="check_in_list.php?stage=Today">
                    <div class="card-statistic-4" style="background-color:#74ed6d;border-radius: 19px;">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-12col-md-12 col-sm-12 col-xs-12 pr-0 pt-3 text-center">
                                    <div class="card-content">
                                        <h5 class="font-15">Today's Checkin</h5>
                                        <h2 class="mb-3 font-18"><?php echo $t_checkin ?></h2>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Today's Upcomming Checkin Information</h4>
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
                                    <th>Booking Number</th>
                                    <th>Phone Number</th>

                                    <th>Guest Name</th>
                                    <th>Reserved Room</th>

                                    <th>Check In </th>
                                    <th>Check Out</th>

                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
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

                                            <td><?php echo $row['guest_name'] ?></td>
                                            <td><?php echo $row['room_number'] ?></td>


                                            <td><?php echo $row['checkin_date'] ?></td>
                                            <td><?php echo $row['checkout_date'] ?></td>

                                            <td style="display: inline-flex;">
                                                <a href="edit_reservation.php?id=<?php echo $row['id'] ?>" class="btn btn-icon btn-info custom_btn_info">Edit</a>
                                                <a href="edit_checkin.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px">CheckIn</a>
                                                <!--<a href="invoice.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px">Invoice</a>-->
                                                <form action="#" method="post">
                                                    <!--<button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>-->
                                                </form>

                                            </td>
                                        </tr>
                                <?php }
                                } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Manage Checkout Information</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Guest Name</th>
                                    <th>Phone</th>
                                    <th>Referenced </th>
                                    <th>Guest Quantity</th>
                                    <th>Allocated Room</th>
                                    <th>Advance payment</th>
                                    <th>Discount</th>
                                    <th>Due Payment</th>
                                    <th>Total Room Price</th>
                                    <th>Check In</th>
                                    <th>Check Out</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sl = 1;

                                $sql = "SELECT * FROM reservation where (((statuss='Checkin')||(statuss='Reserved'))&&(checkout_date='$t_date')) order by checkout_date ASC";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {


                                ?>
                                        <tr>
                                            <td><?php echo $sl++ ?></td>
                                            <td><?php echo $row['guest_name'] ?></td>
                                            <td><?php echo $row['contact_number'] ?></td>
                                            <td><?php echo $row['ref_by'] ?></td>

                                            <td><?php echo $row['pax'] ?></td>
                                            <td><?php echo $row['room_number'] ?></td>
                                            <td><?php echo $row['advance_payment'] ?></td>
                                            <td><?php echo $row['discount'] ?></td>
                                            <td><?php echo $row['due_payment'] ?></td>
                                            <td><?php echo $row['total_price'] ?></td>
                                            <td><?php echo $row['checkin_date'] ?></td>
                                            <td><?php echo $row['checkout_date'] ?></td>

                                        </tr>
                                <?php }
                                } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
        
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Special Day's of the Guest</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Guest Name</th>
                                    <th>Phone</th>
                                    <th>Referenced </th>
                                    <th>Guest Quantity</th>
                                    
                                    <th>Check In</th>
                                    <th>Check Out</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sl = 1;

                                $sql = "SELECT * FROM reservation where birth_date=$t_date order by id ASC";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {


                                ?>
                                        <tr>
                                            <td><?php echo $sl++ ?></td>
                                            <td><?php echo $row['guest_name'] ?></td>
                                            <td><?php echo $row['contact_number'] ?></td>
                                            <td><?php echo $row['ref_by'] ?></td>

                                            
                                            <td><?php echo $row['checkin_date'] ?></td>
                                            <td><?php echo $row['checkout_date'] ?></td>

                                        </tr>
                                <?php }
                                } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>








</section>
<?php include 'footer.php' ?>