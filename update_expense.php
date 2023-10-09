<?php 
include 'config.php';
$id=$_GET['id'];
$expense_date = ($_REQUEST['expense_date']);
  $expense_amount = ($_REQUEST['expense_amount']);
  $expense_reason = ($_REQUEST['expense_reason']);
  

$sql = "UPDATE  expences SET expense_ammount='$expense_amount',expense_date='$expense_date',expense_reason='$expense_reason' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
     header("Location: edit_expense.php?id=$id");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

?>