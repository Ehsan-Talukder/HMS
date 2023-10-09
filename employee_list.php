<?php include 'header.php';
$status=$_GET['status'];?>

<section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="text-center">Manage Employees</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>SL</th>
                            <th>Employee Name</th>
                            <th>Designation</th>
                            <th>Status</th>
                            <th>Salary</th>
                            
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                            <?php
                            if($status=='all'){
                             $sl=1;
                                    $sql = "SELECT * FROM employee  order by id ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                      
                                         ?>
                          <tr style="background-color:<?php echo $background_color?>">
                            <td><?php echo $sl++?></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['designation']?></td>
                            <td><?php echo $row['status']?></td>
                            <td>৳<?php echo $row['salary']?></td>
                          
                            <td  style="display: inline-flex;">
                                <a href="edit_employee.php?id=<?php echo $row['id']?>" class="btn btn-icon btn-info custom_btn_info">Edit</a>
                                
                                <form action="#" method="post">
                                    <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>
                                </form>
                               
                            </td>
                          </tr>
                          <?php }}}?>
                          
                                            <?php
                            if($status=='active'){
                             $sl=1;
                                    $sql = "SELECT * FROM employee where status='Active' order by id ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                      
                                         ?>
                          <tr style="background-color:<?php echo $background_color?>">
                            <td><?php echo $sl++?></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['designation']?></td>
                            <td><?php echo $row['status']?></td>
                            <td>৳<?php echo $row['salary']?></td>
                          
                            <td  style="display: inline-flex;">
                                <a href="edit_employee.php?id=<?php echo $row['id']?>" class="btn btn-icon btn-info custom_btn_info">Edit</a>
                                
                                <form action="#" method="post">
                                    <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>
                                </form>
                               
                            </td>
                          </tr>
                          <?php }}}?>
                       
                       
                        <?php
                            if($status=='inactive'){
                             $sl=1;
                                    $sql = "SELECT * FROM employee where status='Inactive' order by id ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                      
                                         ?>
                          <tr style="background-color:<?php echo $background_color?>">
                            <td><?php echo $sl++?></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['designation']?></td>
                            <td><?php echo $row['status']?></td>
                            <td>৳<?php echo $row['salary']?></td>
                          
                            <td  style="display: inline-flex;">
                                <a href="edit_employee.php?id=<?php echo $row['id']?>" class="btn btn-icon btn-info custom_btn_info">Edit</a>
                                
                                <form action="#" method="post">
                                    <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>
                                </form>
                               
                            </td>
                          </tr>
                          <?php }}}?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

<?php include 'footer.php'?>