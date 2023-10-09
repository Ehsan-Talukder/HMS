<?php
include 'config.php';

echo $username = ($_REQUEST['username']);


echo $password = ($_REQUEST['password']);
$sql = "INSERT INTO admin (username,password) VALUES ('$username','$password')";
if (mysqli_query($conn, $sql)) {
    echo "Records added successfully.";
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}


if ($error != "") {
    echo $text = "You Have An Account !! Please Login";
} else {
    echo $text = "Registration Successful !! Please Login ";
}

?>