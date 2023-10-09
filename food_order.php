<?php include 'header.php';
$text = $_GET['text'];
$id = $_GET['id'];
$ammount = ($_REQUEST['ammount']);
?>
<?php
$sql = "SELECT * FROM restaurent_menu where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $food_name = $row['food_name'];
        $food_price = $row['food_price'];
    }
}
if ($ammount > 0) {
    $total_price = $ammount * $food_price;
} else {
    $total_price =  $food_price;
}


$sql = "SELECT * FROM restaurent_order order by id desc limit 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $order_number = $row['order_number'];
    }
} else {
    $order_number = 1;
    $order_number += 100;
}
$order_number += 1;

?>



<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12  col-lg-12  col-xl-12 ">
                    <div class="card card-primary">
                        <h6 style="background-color: #7CFC00;color:#000"><?php echo $text ?></h6>
                        <div class="card-header">
                            <h4 class="text-header">Create Restaurent Order</h4>
                        </div>
                        <div class="card-body">
                            <form action="create_food_order.php?id=<?php echo $id ?>" method="POST">
                                <div class="row">

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">

                                        <label>Room Number</label>
                                        <select class="form-control" name="guest_room" autofocus required>
                                            <option>Select Room</option>
                                            <option>Not Available</option>
                                            <?php

                                            $sql = "SELECT * FROM reservation where ((statuss='CHECKEDIN')&&(hotel_name='$hotel'))  order by id ASC";
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
                                        <label>Food Name</label>
                                        <select class="form-control" name="food_name" autofocus required>
                                            <option><?php echo $food_name ?></option>
                                            <?php

                                            $sql = "SELECT * FROM restaurent_menu where ((hotel_name='$hotel')&&(food_name!='$food_name'))  order by id ASC";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) { ?>
                                                    <option><?php echo $row['food_name'] ?></option>
                                            <?php }
                                            } ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label>Quantity</label>
                                        <input id="payment" type="number" placeholder="1" value="1" class="form-control" name="ammount" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label>Payment Ammount</label>
                                        <input id="payment" type="text" placeholder="Payment" class="form-control" name="payment" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label>Discount</label>
                                        <input id="discount" type="text" placeholder="Discount" class="form-control" name="discount" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <label>Unit Price</label>
                                        <input id="price" type="text" placeholder="Price" value="<?php echo $total_price ?>" class="form-control" name="price" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Create Order
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </section>
</div>


<?php include 'footer.php' ?>