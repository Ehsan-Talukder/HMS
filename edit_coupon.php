<?php
include 'header.php';
$text=$_GET['text'];
 $id=$_GET['id'];
 $sql = "SELECT * FROM voucher where id=$id";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                         $voucher_name=$row['voucher_name'];
                         $voucher_code=$row['voucher_code'];
                         $voucher_discount=$row['voucher_discount'];
                         $voucher_release_date=$row['voucher_release_date'];
                         $voucher_closing_date=$row['voucher_closing_date'];
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
                <h4 class="text-header">Edit Cupon</h4>
              </div>
              <div class="card-body">
                <form action="update_cupon.php?id=<?php echo $id?>" method="POST">
                  <div class="row">
                    <!--<div class="form-group col-4">-->
                    <!--  <input id="expense_date" type="date" placeholder="" class="form-control" name="expense_date" autofocus required>-->
                    <!--</div>-->
                    
                     <div class="form-group col-4">
                         <level>Cupon Name</level>
                      <input id="expense_amount" type="text" placeholder="Cupon Name" class="form-control" name="voucher_name" value="<?php echo $voucher_name?>"  required>
                    </div>
                    
                    <div class="form-group col-4">
                        <level>Cupon Code</level>
                      <input id="expense_amount" type="number" placeholder="Cupon Code" class="form-control" name="voucher_code"  value="<?php echo $voucher_code?>"  required>
                    </div>
                    
                    <div class="form-group col-4">
                        <level>Cupon Discount (In Percentage)</level>
                      <input id="expense_amount" type="number" placeholder="Cupon Discount (In Percentage)" class="form-control" name="voucher_discount"  value="<?php echo $voucher_discount?>"  required>
                    </div>
                    
                    
                    
                     <div class="form-group col-4">
                         <level>Cupon Release Date</level>
                      <input id="expense_amount" type="date" placeholder="" class="form-control" name="voucher_release_date"  value="<?php echo $voucher_release_date?>"  required>
                    </div>
                    
                     <div class="form-group col-4">
                         <level>Cupon End Date</level>
                      <input id="expense_amount" type="date" placeholder="" class="form-control" name="voucher_closing_date"  value="<?php echo $voucher_closing_date?>"  required>
                    </div>
                    
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Submit
                    </button>
                  </div>
                     
                    </div>
                    </div>
                  </div>
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