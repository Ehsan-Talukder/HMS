<?php include("config.php");
include 'session.php';
$t_date = date("Y-m-d");
$id=$_GET['id'];
  $bank_name = ($_REQUEST['bank_name']);
  $account_number = ($_REQUEST['account_number']);
    $add_balance = ($_REQUEST['add_balance']);
     $purpose = ($_REQUEST['purpose']);
   $sql = "SELECT * FROM bank where id=$id";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $current_balance=$row['current_balance'];
                                        }}
$current_balance+=$add_balance;
                
$transfer='Deposite';


$sql = "INSERT INTO bank_statement (bank_name,account_number,transfer,date,ammount,current_balance,purpose,bank_id) VALUES ('$bank_name','$account_number','$transfer','$t_date','$add_balance','$current_balance','$purpose','$id')";
$text="Employee Added Successfully";
if (mysqli_query($conn, $sql)) {
    // header("Location: bank_opening_balance.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}



$sql = "UPDATE  bank SET current_balance='$current_balance' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
     header("Location: bank_opening_balance.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}