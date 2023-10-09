<?php
include 'session.php';
include 'config.php';

   $sql = "SELECT * FROM admin where username='$login_session'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $role=$row['role'];
                                            $hotel=$row['hotel_name'];
                                        }}
                                      
$id=$_GET['id'];
 $sql = "SELECT * FROM reservation where id=$id";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $guest_name=$row['guest_name'];
                                            $guest_address=$row['present_address'];
                                            $chckin_date=$row['checkin_date'];
                                            $checkout_date=$row['checkout_date'];
                                            $advance_payment=$row['advance_payment'];
                                            $total_room_ammount=$row['total_price'];
                                            $booking_number=$row['booking_number'];
                                            $room_number=$row['room_number'];
                                            $booking_number=$row['booking_number'];
                                            $reference=$row['ref_by'];
                                            $discount=$row['discount'];
                                        }}
                                        
                                        $due=$total_room_ammount-$advance_payment;
                                        
                                         $sql = "SELECT * FROM room where ((hotel_name='$hotel')&&(room_number=$room_number)) order by id ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                
                                                $room_price=$row['room_rate'];
                                            }}
                                            
                                            $date1 = new DateTime("$chckin_date");
                                                $date2 = new DateTime("$checkout_date");
                                                 $diff= $date1->diff($date2)->format("%d");
                                                $total_restaurent_due=0;
                                                $total_restaurent_bill=0;
                                         $sql = "SELECT * FROM restaurent_order where ((hotel_name='$hotel')&&(booking_number=$booking_number)) order by id ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $total_restaurent_due+=$row['due_ammount'];
                                               $total_restaurent_bill+=$row['payment'];
                                            }}
                                            $total_due=$total_restaurent_due+$due;
                                            $total_bill=$total_room_ammount+$total_restaurent_bill;
                                                ?>
                                                
<!DOCTYPE html>
<html lang="en">


<!-- invoice.html  21 Nov 2019 04:05:05 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Hotel Management Software</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <!--<div class="loader"></div>-->
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
     
      
     <div class="invoice-content" style="margin-left:120px;margin-right:120px">
        <section class="section">
          <div class="section-body">
            <div class="invoice">
              <div class="invoice-print">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="invoice-title">
                      <h2> Invoice</h2>
                      <div class="invoice-number">Booking Number #<?php echo $booking_number?></div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-6">
                        <address>
                          <strong>Billed To:</strong><br>
                          <?php  echo $guest_name ?><br>
                         <?php echo $guest_address?>
                        </address>
                      </div>
                      
                      <div class="col-md-6 text-right">
                        <address>
                          
                          Room Number  : <?php  echo $room_number ?><br>
                         Arrival       : <?php echo $chckin_date?><br>
                         Deperture     :<?php echo $checkout_date?><br>
                         Booking Number:<?php echo $booking_number?>
                        </address>
                      </div>
                    </div>
             
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-md-12">
                    
                    <div class="table-responsive">
                      <table class="table table-striped table-hover table-md">
                        <tr>
                          <th data-width="120">SL No.</th>
                          <th class="text-center">Text</th>
                          <th class="text-center">Reference</th>
                          <th class="text-center">Quantity</th>
                          <th class="text-center">Unit Price</th>
                          <th class="text-center">Discount Price</th>
                          <th class="text-right">Total Payment</th>
                        </tr>
                        <tr>
                          <td>1.</td>
                          <td class="text-center">Room Rent</td>
                          <td class="text-center"><?php echo $reference?></td>
                          <td class="text-center"><?php echo $diff?></td>
                          <td class="text-center"><?php echo $room_price?></td>
                          <td class="text-center"><?php echo $discount?></td>
                          
                          <td class="text-right"><?php echo $total_room_ammount?></td>
                        </tr>
                        <?php 
                          
                           $sql = "SELECT * FROM restaurent_order where ((hotel_name='$hotel')&&(booking_number=$booking_number)) order by id ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $total_foods_payment=$row['payment']+$row['due_ammount'];
                                           ?>
                        <tr>
                          <td>2.</td>
                          
                          <td class="text-center"><?php echo $row['food_name']?></td>
                          <td class="text-center"></td>
                          <td class="text-center"><?php echo $row['food_price']?></td>
                          <td class="text-center"><?php echo $row['ammount']?></td>
                          
                          <td class="text-right"><?php echo $total_foods_payment?></td>
                         
                        </tr>
                         <?php }}?>
                      </table>
                    </div>
                    <div class="row mt-4">
                      <div class="col-lg-8">
                       
                      </div>
                      <div class="col-lg-4 text-right">
                        <div class="invoice-detail-item">
                          <div class="invoice-detail-name">Subtotal</div>
                          <div class="invoice-detail-value">BDT. <?php echo $total_bill?></div>
                        </div>
                        <div class="invoice-detail-item">
                          <div class="invoice-detail-name">Paid Ammount</div>
                          <div class="invoice-detail-value">BDT .<?php echo  $advance_payment?></div>
                        </div>
                           <div class="invoice-detail-item">
                          <div class="invoice-detail-name">Due Payment</div>
                          <div class="invoice-detail-value">BDT .<?php echo  $total_due?></div>
                        </div>
                        <hr class="mt-2 mb-2">
                        <div class="invoice-detail-item">
                          <div class="invoice-detail-name">Total</div>
                          <div class="invoice-detail-value invoice-detail-value-lg">BDT. <?php echo $total_bill?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
               <div class="text-md-right">
                <div class="float-lg-left mb-lg-0 mb-3">
               
                  <h5>Authorize Signature</h5>
                 
                </div>
               
               <h5>Guest Signature</h5>
              </div>
            
            </div>
          </div>
        </section>
  
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">SRRSOFTBD</a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- invoice.html  21 Nov 2019 04:05:05 GMT -->
</html>