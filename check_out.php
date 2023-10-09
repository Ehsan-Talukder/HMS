<?php echo $id=$_GET['id']?>

<?php 
include 'config.php';
$stauss='CHECKEDOUT';

$t_date=date("Y-m-d");
$month=date("m");
$year=date("y");
if($month==1){
 $month='January';}elseif($month==2){
 $month='February';}elseif($month==3){
 $month='March';}elseif($month==4){
 $month='April';}elseif($month==5){
 $month='May';}elseif($month==6){
 $month='June';}elseif($month==7){
 $month='July';}elseif($month==8){
 $month='Augest';}elseif($month==9){
 $month='September';}elseif($month==10){
 $month='October';}elseif($month==11){
 $month='November';}elseif($month==12){
 $month='December';}

 
                                   
                                    $sql = "SELECT * FROM reservation where id=$id";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $due_ammount=$row['due_payment'];
                                            $hotel=$row['hotel_name'];
                                            $total_price=$row['total_price'];
                                            
                                        }}
$due_payment=0;
$advance_payment=$total_price;


$sql = "UPDATE  reservation SET statuss='CHECKEDOUT', due_payment='$due_payment',advance_payment='$advance_payment' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    // header("Location: check_in_list.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

 $sql = "SELECT * FROM reservation where id=$id";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            
                                            $room_number=$row['room_number'];
                                        }}
                                        echo $room_number;
                                        
                                        $sql = "UPDATE  room SET status='Ready To Clean' WHERE room_number='$room_number'";

if (mysqli_query($conn, $sql)) {
    // header("Location: check_in_list.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

$statusss="Earning";
$stages="Checked Out";
$purpose="Room CheckOut";
$sql = "INSERT INTO statement (status,stage,date,ammount,purpose,month,hotel_name,years) VALUES ('$statusss','$stages','$t_date','$due_ammount','$purpose','$month','$hotel','$year')";
$text="Checkout Successfully";
if (mysqli_query($conn, $sql)) {
    header("Location:  check_in_list.php?text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}


?>