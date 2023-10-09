<?php include("config.php");
include 'session.php';
  $name = ($_REQUEST['name']);
  $stock = ($_REQUEST['stock']);
$sql = "SELECT * FROM admin where username='$login_session'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            
                                            $hotel=$row['hotel_name'];
                                        }}
$sql = "INSERT INTO amminities (aminity_name,stock,hotel_name) VALUES ('$name','$stock','$hotel')";
$text="Aminity Added Successfully";
if (mysqli_query($conn, $sql)) {
    header("Location: create_aminities.php?text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
