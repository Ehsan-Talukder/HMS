<?php include 'header.php';
$text = $_GET['text'];
$id = $_GET['id'];
    $sql = "SELECT * FROM bank where id=$id ";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $account_number=$row['account_number'];
                                            $bank_name=$row['bank_name'];
                                            
                                        }}
?>

<div id="app">

    <section class="section">

        <div class="mt-5">

            <div class="row">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card card-primary">

                        <h6 style="background-color: #7CFC00;color:#000"><?php echo $text ?></h6>

                        <div class="card-header">
                            <h4 class="text-header"> Bank Account Withdrawal Balance </h4>
                        </div>

                        <div class="card-body">

                            <form action="store_withdraw_balance.php?id=<?php echo $id?>" method="POST">

                                <div class="row">

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <label for="laundry_items">Bank Name</label>
                                        <input id="room_number" type="text" class="form-control" value="<?php echo $bank_name?>" name="bank_name"  readonly required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <label for="laundry_items">Account Number</label>
                                        <input id="room_number" type="text" class="form-control" value="<?php echo $account_number?>" name="account_number" readonly  required>
                                    </div>
                                    
                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <label for="laundry_items">Purpose</label>
                                        <input id="laundry_items" type="text" class="form-control" name="purpose" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <label for="laundry_items">Withdraw Balance</label>
                                        <input id="laundry_items" type="text" class="form-control" name="withdraw_balance" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Add Balance
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