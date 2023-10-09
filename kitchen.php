<?php include 'header.php';
$stage = $_GET['stage']; ?>

<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Store Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="add_kitchen.php" class="btn btn-icon icon-left btn-primary"> Add
                                    New</a>
                            </div>

                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Available Item Name</th>
                                        <th>Available Item Quantity</th>
                                        <th>unit price</th>
                                        <th>Total Price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sl = 1;

                                    $sql = "SELECT * FROM kitchen order by id ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {


                                    ?>
                                            <tr style="background-color:<?php echo $background_color; ?>">
                                                <td><?php echo $sl++; ?></td>
                                                <td><?php echo $row['available_item_name']; ?></td>
                                                <td><?php echo $row['available_item_quantity']; ?></td>
                                                <td><?php echo $row['unit_price']; ?></td>
                                                <td><?php echo $row['total_price']; ?></td>
                                                
                                                <td style="display:inline-flex;"> <a href="add_kitchen_quantity.php?id=<?php echo $row['id']; ?>" class="btn btn-icon btn-info custom_btn_info">Add Kitchen Quantity</a>
                                                    <a href="deduct_kitchen_quantity.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px">Deduct Kitchen Quantity</a>
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

<?php include 'footer.php'; ?>