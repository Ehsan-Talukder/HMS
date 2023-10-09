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
                            <h4 class="text-header">Add Bank Account Opening Balance </h4>
                        </div>

                        <div class="card-body">

                            <form action="store_opening_balance.php" method="POST">

                                <div class="row">

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <label for="laundry_items">Bank Name</label>
                                        <input id="room_number" type="text" class="form-control" value="" name="bank_name" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <label for="laundry_items">Account Number</label>
                                        <input id="room_number" type="text" class="form-control" value="" name="account_number" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <label for="laundry_items">Opening Balance</label>
                                        <input id="laundry_items" type="text" class="form-control" name="opening_balance" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Add Bank
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