<?php include("config.php");
$t_date = date("Y-m-d");
include 'session.php';
 $sql = "SELECT * FROM swim order by id desc limit 1";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $token=$row['token'];
                                        }}else{
                                            $token=0;
                                        }
                                        $token+=1;
  $guest_name = ($_REQUEST['guest_name']);
  $phone = ($_REQUEST['phone']);
  $start_time = ($_REQUEST['start_time']);
  $end_time = ($_REQUEST['end_time']);
   $price = ($_REQUEST['price']);
   $statuss="Active";
   $status="Earning";
  $stage="SwimmingPool";
//Insert into the swim list
$sql = "INSERT INTO swim (guest_name,phone,start_time,end_time,price,token,statuss) VALUES ('$guest_name','$phone','$start_time','$end_time','$price','$token','$statuss')";
$text="Swiming Pool Reservation Added Successfully";
if (mysqli_query($conn, $sql)) {
    
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

//Insert into the employee account access
$sql = "INSERT INTO statement (status,stage,date,ammount,purpose,month,years) VALUES ('$status','$stage','$t_date','$price','$stage','$month','$years')";
$text="Pool Reservation Added Successfully";
if (mysqli_query($conn, $sql)) {
    header("Location: swimming_pool_add.php?text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

?>
