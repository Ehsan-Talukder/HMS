<?php include("config.php");
include 'session.php';
$t_date = date("Y-m-d");
$id=$_GET['id'];
  echo $available_item_name = ($_REQUEST['available_item_name']);
  echo $available_item_quantity = ($_REQUEST['available_item_quantity']);
  echo  $kitchen_quantity = ($_REQUEST['add_kitchen_quantity']);
    
  $sql = "SELECT * FROM kitchen where id=$id";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $available_item_quantity=$row['available_item_quantity'];
                                        }}
$kitchen_quantity+=$available_item_quantity;
                
// $transfer='Deposite';


// // $sql = "INSERT INTO bank_statement (bank_name,account_number,transfer,date,ammount,current_balance,purpose,bank_id) VALUES ('$bank_name','$account_number','$transfer','$t_date','$add_balance','$current_balance','$purpose','$id')";
// // $text="Employee Added Successfully";
// // if (mysqli_query($conn, $sql)) {
// //     // header("Location: bank_opening_balance.php");
// // } else {
// //     $error = mysqli_error($conn);
// //     echo "ERROR: Could not able to execute  $error";
// // }



$sql = "UPDATE  kitchen SET available_item_quantity='$kitchen_quantity' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
     header("Location: kitchen.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}