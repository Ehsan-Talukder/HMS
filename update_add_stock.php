<?php 
include 'config.php';
echo $id=$_GET['id'];
$name = ($_REQUEST['name']);
  $stock = ($_REQUEST['stock']);
 
                           
                             
                                    $sql = "SELECT * FROM amminities where id=$id";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                       $stock_old=$row['stock'];
                                    }}
                                    $stock+=$stock_old;
                                    $text="Stock added Successfully";
$sql = "UPDATE  amminities SET aminity_name='$name',stock='$stock' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
     header("Location: add_stock.php?id=$id&&text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
?>