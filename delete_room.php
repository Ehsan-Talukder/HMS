<?php
include 'config.php';
echo $id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM room WHERE id=$id";
$text="Room Deleted Successfully";
if ($conn->query($sql) === TRUE) {
   
header("Location: manage_rooms.php?status=all&&text=$text");
} else {
  echo "Error deleting record: " . $conn->error;
}

// $conn->close();

?>