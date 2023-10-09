<?php 
include 'config.php';
echo $id=$_GET['id'];
$guest_name = ($_REQUEST['guest_name']);
  $contact_number = ($_REQUEST['contact_number']);
  $email = ($_REQUEST['email']);
   $room_number = ($_REQUEST['room_number']);
  $ref_by = ($_REQUEST['ref_by']);
  $age = ($_REQUEST['age']);
  $birth_date = ($_REQUEST['birth_date']);
  $gender = ($_REQUEST['gender']);
   $profession = ($_REQUEST['profession']);
  $pax = ($_REQUEST['pax']);
  $present_address = ($_REQUEST['present_address']);
  $discount = ($_REQUEST['discount']);
  $permanent_address = ($_REQUEST['permanent_address']);
  $nationality = ($_REQUEST['nationality']);
   $identity = ($_REQUEST['identity']);
   $advance_payment = ($_REQUEST['advance_payment']);
  $purpose_of_visit = ($_REQUEST['purpose_of_visit']);
  $in_date = ($_REQUEST['in_date']);
  $payment_method = ($_REQUEST['payment_method']);
  $out_date = ($_REQUEST['out_date']);
  $special_note = ($_REQUEST['special_note']);
  $date1 = new DateTime("$in_date");
  $date2 = new DateTime("$out_date");
echo $diff= $date1->diff($date2)->format("%d");
if($date2<$date1){
    echo $validity="Invalid";
}
include 'session.php';

   $sql = "SELECT * FROM room where room_number='$room_number'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            
                                            $rate=$row['room_rate'];
                                        }}
                                                              echo $total=$diff*$rate;


if($total==0){
    $total=$rate;
}
$total=$total-$discount;
$due=$total-$advance_payment;
$statuss="CHECKEDIN";
$flag=1;
// $sql = "UPDATE  reservation SET statuss='$statuss',guest_name='$guest_name',profession='$profession',contact_number='$contact_number',ref_by='$ref_by',identity='$identity',room_number='$room_number',checkin_date='$in_date',checkout_date='$out_date',email='$email',age='$age',birth_date='$birth_date',pax='$pax',permanent_address='$permanent_address',present_address='$present_address',nationality='$nationality',purpose_of_visit='$purpose_of_visit',gender='$gender',advance_payment='$advance_payment',payment_method_advance='$payment_method',due_payment='$due',total_price='$total',flag='$flag' WHERE id=$id";

$sql = "UPDATE  reservation SET statuss='$statuss',guest_name='$guest_name',profession='$profession',contact_number='$contact_number',ref_by='$ref_by',identity='$identity',room_number='$room_number',checkin_date='$in_date',checkout_date='$out_date',email='$email',birth_date='$birth_date',pax='$pax',permanent_address='$permanent_address',present_address='$present_address',nationality='$nationality',purpose_of_visit='$purpose_of_visit',gender='$gender',advance_payment='$advance_payment',payment_method_advance='$payment_method',due_payment='$due',total_price='$total',flag='$flag' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
$sql = "UPDATE  room SET status='Occupied' WHERE room_number='$room_number'";

if (mysqli_query($conn, $sql)) {
  header("Location: edit_checkin.php?id=$id");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

?>
