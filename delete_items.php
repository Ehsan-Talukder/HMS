<?php 
include 'config.php';
$id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM amminities WHERE id=$id";
$text="Aminity items Deleted Successfully";
if ($conn->query($sql) === TRUE) {
    header("Location: aminities_stock-list.php?text=$text");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>