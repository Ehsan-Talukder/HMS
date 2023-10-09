<?php
include 'config.php';
echo $id=$_GET['id'];
$room_number = ($_REQUEST['room_number']);
  $room_category = ($_REQUEST['room_category']);
  $status = ($_REQUEST['status']);
  $available_for = ($_REQUEST['available_for']);
  $room_rate = ($_REQUEST['room_rate']);
  
  $sql = "UPDATE  room SET room_number='$room_number',room_category='$room_category',status='$status',available_for='$available_for',room_rate='$room_rate' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
     header("Location: manage_rooms.php?status=All&&text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

?>