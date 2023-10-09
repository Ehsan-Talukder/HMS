<?php
$id = $_GET['id'];
$text = $_GET['text'];
include 'header.php';
$sql = "SELECT * FROM amminities where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $aminity_name = $row['aminity_name'];
  }
}
?>
<div id="app">
  <section class="section">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12  col-lg-12  col-xl-12 ">
          <div class="card card-primary">
            <h6 style="background-color: #7CFC00;color:#000"><?php echo $text ?></h6>
            <div class="card-header">
              <h4 class="text-header">Deduct Aminities Stock</h4>
            </div>
            <div class="card-body">
              <form action="update_deduct_stock.php?id=<?php echo $id ?>" method="POST">
                <div class="row">
                  <div class="form-group col-6">
                    <input id="name" type="text" placeholder="Employee Name" value="<?php echo $aminity_name ?>" class="form-control" name="name" autofocus readonly required>
                  </div>

                  <div class="form-group col-6">
                    <input id="designation" type="number" placeholder="Add Stock" value="0" class="form-control" name="stock" required>
                  </div>


                </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block">
                Deduct Stock
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
<?php include 'footer.php' ?>