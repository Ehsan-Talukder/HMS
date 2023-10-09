<?php 
include 'config.php';
echo $id=$_GET['id'];

  $name = ($_REQUEST['name']);
  $designation = ($_REQUEST['designation']);
  $status = ($_REQUEST['status']);
  $phone = ($_REQUEST['phone']);
   $salary = ($_REQUEST['salary']);

 

$sql = "UPDATE  employee SET name='$name',designation='$designation',status='$status',phone='$phone',salary='$salary' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
     header("Location: edit_employee.php?id=$id");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}


?>