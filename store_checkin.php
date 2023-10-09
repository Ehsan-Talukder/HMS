<?php include("config.php");
  $guest_name = ($_REQUEST['guest_name']);
  $contact_number = ($_REQUEST['contact_number']);
  $email = ($_REQUEST['email']);
   $room_number = ($_REQUEST['room_number']);
  $ref_by = ($_REQUEST['ref_by']);
  $age = ($_REQUEST['age']);
  $birth_date = ($_REQUEST['birth_date']);
  $gender = ($_REQUEST['gender']);
  $pax = ($_REQUEST['pax']);
  $present_address = ($_REQUEST['present_address']);
  $permanent_address = ($_REQUEST['permanent_address']);
  $nationality = ($_REQUEST['nationality']);
   $identity = ($_REQUEST['identity']);
  $purpose_of_visit = ($_REQUEST['purpose_of_visit']);
  $in_date = ($_REQUEST['in_date']);
  $out_date = ($_REQUEST['out_date']);
  $special_note = ($_REQUEST['special_note']);
  $date1 = new DateTime("$in_date");
  $date2 = new DateTime("$out_date");
  $advance_payment=($_REQUEST['advance_payment']);
  $payment_method=($_REQUEST['payment_method']);
  $discount=($_REQUEST['discount']);
echo $diff= $date1->diff($date2)->format("%d");
$statuss="CHECKEDIN";
if($date2<$date1){
    echo $validity="Invalid";
}
include 'session.php';

$sql = "SELECT * FROM reservation order by id desc limit 1";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            
                                            $reservation_no=$row['id'];
                                        }}
                                        
                                        $reservation_no+=100000;
$sql = "SELECT * FROM admin where username='$login_session'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            
                                            $hotel=$row['hotel_name'];
                                        }}
//get the room tarrif

   $sql = "SELECT * FROM room where room_number='$room_number'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            
                                            $rate=$row['room_rate'];
                                        }}
                                        
                                        echo $total=$diff*$rate;


if($discount!=null){
    $total=$total-$discount;
}
if($total==0){
    $total=$rate;
}
$due=$total-$advance_payment;
$flag=1;

    $sql = "INSERT INTO reservation (guest_name) VALUES ('$guest_name')";
// $sql = "INSERT INTO reservation (guest_name,contact_number,email,room_number,ref_by,age,birth_date,gender,pax,present_address,permanent_address,nationality,identity,purpose_of_visit,checkin_date,checkout_date,special_note,total_price,statuss,flag,hotel_name,reservation_date,advance_payment,due_payment,payment_method_advance,discount,booking_number) VALUES ('$guest_name','$contact_number','$email','$room_number','$ref_by','$age','$birth_date','$gender','$pax','$present_address','$permanent_address','$nationality','$identity','$purpose_of_visit','$in_date','$out_date','$special_note','$total','$statuss','$flag','$hotel','$t_date','$advance_payment','$due','$payment_method','$discount','$reservation_no')";
$text="Reservation Added Successfully";
if (mysqli_query($conn, $sql)) {
   
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

//   $sql = "UPDATE  room SET status='Occupied' WHERE room_number='$room_number'";

// if (mysqli_query($conn, $sql)) {
//     header("Location: add_checkin.php?text=$text");
// } else {
//     $error = mysqli_error($conn);
//     echo "ERROR: Could not able to execute  $error";
// }
?>

