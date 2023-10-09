<?php include 'header.php';
$text = $_GET['text'];
$room_number = $_GET['room_number'];
?>

<div id="app">

    <section class="section">

        <div class="mt-5">

            <div class="row">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card card-primary">

                        <h6 style="background-color: #7CFC00;color:#000"><?php echo $text ?></h6>

                        <div class="card-header">
                            <h4 class="text-header">Add Laundry Items to Room </h4>
                        </div>

                        <div class="card-body">

                            <form action="store_laundry_items.php" method="POST">

                                <div class="row">

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <label for="laundry_items">Room Number</label>
                                        <input id="room_number" type="text" class="form-control" value="<?php echo $room_number ?>" name="room_number" readonly required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label>Laundry Item Status</label>
                                            <select class="form-control" name="status" required>
                                                <option>Select Status</option>
                                                <option>Set on the room</option>
                                                <option>Go for Cleaning</option>


                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <label for="laundry_items">Available Laundry Items</label>
                                        <input id="laundry_items" type="text" class="form-control" name="laundry_items" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Add Items
                                        </button>
                                    </div>

                                </div>

                            </form>

                        </div>


                    </div>
                    <!--<div class="mb-4 text-muted text-center">-->
                    <!--  Already Registered? <a href="auth-login.html">Login</a>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </section>
</div>


<?php include 'footer.php' ?>