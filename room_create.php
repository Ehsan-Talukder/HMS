<?php include("config.php");
include 'session.php';
$sql = "SELECT * FROM admin where username='$login_session'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            
                                            $hotel=$row['hotel_name'];
                                        }}
echo  $room_number = ($_REQUEST['room_number']);
echo  $room_category = ($_REQUEST['room_category']);
echo  $status = ($_REQUEST['status']);
echo  $available_for = ($_REQUEST['available_for']);
echo  $room_rate = ($_REQUEST['room_rate']);



$sql = "INSERT INTO room (room_number,room_category,status,available_for,room_rate,hotel_name) VALUES ('$room_number','$room_category','$status','$available_for','$room_rate','$hotel')";
$text="Room Added Successfully";
if (mysqli_query($conn, $sql)) {
    header("Location: room_add.php?text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
