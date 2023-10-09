<?php include 'header.php';
$text = $_GET['text'];
?>

<section class="section">
  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="text-center">Manage Aminities Stock</h4>
          </div>
          <div class="card-body">
            <h6 style="background-color: #7CFC00;color:#000"><?php echo $text ?></h6>
            <div class="table-responsive">
              <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Aminities Name</th>
                    <th>Available Stock</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>

                  <?php

                  $sl = 1;
                  $sql = "SELECT * FROM amminities where hotel_name='$hotel' order by id ASC";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

                  ?>
                      <tr>
                        <td><?php echo  $sl++ ?></td>
                        <td><?php echo $row['aminity_name'] ?></td>
                        <td><?php echo $row['stock'] ?></td>


                        <td style="display:inline-flex">
                          <a href="edit_aminities_stock.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px">Edit</a>
                          <a href="delete_items.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-info custom_btn_info" style="margin-left:10px">Delete</a>
                          <a href="add_stock.php?id=<?php echo $row['id'] ?>" class="btn btn-icon btn-info custom_btn_info" style="margin-left:10px">Add Stock</a>
                          <a href="deduct_stock.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-info custom_btn_info" style="margin-left:10px">Deduct Stock</a>
                        </td>
                      </tr>
                  <?php }
                  } ?>


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php' ?>