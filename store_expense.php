<?php include("config.php");
$t_date=date("Y-m-d");
$month=date("m");
$year=date("y");
if($month==1){
 $month='January';}elseif($month==2){
 $month='February';}elseif($month==3){
 $month='March';}elseif($month==4){
 $month='April';}elseif($month==5){
 $month='May';}elseif($month==6){
 $month='June';}elseif($month==7){
 $month='July';}elseif($month==8){
 $month='Augest';}elseif($month==9){
 $month='September';}elseif($month==10){
 $month='October';}elseif($month==11){
 $month='November';}elseif($month==12){
 $month='December';}

  $expense_date = ($_REQUEST['expense_date']);
  $expense_amount = ($_REQUEST['expense_amount']);
  $expense_reason = ($_REQUEST['expense_reason']);
 
include 'session.php';
$sql = "SELECT * FROM admin where username='$login_session'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            
                                            $hotel=$row['hotel_name'];
                                        }}




$sql = "INSERT INTO expences (expense_ammount,expense_date,expense_reason,hotel_name,month,year) VALUES ('$expense_amount','$t_date','$expense_reason','$hotel','$month','$year')";
$text="Expense Added Successfully";
if (mysqli_query($conn, $sql)) {
    // header("Location: add_expense.php?text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
$statusss="Expense";
$stages="-";
// $purpose="Room Reservation";
$sql = "INSERT INTO statement (status,stage,date,ammount,purpose,month,hotel_name,years) VALUES ('$statusss','$stages','$t_date','$expense_amount','$expense_reason','$month','$hotel','$year')";
$text="Reservation Added Successfully";
if (mysqli_query($conn, $sql)) {
    header("Location: add_expense.php?text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
?>


