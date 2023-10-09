<?php include 'header.php';
$text = $_GET['text'];
?>

<div id="app">

    <section class="section">

        <div class="container mt-5">

            <div class="row">

                <div class="col-12 col-sm-12 col-md-12  col-lg-12  col-xl-12 ">

                    <div class="card card-primary">

                        <h6 style="background-color: #7CFC00;color:#000"><?php echo $text ?></h6>

                        <div class="card-header">
                            <h4 class="text-header">Add Food Menu</h4>
                        </div>

                        <div class="card-body">

                            <form action="store_foodmenu.php" method="POST">

                                <div class="row">

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <level style="color:#000;">Food Name</level>
                                        <input id="food_name" type="text" placeholder="Food Name" class="form-control mt-2" name="food_name" autofocus required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <level style="color:#000;">Food Price</level>
                                        <input id="food_price" type="number" placeholder="Food Price" class="form-control mt-2" name="food_price" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <level style="color:#000;">Food Details</level>
                                        <textarea class="mt-2" name="food_details" placeholder="Food Details" style="width: 100%;"></textarea>
                                    </div>


                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Add Menu
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