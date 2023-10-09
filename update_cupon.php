<?php
echo $id=$_GET['id'];
 include("config.php");
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

  $voucher_name = ($_REQUEST['voucher_name']);
  $voucher_code = ($_REQUEST['voucher_code']);
  $voucher_discount = ($_REQUEST['voucher_discount']);
  $voucher_release_date = ($_REQUEST['voucher_release_date']);
  $voucher_closing_date = ($_REQUEST['voucher_closing_date']);
 
include 'session.php';
$sql = "SELECT * FROM admin where username='$login_session'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            
                                            $hotel=$row['hotel_name'];
                                        }}
                                        
$sql = "UPDATE  voucher SET voucher_name='$voucher_name',voucher_code='$voucher_code',voucher_discount='$voucher_discount',voucher_release_date='$voucher_release_date',voucher_closing_date='$voucher_closing_date' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    $text="Coupon Updated";
     header("Location: edit_coupon.php?id=$id&&text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

?>