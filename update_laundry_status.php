<?php 
include 'config.php';
echo $id=$_GET['id'];

  
  $status = ($_REQUEST['status']);

 
                           $sl=1;
                                    $sql = "SELECT * FROM laundry where id=$id";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $room_number=$row['room_number'];
                                    }}

$sql = "UPDATE  laundry SET Staus='$status' WHERE id=$id";
$text="Status Updated Successfully";
if (mysqli_query($conn, $sql)) {
     header("Location: see_laundry_items.php?room_number=$room_number&&text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}


?>