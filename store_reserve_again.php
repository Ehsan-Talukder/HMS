<?php
include 'config.php';
 $guest_name = ($_REQUEST['guest_name']);
 $sql = "INSERT INTO reserve (name) VALUES ('$guest_name')";
$text="Reservation Added Successfully";
if (mysqli_query($conn, $sql)) {
    header("Location: reservation_add.php?text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

?>