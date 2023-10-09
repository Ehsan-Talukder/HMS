<?php include 'header.php';
$text = $_GET['text'];
$id = $_GET['id'];
?>

<?php

$sl = 1;
$sql = "SELECT * FROM expences where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $expense_date = $row['expense_date'];
        $expense_ammount = $row['expense_ammount'];
        $expense_reason = $row['expense_reason'];
    }
} ?>


<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12  col-lg-12  col-xl-12 ">
                    <div class="card card-primary">
                        <h6 style="background-color: #7CFC00;color:#000"><?php echo $text ?></h6>
                        <div class="card-header">
                            <h4 class="text-header">Edit Expenses List</h4>
                        </div>
                        <div class="card-body">
                            <form action="update_expense.php?id=<?php echo $id ?>" method="POST">

                                <div class="row">

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input id="expense_date" type="date" placeholder="" class="form-control" value="<?php echo $expense_date ?>" name="expense_date" autofocus required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input id="expense_amount" type="number" placeholder="Ammount" class="form-control" value="<?php echo $expense_ammount ?>" name="expense_amount" required>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <textarea name="expense_reason" value="<?php echo $expense_reason ?>" placeholder="Expense Reason" style="width: 100%;"><?php echo $expense_reason ?></textarea>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12 mt-4">
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