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
                            <h4 class="text-header">Add Aminity</h4>
                        </div>

                        <div class="card-body">

                            <form action="store_aminity.php" method="POST">

                                <div class="row">

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input id="name" type="text" placeholder="Aminity Name" class="form-control" name="name" autofocus required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input id="designation" type="number" placeholder="Opening Stock" class="form-control" name="stock" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Add Aminity
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

</div>
<?php include 'footer.php' ?>