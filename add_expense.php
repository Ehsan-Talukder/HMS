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
                            <h4 class="text-header">Add Expenses</h4>
                        </div>

                        <div class="card-body">

                            <form action="store_expense.php" method="POST">

                                <div class="row">
                                    <!--<div class="form-group col-4">-->
                                    <!--  <input id="expense_date" type="date" placeholder="" class="form-control" name="expense_date" autofocus required>-->
                                    <!--</div>-->

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input id="expense_amount" type="number" placeholder="Ammount" class="form-control" name="expense_amount" required>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <textarea name="expense_reason" placeholder="Expense Reason" style="width: 100%;"></textarea>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12 mt-5">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Submit
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
            <!--<div class="mb-4 text-muted text-center">-->
            <!--  Already Registered? <a href="auth-login.html">Login</a>-->
            <!--</div>-->
        </div>
    </section>
</div>

<?php include 'footer.php' ?>