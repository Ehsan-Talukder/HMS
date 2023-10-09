<?php 
include 'config.php';
$id=$_GET['id'];
$status=$_GET['status'];


$sql = "UPDATE  swim SET statuss='$status' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
     header("Location: swimingpool.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

?>