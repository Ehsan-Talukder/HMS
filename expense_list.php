<?php include 'header.php';
$stage = $_GET['stage'];
?>

<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Expense Information of <?php echo $stage?></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="add_expense.php" class="btn btn-icon icon-left btn-primary"> Add New</a>
                            </div>

                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Date</th>
                                        <th>Expense Ammount</th>

                                        <th>Expense Field</th>
                                       
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    if($stage=='Today'){
                                        $sl = 1;
                                        $sql = "SELECT * FROM expences where ((hotel_name='$hotel')&&(expense_date='$t_date')) order by id ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                               
                                    ?>
                                                <tr>
                                                    <td><?php echo  $sl++ ?></td>
                                                    <td><?php echo $row['expense_date'] ?></td>
                                                    <td style="background-color:<?php echo $background_color ?>"><?php echo $row['expense_ammount'] ?></td>
                                                   <td><?php echo $row['expense_reason'] ?></td>
                                                     <td style="display:flex"> 
                                                     <a href="edit_expense.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px">Edit</a>
                                                    <form action="delete_expense.php?id=<?php echo $row['id']?>" method="post">
                                                        <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>
                                                    </form></td>
                                                </tr>
                                    <?php }
                                        }}
                                    ?>
                                    
                                    
                                    
                                    <?php
                                    if($stage=='Monthly'){
                                        $sl = 1;
                                        $sql = "SELECT * FROM expences where ((hotel_name='$hotel')&&(month='$month')) order by id ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                    ?>
                                                <tr>
                                                    <td><?php echo  $sl++ ?></td>
                                                    <td><?php echo $row['expense_date'] ?></td>
                                                    <td style="background-color:<?php echo $background_color ?>"><?php echo $row['expense_ammount'] ?></td>
                                                   <td><?php echo $row['expense_reason'] ?></td>
                                                     <td style="display:flex"> 
                                                     <a href="edit_expense.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px">Edit</a>
                                                    <form action="delete_expense.php?id=<?php echo $row['id']?>" method="post">
                                                        <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>
                                                    </form></td>
                                                </tr>
                                    <?php }
                                        }}
                                    ?>
                                    
                                    
                                    
                                    <?php
                                    if($stage=='All'){
                                        $sl = 1;
                                        $sql = "SELECT * FROM expences where hotel_name='$hotel' order by id ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                    ?>
                                                <tr>
                                                    <td><?php echo  $sl++ ?></td>
                                                    <td><?php echo $row['expense_date'] ?></td>
                                                    <td style="background-color:<?php echo $background_color ?>"><?php echo $row['expense_ammount'] ?></td>
                                                   <td><?php echo $row['expense_reason'] ?></td>
                                                     <td style="display:flex"> 
                                                     <a href="edit_expense.php?id=<?php echo $row['id'] ?>" class="btn btn-success btn-info custom_btn_info" style="margin-left:10px">Edit</a>
                                                    <form action="delete_expense.php?id=<?php echo $row['id']?>" method="post">
                                                        <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>
                                                    </form></td>
                                                </tr>
                                    <?php }
                                        }}
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