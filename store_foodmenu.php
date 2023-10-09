<?php include("config.php");

  $food_name = ($_REQUEST['food_name']);
  $food_price = ($_REQUEST['food_price']);
  $food_details = ($_REQUEST['food_details']);
 
include 'session.php';
$sql = "SELECT * FROM admin where username='$login_session'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            
                                            $hotel=$row['hotel_name'];
                                        }}




$sql = "INSERT INTO restaurent_menu (image,food_name,food_price,food_dtails,hotel_name) VALUES ('$filename','$food_name','$food_price','$food_details','$hotel')";
$text="Menu Added Successfully";
if (mysqli_query($conn, $sql)) {
    header("Location: add_food_menu.php?text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
