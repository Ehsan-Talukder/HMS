<?php include("config.php");
include 'session.php';
  $room_number = ($_REQUEST['room_number']);
  $laundry_items = ($_REQUEST['laundry_items']);
    $status = ($_REQUEST['status']);
  

                             $sql = "SELECT * FROM admin where username='$login_session'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                              
                                        $hotel=$row['hotel_name'];
                                        }}



$sql = "INSERT INTO laundry (room_number,items,Staus,hotel_name) VALUES ('$room_number','$laundry_items','$status','$hotel')";
$text="Employee Added Successfully";
if (mysqli_query($conn, $sql)) {
    header("Location: create_employees.php?text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
