<?php include 'header.php';
$text = $_GET['text'];

?>

<div id="app">

    <section class="section">

        <div class="container mt-5">

            <div class="row">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12">

                    <div class="card card-primary">

                        <h6 style="background-color: #7CFC00;color:#000"><?php echo $text ?></h6>

                        <div class="card-header">
                            <h4 class="text-header">Confirm Reservations</h4>
                        </div>

                        <div class="card-body">

                            <form action="store_reservation.php" method="POST">

                                <div class="row">

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input id="contact_number" type="text" placeholder="Contact Number" class="form-control" pattern="[0-9]{11}" name="contact_number" autofocus required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input id="guest_name" type="text" placeholder="Guest Name" class="form-control" name="guest_name" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input id="referenced_by" type="text" placeholder="Referenced By" class="form-control" name="ref_by" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input id="email" type="email" placeholder="Guest Email" class="form-control" name="email">
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label>Room Number</label>
                                        <select class="form-control" name="room_number" required>
                                            <option>Select Room</option>
                                            <?php
                                            $sl = 1;
                                            $sql = "SELECT * FROM room where hotel_name='$hotel'  order by id ASC";
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
                                        <label>Room Price</label>
                                        <input id="in_date" type="text" placeholder="Room Price" class="form-control" name="room_price" required>
                                    </div>


                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label>Check In Date</label>
                                        <input id="in_date" type="date" placeholder="Check In Date" class="form-control" name="in_date" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label>Check Out Date</label>
                                        <input id="out_date" type="date" placeholder="Check Out Date" class="form-control" name="out_date" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
                                        <input id="advance_payment" type="text" placeholder="Advance Payment" class="form-control" name="advance_payment" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <div class="form-group">

                                                <select class="form-control" name="payment_method" required>
                                                    <option>Select Payment Method</option>
                                                    <option>Bkash</option>
                                                    <option>Nagad</option>
                                                    <option>Rocket</option>
                                                    <option>Cash</option>
                                                      <option>Card</option>

                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
                                        <input id="discount" type="text" placeholder="Discount" class="form-control" name="discount" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
                                        <input id="Extra Charge" type="text" placeholder="Extra Charge(If Needed)" class="form-control" name="extra_charge" required>
                                    </div>

                                    <div class="form-group row mb-4 col-12 col-sm-12 col-md-12 col-lg-12">
                                        <label class="col-form-label col-12 col-sm-12 col-md-12 col-lg-12">Special Note</label>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <textarea class="summernote-simple" name="special_note"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Confirm Reservation
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