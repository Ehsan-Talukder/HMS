<?php include("config.php");
include 'session.php';
$available_item_name = ($_REQUEST['available_item_name']);
$available_item_quantity = ($_REQUEST['available_item_quantity']);

$unit_price = ($_REQUEST['unit_price']);

$total=$unit_price*$available_item_quantity;




$sql = "INSERT INTO kitchen (available_item_name, available_item_quantity,unit_price,total_price) VALUES ('$available_item_name', '$available_item_quantity','$unit_price','$total')";
$text = "Employee Added Successfully";
if (mysqli_query($conn, $sql)) {
    header("Location: kitchen.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
