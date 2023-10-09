<?php include 'header.php';
$staus = $_GET['status'];
?>

<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Manage Room Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="room_add.php" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
                            </div>

                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Room Number</th>
                                        <th>Availability</th>

                                        <th>Category</th>
                                        <th>Status</th>

                                        <th>Type</th>
                                        <th>Rate</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    if ($staus == "all") {
                                        $sl = 1;
                                        $sql = "SELECT * FROM room where hotel_name='$hotel' order by id ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $availability = $row['status'];
                                                if ($availability == 'Ready To Clean') {
                                                    $availability = "Cleaning";
                                                    $background_color = "#FFFF33";
                                                }

                                                if ($availability == 'Ready To Check In') {
                                                    $availability = "Available";
                                                    $background_color = "#ADFF2F";
                                                }

                                                if ($availability == 'Occupied') {
                                                    $availability = "Guest are  in the  room";
                                                    $background_color = "#ff8080";
                                                }
                                    ?>
                                                <tr>
                                                    <td><?php echo  $sl++ ?></td>
                                                    <td><?php echo $row['room_number'] ?></td>
                                                    <td style="background-color:<?php echo $background_color ?>"><?php echo $availability ?></td>

                                                    <td><?php echo $row['room_category'] ?></td>
                                                    <td style="background-color:<?php echo $background_color ?>"><?php echo $row['status'] ?></td>
                                                    <td><?php echo $row['available_for'] ?></td>

                                                    <td>৳<?php echo $row['room_rate'] ?></td>
                                                    <td>Edit and Delete</td>
                                                </tr>
                                    <?php }
                                        }
                                    } ?>


                                    <?php
                                    if ($staus == "available") {
                                        $sl = 1;
                                        $sql = "SELECT * FROM room where status='Ready To Check In' order by id ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $availability = $row['status'];


                                                if ($availability == 'Ready To Check In') {
                                                    $availability = "Available";
                                                    $background_color = "#ADFF2F";
                                                }


                                    ?>
                                                <tr>
                                                    <td><?php echo  $sl++ ?></td>
                                                    <td><?php echo $row['room_number'] ?></td>
                                                    <td style="background-color:<?php echo $background_color ?>"><?php echo $availability ?></td>

                                                    <td><?php echo $row['room_category'] ?></td>
                                                    <td style="background-color:<?php echo $background_color ?>"><?php echo $row['status'] ?></td>
                                                    <td><?php echo $row['available_for'] ?></td>

                                                    <td>৳<?php echo $row['room_rate'] ?></td>
                                                    <td>Edit and Delete</td>
                                                </tr>
                                    <?php }
                                        }
                                    } ?>


                                    <?php
                                    if ($staus == "cleaning") {
                                        $sl = 1;
                                        $sql = "SELECT * FROM room where status='Ready To Clean' order by id ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $availability = $row['status'];


                                                if ($availability == 'Ready To Clean') {
                                                    $availability = "Cleaning";
                                                    $background_color = "#ADFF2F";
                                                }


                                    ?>
                                                <tr>
                                                    <td><?php echo  $sl++ ?></td>
                                                    <td><?php echo $row['room_number'] ?></td>
                                                    <td style="background-color:<?php echo $background_color ?>"><?php echo $availability ?></td>

                                                    <td><?php echo $row['room_category'] ?></td>
                                                    <td style="background-color:<?php echo $background_color ?>"><?php echo $row['status'] ?></td>
                                                    <td><?php echo $row['available_for'] ?></td>

                                                    <td>৳<?php echo $row['room_rate'] ?></td>
                                                    <td><a href="cleaning_complete.php?room_number=<?php echo $row['room_number']?>" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Cleaning Complete</a></td>
                                                </tr>
                                    <?php }
                                        }
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