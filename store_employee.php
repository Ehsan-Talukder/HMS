<?php include("config.php");
include 'session.php';
 $sql = "SELECT * FROM admin where username='$login_session'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $hotel=$row['hotel_name'];
                                        }}
  $name = ($_REQUEST['name']);
  $designation = ($_REQUEST['designation']);
  $status = ($_REQUEST['status']);
  $phone = ($_REQUEST['phone']);
   $salary = ($_REQUEST['salary']);
   $work_area = ($_REQUEST['work_area']);
   $password = ($_REQUEST['password']);
   $email = ($_REQUEST['email']);
//Insert into the employee list
$sql = "INSERT INTO employee (name,designation,status,phone,salary,work_area) VALUES ('$name','$designation','$status','$phone','$salary','$work_area')";
$text="Employee Added Successfully";
if (mysqli_query($conn, $sql)) {
    header("Location: create_employees.php?text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

//Insert into the employee account access
$sql = "INSERT INTO admin (username,password,role,hotel_name,full_name,email) VALUES ('$phone','$password','$work_area','$hotel','$name','$email')";
$text="Employee Added Successfully";
if (mysqli_query($conn, $sql)) {
    header("Location: create_employees.php?text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

?>
