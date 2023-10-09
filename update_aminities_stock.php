<?php 
include 'config.php';
echo $id=$_GET['id'];
$name = ($_REQUEST['name']);
  $stock = ($_REQUEST['stock']);
 
$sql = "UPDATE  amminities SET aminity_name='$name',stock='$stock' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
     header("Location: edit_aminities_stock.php?id=$id");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
?>