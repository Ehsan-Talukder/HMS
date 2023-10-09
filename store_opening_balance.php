<?php include("config.php");
include 'session.php';
  $bank_name = ($_REQUEST['bank_name']);
  $account_number = ($_REQUEST['account_number']);
    $opening_balance = ($_REQUEST['opening_balance']);
  
$current_balance = ($_REQUEST['opening_balance']);
                



$sql = "INSERT INTO bank (bank_name,account_number,opening_balance,current_balance) VALUES ('$bank_name','$account_number','$opening_balance','$current_balance')";
$text="Employee Added Successfully";
if (mysqli_query($conn, $sql)) {
    header("Location: bank_opening_balance.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
