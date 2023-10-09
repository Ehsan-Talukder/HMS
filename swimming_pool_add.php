<?php include 'header.php';
$text = $_GET['text'];
?>
<div id="app">

    <section class="section">

        <div class="mt-5">

            <div class="row">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card card-primary">

                        <h6 style="background-color: #7CFC00;color:#000"><?php echo $text ?></h6>

                        <div class="card-header">
                            <h4 class="text-header">Add Swiming pool Booking</h4>
                        </div>

                        <div class="card-body">
                            <form action="swiming_pool_store.php" method="POST">

                                <div class="row">

                                 <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label for="frist_name">Guest Name</label>
                                        <input id="guest_name" type="text"  class="form-control" name="guest_name" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label for="frist_name">Contact Number</label>
                                        <input id="phone" type="text"  class="form-control" name="phone" required>
                                    </div>

                                  <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label for="frist_name">Start Time</label>
                                        <input id="start_time" type="time"  class="form-control" name="start_time" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label for="frist_name">End Time</label>
                                        <input id="end_time" type="time"  class="form-control" name="end_time" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label for="frist_name">Price</label>
                                        <input id="price" type="number" min="1" class="form-control" name="price" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Add Reservation
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