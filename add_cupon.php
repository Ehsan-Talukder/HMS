<?php include 'header.php';
$text = $_GET['text'];
?>

<div id="app">

    <section class="section">

        <div class="container mt-5">

            <div class="row">

                <div class="col-12 col-sm-12 col-md-12  col-lg-12  col-xl-12 ">

                    <div class="card card-primary">

                        <h6 style="background-color: #7CFC00;color:#000"><?php echo $text; ?></h6>

                        <div class="card-header">
                            <h4 class="text-header">Add Cupon</h4>
                        </div>

                        <div class="card-body">

                            <form action="store_cupon.php" method="POST">

                                <div class="row">
                                    <!--<div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">-->
                                    <!--  <input id="expense_date" type="date" placeholder="" class="form-control" name="expense_date" autofocus required>-->
                                    <!--</div>-->

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <level>Cupon Name</level>
                                        <input id="expense_amount" type="text" placeholder="Cupon Name" class="form-control" name="voucher_name" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <level>Cupon Code</level>
                                        <input id="expense_amount" type="number" placeholder="Cupon Code" class="form-control" name="voucher_code" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <level>Cupon Discount (In Percentage)</level>
                                        <input id="expense_amount" type="number" placeholder="Cupon Discount (In Percentage)" class="form-control" name="voucher_discount" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <level>Cupon Release Date</level>
                                        <input id="expense_amount" type="date" placeholder="" class="form-control" name="voucher_release_date" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <level>Cupon End Date</level>
                                        <input id="expense_amount" type="date" placeholder="" class="form-control" name="voucher_closing_date" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Submit
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!--<div class="mb-4 text-muted text-center">-->
                <!--  Already Registered? <a href="auth-login.html">Login</a>-->
                <!--</div>-->
            </div>
        </div>
    </section>

</div>

<?php include 'footer.php'; ?>