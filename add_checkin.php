<?php include 'header.php';
$text = $_GET['text'];
?>

<div id="app">

    <section class="section">

        <div class="container mt-5">

            <div class="row">

                <div class="col-12 col-sm-12 col-md-12  col-lg-12  col-xl-12 ">

                    <div class="card card-primary">

                        <h6 style="background-color: #7CFC00;color:#000"><?php echo $text ?></h6>

                        <div class="card-header">
                            <h4 class="text-header">Confirm Check In</h4>
                        </div>

                        <div class="card-body">

                            <form action="store_checkin.php" method="POST">

                                <div class="row">

                                    <div class="form-group col-12 col-sm-12 col-md-4 col-lg-4">
                                        <input id="contact_number" type="text" placeholder="Guest Name" class="form-control" name="guest_name" autofocus required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-4 col-lg-4">
                                        <input id="guest_name" type="number" placeholder="Contact Number" class="form-control" name="contact_number" pattern="[0-9]{11}" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-4 col-lg-4">
                                        <input id="guest_name" type="text" placeholder="Email" class="form-control" name="email" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">

                                        <select class="form-control" name="room_number" required>
                                            <option>Select Room Number</option>
                                            <?php

                                            $sql = "SELECT * FROM room  order by id ASC";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) { ?>
                                                    <option><?php echo $row['room_number'] ?></option>
                                            <?php }
                                            } ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input id="ref_by" type="text" placeholder="Reference By" class="form-control" name="ref_by" autofocus required>
                                    </div>

                                    <!--<div class="form-group col-12 col-sm-12 col-md-4 col-lg-4">-->
                                    <!--    <level>Age</level>-->
                                    <!--    <input id="age" type="text" placeholder="Age" class="form-control" name="age" autofocus required>-->
                                    <!--</div>-->

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <level>Birth Date</level>
                                        <input id="birth_date" type="date" placeholder="Birth Date" class="form-control" name="birth_date" autofocus required>
                                    </div>


                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <level>Gender</level>
                                        <select class="form-control" name="gender" required>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>

                                        </select>
                                    </div>



                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input id="profession" type="text" placeholder="Profession" class="form-control" name="profession" autofocus required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input id="pax" type="text" placeholder="Pax(Guest Quantity)" class="form-control" name="pax" autofocus required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <textarea name="present_address" placeholder="Present Address" style="width: 100%;"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <textarea name="permanent_address" placeholder="Permanent Address" style="width: 100%;"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input id="nationality" type="text" placeholder="Nationality" class="form-control" name="nationality" autofocus required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input id="identity" type="text" placeholder="NID/Passport/Driving License" class="form-control" name="identity" autofocus required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="col-sm-12 col-md-12">
                                            <textarea name="purpose_of_visit" placeholder="Purpose of Visit" style="width: 100%;"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-4 col-lg-4">
                                        <level>Check In Date</level>
                                        <input id="checkindate" type="date" placeholder="Check In Date" class="form-control" name="in_date" autofocus required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-4 col-lg-4">
                                        <level>Check out Date</level>
                                        <input id="checkoutdate" type="date" placeholder="Check out Date" class="form-control" name="out_date" autofocus required>
                                    </div>


                                    <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
                                        <level>Advance Payment</level>
                                        <input id="advance_payment" type="text" placeholder="Advance Payment" class="form-control" name="advance_payment" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <level>Payment Method</level>
                                                <select class="form-control" name="payment_method" required>

                                                    <option>Bkash</option>
                                                    <option>Nagad</option>
                                                    <option>Rocket</option>
                                                    <option>Cash</option>

                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
                                        <level>Discount</level>
                                        <input id="discount" type="text" placeholder="Discount" class="form-control" name="discount" required>
                                    </div>


                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Confirm Check In
                                        </button>
                                    </div>

                                </div>

                            </form>
                        </div>
                        <!--<div class="mb-4 text-muted text-center">-->
                        <!--  Already Registered? <a href="auth-login.html">Login</a>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php' ?>