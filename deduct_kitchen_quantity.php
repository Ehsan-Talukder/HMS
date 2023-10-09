<?php include 'header.php';

$text = $_GET['text'];

$id = $_GET['id'];

$sql = "SELECT * FROM kitchen where id=$id ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $available_item_name = $row['available_item_name'];
        $available_item_quantity = $row['available_item_quantity'];
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
                            <h4 class="text-header">Deduct Kitchen Quantity</h4>
                        </div>

                        <div class="card-body">

                            <form action="store_deduct_kitchen_quantity.php?id=<?php echo $id?>" method="POST">

                                <div class="row">

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <label for="laundry_items">Available Item Name</label>
                                        <input id="room_number" type="text" class="form-control" value="<?php echo $available_item_name ?>" name="available_item_name" readonly required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <label for="laundry_items">Available Item Quantity</label>
                                        <input id="room_number" type="text" class="form-control" value="<?php echo $available_item_quantity ?>" name="available_item_quantity" readonly required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <label for="laundry_items">Deduct Kitchen Quantity</label>
                                        <input id="laundry_items" type="number" min="0" class="form-control" name="deduct_kitchen_quantity" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Deduct Quantity
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