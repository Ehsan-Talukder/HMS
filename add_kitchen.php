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
                            <h4 class="text-header">Add Store Information</h4>
                        </div>

                        <div class="card-body">

                            <form action="store_kitchen.php" method="POST">

                                <div class="row">

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <label for="laundry_items">Available Item Name</label>
                                        <input id="room_number" type="text" class="form-control" value="" name="available_item_name" required>
                                    </div>

                                    <div class="form-group col-6 col-sm-6 col-md-6 col-lg-6">
                                        <label for="laundry_items">Available Item Quantity</label>
                                        <input id="room_number" type="number" min="0" class="form-control" value="" name="available_item_quantity" required>
                                    </div>
                                    
                                    <div class="form-group col-6 col-sm-6 col-md-6 col-lg-6">
                                        <label for="laundry_items">Unit Price</label>
                                        <input id="room_number" type="number" min="0" class="form-control" value="" name="unit_price" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Add Kitchen
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