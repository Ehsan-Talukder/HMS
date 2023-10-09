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
                            <h4 class="text-header">Add Rooms to <?php echo $hotel ?></h4>
                        </div>

                        <div class="card-body">
                            <form action="room_create.php" method="POST">

                                <div class="row">

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label for="frist_name">Room Number</label>
                                        <input id="room_number" type="number" min="1" class="form-control" name="room_number" autofocus required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Room Category</label>
                                            <select class="form-control" name="room_category" required>
                                                <option>Select Room Category</option>
                                                <option>AC</option>
                                                <option>NON AC</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <label>Status</label>
                                        <select class="form-control" name="status" required>
                                            <option>Select Room Status</option>
                                            <option>Occupied</option>
                                            <option>Ready To Clean</option>
                                            <option>Ready To Check In</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label>Available For</label>
                                        <select class="form-control" name="available_for" required>
                                            <option>Select Room Category</option>
                                            <option>Single</option>
                                            <option>Couple</option>
                                            <option>3 Person Room</option>
                                            <option>4 Person Room</option>
                                            <option>5 Person Room</option>
                                            <option>6 Person Room</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label for="frist_name">Room Rate</label>
                                        <input id="room_number" type="number" min="1" class="form-control" name="room_rate" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Add Room
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