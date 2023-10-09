<?php 
include 'config.php';
echo $room_number=$_GET['room_number'];
  $sql = "UPDATE  room SET status='Ready To Check In' WHERE room_number='$room_number'";
$text="Room is ready to checkin";
if (mysqli_query($conn, $sql)) {
    header("Location: manage_rooms.php?status=cleaning&&text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
?>