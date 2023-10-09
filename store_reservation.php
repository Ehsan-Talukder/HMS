<?php include("config.php");


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
                        
                                
  $contact_number = ($_REQUEST['contact_number']);
  $guest_name = ($_REQUEST['guest_name']);
  $ref_by = ($_REQUEST['ref_by']);
  $email = ($_REQUEST['email']);
  $room_number = ($_REQUEST['room_number']);
  $in_date = ($_REQUEST['in_date']);
  $out_date = ($_REQUEST['out_date']);
  $special_note = ($_REQUEST['special_note']);
  $advance_payment = ($_REQUEST['advance_payment']);
   $payment_method = ($_REQUEST['payment_method']);
   $discount = ($_REQUEST['discount']);
   $extra_charge = ($_REQUEST['extra_charge']);
include 'session.php';
$sql = "SELECT * FROM admin where username='$login_session'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            
                                            $hotel=$row['hotel_name'];
                                        }}
 $today=new DateTime("$t_date");                       
$date1 = new DateTime("$in_date");
$date2 = new DateTime("$out_date");
echo $diff= $date1->diff($date2)->format("%d");
if($date2<$date1){
    echo $validity="Invalid";
    $text="Invalid Input";
    $text_color="red";
    
}

  
                                        $sql = "SELECT * FROM reservation where ((hotel_name='$hotel')&&(room_number='$room_number'))";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            
                                            $check_in_date=$row['checkin_date'];
                                            $check_out_date=$row['checkout_date'];
                                            if ($date1>$check_in_date){
                                                $warning="Please Select Other Room";
                                            }
                                        }}
$statuss="Reserved";
//get the room tarrif
$sql = "SELECT * FROM reservation order by id desc limit 1";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            
                                            $reservation_no=$row['id'];
                                        }}
                                        
                                        $reservation_no+=100000;
                               
   $sql = "SELECT * FROM room where room_number='$room_number'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            
                                            $rate=$row['room_rate'];
                                        }}
                                        
                                         $total=$diff*$rate+$extra_charge;


$enter="Yes";
   $sql = "SELECT * FROM guest_directory where contact_number='$contact_number'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            
                                            $enter="No";
                                        }}



if($total==0){
    $total=$rate;
}

$total=$total-$discount;
$due=$total-$advance_payment;
$flag=0;
if($validity!='Invalid'){
$sql = "INSERT INTO reservation (contact_number,guest_name,ref_by,identity,room_number,checkin_date,checkout_date,special_note,total_price,email,statuss,advance_payment,due_payment,payment_method_advance,discount,flag,hotel_name,booking_number,reservation_date,extra_charges) VALUES ('$contact_number','$guest_name','$ref_by','$identity','$room_number','$in_date','$out_date','$special_note','$total','$email','$statuss','$advance_payment','$due','$payment_method','$discount','$flag','$hotel','$reservation_no','$t_date','$extra_charge')";
$text="Reservation Added Successfully";
if (mysqli_query($conn, $sql)) {
    header("Location: reservation_add.php?text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

$statusss="Earning";
$stages="Reserved";
$purpose="Room Reservation";
$sql = "INSERT INTO statement (status,stage,date,ammount,purpose,month,hotel_name,years) VALUES ('$statusss','$stages','$t_date','$advance_payment','$purpose','$month','$hotel','$year')";
$text="Reservation Added Successfully";
if (mysqli_query($conn, $sql)) {
    header("Location: reservation_add.php?text=$text");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
}?>

<?php include 'header.php';
$text=$_GET['text'];

?>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12  col-lg-12  col-xl-12 ">
            <div class="card card-primary">
                 <h6 style="background-color: #7CFC00;color:#000"><?php echo $text?></h6>
              <div class="card-header">
                <h4 class="text-header">Confirm Reservations</h4>
              </div>
              <div class="card-body">
                <form action="store_reservation.php" method="POST">
                  <div class="row">
                    <div class="form-group col-6">
                      <input id="contact_number" type="text" placeholder="Contact Number" class="form-control" pattern="[0-9]{11}" name="contact_number"  value="" autofocus required>
                    </div>
                    
                     <div class="form-group col-6">
                      <input id="guest_name" type="text" placeholder="Guest Name" class="form-control" name="guest_name"  value="" required>
                    </div>
                  
                  </div>
                  
                  
                 <div class="row">
                    <div class="form-group col-6">
                      <input id="referenced_by" type="text" placeholder="Referenced By" class="form-control" name="ref_by"  value="" required>
                    </div>
                    
                     <div class="form-group col-6">
                      <input id="email" type="email" placeholder="Guest Email" class="form-control" name="email" value="" >
                    </div>
                  
                  </div>
                  
                  
                  
                  <div class="form-group">
                    <div class="form-group">
                          <label>Room Number</label>
                          <h6 style="color:red"><?php echo $warning?></h6>
                          <select class="form-control" name="room_number" required>
                             <option> <?php echo $room_number?></option>
                                <?php
                             $sl=1;
                                    $sql = "SELECT * FROM room where ((status!='Occupied')&&(hotel_name='$hotel'))  order by id ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {?>
                            <option><?php echo $row['room_number']?></option>
                            <?php }}?>
                          </select>
                    </div>
                    </div>
                    
                    
                <div class="row">
                    
                    <div class="form-group col-6">
                        <label>Check In Date</label>
                      <input id="in_date" type="date" placeholder="Check In Date" class="form-control" name="in_date"  value="<?php echo $in_date?>" required>
                    </div>
                    
                     <div class="form-group col-6">
                          <label>Check Out Date</label>
                      <input id="out_date" type="date" placeholder="Check Out Date" class="form-control" name="out_date" value="<?php echo $out_date?>" required>
                    </div>
                  
                  </div>
                  
                    <div class="row">
                        
                        <div class="form-group col-4">
                          <input id="advance_payment" type="text" placeholder="Advance Payment" class="form-control" name="advance_payment"  value="<?php echo $advance_payment?>" required>
                        </div>
                        
                         <div class="form-group col-4">
                            <div class="form-group">
                    <div class="form-group">
                        
                          <select class="form-control" name="payment_method" required>
                             <option><?php echo $payment_method?></option>
                            <option>Bkash</option>
                            <option>Nagad</option>
                            <option>Rocket</option>
                            <option>Cash</option>
                           
                          </select>
                    </div>
                    
                    </div>
                        </div>
                        
                        <div class="form-group col-4">
                          <input id="discount" type="text" placeholder="Discount" class="form-control" name="discount" value="<?php echo $discount?>"  required>
                        </div>
                  
                  </div>
                  
                  <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-3 col-md-3 col-lg-3">Special Note</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote-simple"  name="special_note"><?php echo $special_note?></textarea>
                      </div>
                    </div>
                    
                    
                
                  
                  </div>
            
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Confirm Reservation
                    </button>
                  </div>
                </form>
              </div>
              <!--<div class="mb-4 text-muted text-center">-->
              <!--  Already Registered? <a href="auth-login.html">Login</a>-->
              <!--</div>-->
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include 'footer.php'?>
