<?php
include 'header.php';
include 'config.php';
echo $id = $_GET['id'];
$sql = "SELECT * FROM room where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $room_number = $row['room_number'];
        $room_category = $row['room_category'];
        $status = $row['status'];
        $available_for = $row['available_for'];
        $room_rate = $row['room_rate'];
    }
}
?>

<div id="app">

    <section class="section">

        <div class="mt-5">

            <div class="row">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card card-primary">

                        <h6 style="background-color: #7CFC00;color:#000"><?php echo $text ?></h6>

                        <div class="card-header">
                            <h4 class="text-header">Edit Rooms at <?php echo $hotel ?></h4>
                        </div>

                        <div class="card-body">

                            <form action="room_update.php?id=<?php echo $id ?>" method="POST">

                                <div class="row">

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label for="frist_name">Room Number</label>
                                        <input id="room_number" type="number" class="form-control" name="room_number" value="<?php echo $room_number ?>" autofocus required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Room Category</label>
                                            <select class="form-control" name="room_category" required>
                                                <option><?php echo $room_category ?></option>
                                                <option>AC</option>
                                                <option>NON AC</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <label>Status</label>
                                        <select class="form-control" name="status" required>
                                            <option><?php echo $status ?></option>
                                            <option>Occupied</option>
                                            <option>Ready To Clean</option>
                                            <option>Ready To Check In</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Available For</label>
                                            <select class="form-control" name="available_for" required>
                                                <option><?php echo $available_for ?></option>
                                                <option>Single</option>
                                                <option>Couple</option>
                                                <option>3 Person Room</option>
                                                <option>4 Person Room</option>
                                                <option>5 Person Room</option>
                                                <option>6 Person Room</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label for="frist_name">Room Rate</label>
                                        <input id="room_number" type="number" class="form-control" name="room_rate" value="<?php echo $room_rate ?>" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Edit Room
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
</div>
</section>
</div>
<?php include 'footer.php' ?>