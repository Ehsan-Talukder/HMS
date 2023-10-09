<?php include 'header.php';
$stage = $_GET['stage'];
?>

<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Coupon List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="add_cupon.php" class="btn btn-icon icon-left btn-primary"> Add New</a>
                            </div>

                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Coupon Name</th>
                                        <th>Voucher Code</th>
                                        
                                        <th>Coupon Discount(In Persentage %)</th>
                                        <th>Coupon Release Date</th>
                                         <th>Coupon End Date</th>
                                       
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                     
                                    <?php
                                   
                                        $sl = 1;
                                        $sql = "SELECT * FROM voucher where hotel_name='$hotel' order by id ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                    ?>
                                                <tr>
                                                    <td><?php echo  $sl++ ?></td>
                                                    <td><?php echo $row['voucher_name'] ?></td>
                                                    <td style="background-color:<?php echo $background_color ?>"><?php echo $row['voucher_code'] ?></td>
                                                   <td><?php echo $row['voucher_discount'] ?></td>
                                                   <td><?php echo $row['voucher_release_date'] ?></td>
                                                   <td><?php echo $row['voucher_closing_date'] ?></td>
                                                     <td style="display:flex"> 
                                                     <a href="edit_voucher.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px">Edit</a>
                                                    <form action="delete_voucher.php?id=<?php echo $row['id']?>" method="post">
                                                        <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Inactive</button>
                                                    </form></td>
                                                </tr>
                                    <?php }
                                        }
                                    ?>


                                   
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