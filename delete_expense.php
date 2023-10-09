<?php
include 'config.php';
echo $id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM expences WHERE id=$id";
$text="Expense items Deleted Successfully";
if ($conn->query($sql) === TRUE) {
    header("Location: expense_list.php?text=$text");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
?>