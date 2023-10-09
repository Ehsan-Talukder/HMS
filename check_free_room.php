<!-- ############################## Header Section ############################## -->
<?php include 'header.php'; ?>

<style>
    .card {
        background-color: #fff;
        border-radius: 5px;
        border: 1px solid #ccc;
        padding: 20px;
    }

    .srch-input {
        padding: 10px 10px;
        width: 100%;
        border-radius: 6px;
        border: 1px solid #ccc;
    }

    .srch-btn {
        padding: 5px 10px;
        border-radius: 6px;
        border: none;
        color: #fff;
        background-color: #6777ef;
    }
    @media only screen and (min-width: 766px) {
  .check {
    margin-top:35px;
  }
}
</style>

<section style="margin-bottom:55px;">
    <div class="">
        <!--<div class="row">-->
          
        <!--    <div class="col-12 col-lg-12 col-md-12 col-sm-12">-->
                <div class="card">
                    <form action="">
                        <!--<div style="border-bottom: 1px solid #ccc;">-->
                        <!--    <h4 style="color: black;">Free Room Check</h4>-->
                        <!--</div>-->
                        <div class="row" >
                            <div class="col-12 col-lg-5 col-md-5 col-sm-12">
                                <div style=" padding-bottom: 20px;">
                                    <label for="birthday">Checkin Date:</label>
                                    <input  class="srch-input" type="date" id="birthday" name="birthday">
                                    <!-- <input class="srch-input" type="email" id="email" name="email" placeholder="Enter your email address.."> -->
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 col-md-5 col-sm-12">
                            <div style=" padding-bottom: 20px;">
                                    <label for="birthday">Checkin Date:</label>
                                    <input  class="srch-input" type="date" id="birthday" name="birthday">
                                    <!-- <input class="srch-input" type="email" id="email" name="email" placeholder="Enter your email address.."> -->
                                </div>
                            </div>
                             <div class="col-12 col-lg-2 col-md-2 col-sm-12 check">
                             <div class="text-right">
                               
                            <a href=""><input class="srch-btn" type="submit" value="Check"></a>

                             </div>
                            </div>
                            
                        </div>

                        

                    </form>

                </div>
        <!--    </div>-->
        
        <!--</div>-->
    </div>
</section>

<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                 
                    <div class="card-header">
                        <h4 class="text-center"><?php echo $status?> Room Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="room_add.php" class="btn btn-icon icon-left btn-primary"> Add New</a>
                            </div>

                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <h6 style="background-color: #red;color:#fff"><?php echo $text?></h6>
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
                                    if ($status == "All") {
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
                                                    <td>
                                                    <a href="edit_room.php?id=<?php echo $row['id']?>" class="btn btn-icon btn-info custom_btn_info">Edit</a>
                                                    <a href="delete_room.php?id=<?php echo $row['id']?>" class="btn btn-danger " style="margin-left:10px">Delete</a>
                                                    </td>
                                                </tr>
                                    <?php }
                                        }
                                    } ?>


                                    <?php
                                    if ($status == "Available") {
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
                                                     <td>
                                                    <a href="edit_room.php?id=<?php echo $row['id']?>" class="btn btn-icon btn-info custom_btn_info">Edit</a>
                                                    <a href="delete_room.php?id=<?php echo $row['id']?>" class="btn btn-danger " style="margin-left:10px">Delete</a>
                                                    </td>
                                                </tr>
                                    <?php }
                                        }
                                    } ?>


                                    <?php
                                    if ($status == "cleaning") {
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
                                                    <td><a href="cleaning_complete.php?room_number=<?php echo $row['room_number']?>" class="btn btn-icon icon-left btn-primary"> Cleaning Complete</a></td>
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




<!-- ############################footer section################################ -->

<?php include 'footer.php'; ?>