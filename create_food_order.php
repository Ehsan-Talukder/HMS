<?php include("config.php");
  $guest_room = ($_REQUEST['guest_room']);
  $food_name = ($_REQUEST['food_name']);
  $payment = ($_REQUEST['payment']);
  $discount = ($_REQUEST['discount']);
  $ammount = ($_REQUEST['ammount']);
 $id=$_GET['id'];
include 'session.php';
$sql = "SELECT * FROM admin where username='$login_session'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $hotel=$row['hotel_name'];
                                        }}
   $sql = "SELECT * FROM restaurent_menu where food_name='$food_name'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $food_price=$row['food_price'];
                                            $room_due=$row['due_payment'];
                                        }}
                                        
                                        

$sql = "SELECT * FROM reservation where ((hotel_name='$hotel')&&(room_number='$guest_room'))";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                             $guest_name=$row['guest_name'];
                                             $guest_number=$row['contact_number'];
                                             $room_price=$row['total_price'];
                                             $booking_number=$row['booking_number'];
                                            
                                        }}
                                        
$sql = "SELECT * FROM restaurent_order order by id desc limit 1";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                          $order_number=$row['order_number'];
                                            
                                        }}else{
                                             $order_number=1;
                                             $order_number+=1;
                                        }
                                         $order_number+=1;
                                        
                                        $total_price=$food_price*$ammount-$discount;
                                        $due_ammount=$total_price-$payment;

$sql = "INSERT INTO restaurent_order (guest_name,guest_phone,guest_room,food_name,food_price,payment,due_ammount,hotel_name,ammount,order_number,booking_number) VALUES ('$guest_name','$guest_number','$guest_room','$food_name','$food_price','$payment','$due_ammount','$hotel','$ammount','$order_number','$booking_number')";
$text="Order Added Successfully";
if (mysqli_query($conn, $sql)) {
   
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
$new_total=$room_price+$due_ammount;
$room_due+=$due_ammount;
  $sql = "UPDATE  reservation SET total_price='$new_total',due_payment='$room_due' WHERE ((statuss='CHECKEDIN')&&(hotel_name='$hotel'))";

if (mysqli_query($conn, $sql)) {
     header("Location: food_order.php?text=$text&&id=$id");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
