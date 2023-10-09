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
                            <h4 class="text-header">Add Employee</h4>
                        </div>

                        <div class="card-body">

                            <form action="store_employee.php" method="POST">

                                <div class="row">

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <level>Employee Name</level>
                                        <input id="name" type="text" placeholder="Employee Name" class="form-control" name="name" autofocus required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <level>Employee Designation</level>
                                        <input id="designation" type="text" placeholder="Employee Designation" class="form-control" name="designation" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <level>Employee Status</level>
                                        <select class="form-control" name="status" required>
                                            <option>Select Employee Status</option>
                                            <option>Active</option>
                                            <option>Inactive</option>

                                        </select>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <level>Employee Contact Number</level>
                                        <input id="phone" type="text" placeholder="Employee Contact Number" pattern="[0-9]{11}" class="form-control" name="phone" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <level>Employee Salary</level>
                                        <input id="salary" type="text" placeholder="Employee Salary" class="form-control" name="salary" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <level>Employee Work Area</level>
                                        <select class="form-control" name="work_area" required>
                                            <option>Select Work Area</option>
                                            <option>Admin</option>
                                            <option>Front Desk Office</option>
                                            <option>Account Management</option>
                                            <option>HR Management</option>
                                            <option>Room Service</option>
                                            <option>Restaurent Management</option>

                                        </select>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <level>Employee Email</level>
                                        <input id="salary" type="text" placeholder="Employee Email" class="form-control" name="email" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <level>Employee Account Password</level>
                                        <input id="salary" type="password" placeholder="Employee Account Password" class="form-control" name="password" required>
                                    </div>

                                    <div class="form-group text-center col-12 col-sm-12 col-md-12 col-lg-12" style="text-align:center">
                                        <level></level>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block text-center">
                                            Add Employee
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