<?php
$id = $_GET['id'];
include 'header.php';
$sql = "SELECT * FROM employee  order by id ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $designation = $row['designation'];
        $status = $row['status'];
        $salary = $row['salary'];
        $phone = $row['phone'];
    }
}
?>

<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12  col-lg-12  col-xl-12 ">
                    <div class="card card-primary">
                        <h6 style="background-color: #7CFC00;color:#000"><?php echo $text ?></h6>
                        <div class="card-header">
                            <h4 class="text-header">Update Employee</h4>
                        </div>
                        <div class="card-body">
                            <form action="update_employee.php?id=<?php echo $id ?>" method="POST">
                                <div class="row">
                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input id="name" type="text" placeholder="Employee Name" value="<?php echo $name ?>" class="form-control" name="name" autofocus required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input id="designation" type="text" placeholder="Employee Designation" value="<?php echo $designation ?>" class="form-control" name="designation" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <select class="form-control" name="status" required>
                                            <option><?php echo $status ?></option>

                                            <option>Active</option>
                                            <option>Inactive</option>

                                        </select>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input id="phone" type="text" placeholder="Employee Contact Number" value="<?php echo $phone ?>" class="form-control" name="phone" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input id="salary" type="text" placeholder="Employee Salary" value="<?php echo $salary ?>" class="form-control" name="salary" required>
                                    </div>

                                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Add Employee
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