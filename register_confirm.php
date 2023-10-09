<?php
include 'config.php';

echo $username = ($_REQUEST['username']);


echo $phone = ($_REQUEST['phone']);

echo $email = ($_REQUEST['email']);

echo $password = ($_REQUEST['password']);

echo $password_confirm = ($_REQUEST['password_confirm']);

echo $hotel_name = "Amar Bari Resort";

echo $access = ($_REQUEST['access']);


$sql = "INSERT INTO admin (username,password,role,hotel_name,full_name,email) VALUES ('$phone','$password','$access','$hotel_name','$username','$email')";
if (mysqli_query($conn, $sql)) {
  
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}


if ($error != "") {
    echo $text = "You Have An Account !! Please Login";
} else {
    echo $text = "Registration Successful !! Please Login ";
}



// /* Redirect browser */
header("Location:index.php?text='$text'");
// exit();
?>

