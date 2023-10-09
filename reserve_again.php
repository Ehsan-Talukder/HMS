<?php 
include 'header.php';
 $id=$_GET['id'];
 $sql = "SELECT * FROM reservation where id=$id";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $guest_name=$row['guest_name'];
                                            $contact_number=$row['contact_number'];
                                            $ref_by=$row['ref_by'];
                                            $identity=$row['identity'];
                                            $room_number=$row['room_number'];
                                            $checkin_date=$row['checkin_date'];
                                            $checkout_date=$row['checkout_date'];
                                            $special_note=$row['special_note'];
                                            $total_price=$row['total_price'];
                                            $email=$row['email'];
                                            $age=$row['age'];
                                            $birth_date=$row['birth_date'];
                                            $profession=$row['profession'];
                                            $pax=$row['pax'];
                                            $permanent_address=$row['permanent_address'];
                                            $present_address=$row['present_address'];
                                            $nationality=$row['nationality'];
                                            $purpose_of_visit=$row['purpose_of_visit'];
                                            $gender=$row['gender'];
                                            $statuss=$row['statuss'];
                                            $advance_payment=$row['advance_payment'];
                                            $discount=$row['discount'];
                                            $payment_method_advance=$row['payment_method_advance'];
                                           
                                        }}
?>

<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12  col-lg-12  col-xl-12 ">
            <div class="card card-primary">
                 <h6 style="background-color: #7CFC00;color:#000"><?php echo $text?></h6>
              <div class="card-header">
                <h4 class="text-header">Confirm Check In</h4>
              </div>
              <div class="card-body">
                <form action="store_reservation.php" method="POST">
                  <div class="row">
                    <div class="form-group col-12 col-sm-12 col-md-4 col-lg-4">
                      <input id="contact_number" type="text" placeholder="Guest Name" value="<?php echo $guest_name?>" class="form-control" name="guest_name" autofocus required>
                    </div>
                    
                     <div class="form-group col-12 col-sm-12 col-md-4 col-lg-4">
                      <input id="guest_name" type="number" placeholder="Contact Number" value="<?php echo $contact_number?>" class="form-control" name="contact_number"  required>
                    </div>
                    
                    <div class="form-group col-12 col-sm-12 col-md-4 col-lg-4">
                      <input id="guest_name" type="text" placeholder="Email" value="<?php echo $email?>" class="form-control" name="email"  required>
                    </div>
                    
                    
                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                   
                          <label>Room Number</label>
                            <select class="form-control" name="room_number" required>
                             <option><?php echo $room_number?></option>
                                <?php
                         
                                    $sql = "SELECT * FROM room where status!='Occupied'  order by id ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {?>
                            <option><?php echo $row['room_number']?></option>
                            <?php }}?>
                          </select>
                    </div>
                    
                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                         <label>Refarence By</label>
                      <input id="ref_by" type="text" placeholder="" value="<?php echo $ref_by?>" class="form-control" name="ref_by" autofocus required>
                    </div>
                    
                    <!-- <div class="form-group col-12 col-sm-12 col-md-4 col-lg-4">-->
                    <!--      <label>Age</label>-->
                    <!--  <input id="age" type="text" placeholder=""  value="<?php echo $age?>" class="form-control" name="age" autofocus required>-->
                    <!--</div>-->
                    
                     <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                         <level>Birth  Date</level>
                      <input id="birth_date" type="date" placeholder="Birth Date" value="<?php echo $birth_date?>" class="form-control" name="birth_date" autofocus required>
                    </div>
                    
                           <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                                        <level>Gender</level>
                                        <option value="<?php echo $gender?>"></option>
                                        <select class="form-control" name="gender" required>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                     
                    
                      <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                        <label>Profession</label>
                      <input id="profession" type="text" placeholder="" value="<?php echo $profession?>" class="form-control" name="profession" autofocus required>
                    </div>
                    
                     <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                          <label>Pax(Guest Quantity)</label>
                      <input id="pax" type="text" placeholder=""  value="<?php echo $pax?>" class="form-control" name="pax" autofocus required>
                    </div>
                    
                      <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                    
                      <div class="col-sm-12 col-md-12">
                          <label>Present Address</label>
                        <textarea name="present_address" placeholder=""><?php echo $present_address?></textarea>
                      </div>
                    </div>
                    
                     <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                     
                      <div class="col-sm-12 col-md-12">
                           <label>Permanent Address</label>
                        <textarea name="permanent_address" placeholder=""><?php echo $permanent_address?></textarea>
                      </div>
                    </div>
                    
                     <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                        <label>Nationality</label>
                      <input id="nationality" type="text" placeholder="Nationality" value="<?php echo $nationality?>" class="form-control" name="nationality" autofocus required>
                    </div>
                    
                     <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                          <label>NID/Passport/Driving License</label>
                      <input id="identity" type="text" placeholder="" value="<?php echo $identity?>"  class="form-control" name="identity" autofocus required>
                    </div>
                    
                    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6">
                      <label>Purpose of Visit</label>
                      <div class="col-sm-12 col-md-12">
                        <textarea name="purpose_of_visit" placeholder="Purpose of Visit"><?php echo $purpose_of_visit?></textarea>
                      </div>
                    </div>
                    
                      <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
                         <level>Check  In Date</level>
                      <input id="checkindate" type="date" placeholder="Check In Date" value="" class="form-control" name="in_date" autofocus required>
                    </div>
                    
                      <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
                         <level>Check out Date</level>
                      <input id="checkoutdate" type="date" placeholder="Check out Date" value="" class="form-control" name="out_date" autofocus required>
                    </div>
                    
                  
                  </div>
                     <div class="row">
                        
                        <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
                            <level>Advance Payment</level>
                          <input id="advance_payment" type="text" placeholder="Advance Payment" value="" class="form-control" name="advance_payment"  required>
                        </div>
                        
                         <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                    <div class="form-group">
                         <level>Payment Method</level>
                          <select class="form-control" name="payment_method" required>
                             <option></option>
                            <option>Bkash</option>
                            <option>Nagad</option>
                            <option>Rocket</option>
                            <option>Cash</option>
                           
                          </select>
                    </div>
                    
                    </div>
                        </div>
                        
                        <div class="form-group col-12 col-sm-12 col-md-3 col-lg-3">
                            <level>Discount</level>
                          <input id="discount" type="text" placeholder="Discount" value="<?php echo $discount?>" class="form-control" name="discount"  required>
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