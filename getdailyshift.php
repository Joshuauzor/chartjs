<?php include('header.php'); ?>

<?php include('head.php'); ?>

<?php include('nav_bar.php'); ?>

    <!-- begin::main-content -->
    <main class="main-content">

        <div class="container">

            <!-- begin::page-header -->
            <div class="page-header">
                <!-- <h4>Responsive Tables</h4> -->
                <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Daily</li>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Shift</li>
                    </ol>
                </nav> -->
            </div>
            <!-- end::page-header -->
            <!-- <div class="row">
                <div class="col-md-12">
                <label for="department" class="text-left"><h5>Select Department:</h5></label>
                <select name="" id="">
                    <option value="">Accounting</option>
                </select>
                </div>
            </div> -->

            <table>
                <tbody>
                  <!-- for all shift -->
                    <tr>
                       

                        <td>
                        <!-- <label for="department" class="text-left"><h5>Select Department:</h5></label> -->
                        <form action="form.php" method="post">
                            <select name="department" id="">
                                    <option value="disabled" selected disabled>--Select Shift--</option>
                                <?php $i=0;
                                foreach($all_shift as $shift): $i++; ?>
                                    <option value="<?= $shift['id'] ?>"><?= $shift['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <input type="submit" value="Search">
                        </form>
                        </td>
                    </tr>
                    <!-- shift ends here -->
                    <tr>
                        <td>
                        <!-- <label for="department" class="text-left"><h5>Select Department:</h5></label> -->
                        <form action="form.php" method="post">
                            <select name="department" id="">
                                    <option value="disabled" selected disabled>--Select Department--</option>
                                <?php $i=0;
                                foreach($eachdept as $dept): $i++; ?>
                                    <option value="<?= $dept['dept'] ?>"><?= $dept['dept'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <input type="submit" value="Search">
                        </form>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- selection ends -->
            <div class="row">
                <div class="col-md-12">
           <div class="card">
                        <div class="card-body">
                            <!-- <h6 class="card-title">Shift A</h6> -->
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Employee ID</th>
                                        <th>Employee Name</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                        <th>Shift</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $dept_name = $_GET['dept_name']; //declare http method
                                        $active = "SELECT * FROM tuser where dept='$dept_name' ORDER BY group_id"; //http get method from the form
                                        $user_result = mysqli_query($dbc, $active) or die(mysql_error()); //sql
                                        
                                        $i=0; //counter
                                        foreach($user_result as $result): $i++; //declare loop
                                    ?>
                                    <?php 
                                        $shift_name = $result["group_id"]; //get shift id above. 
                                    ?>

                                    <!-- test for shift -->
                                        <?php 
                                            $shift_name = $_GET['shift_name']; //declare http method
                                            $active = "SELECT * FROM tuser where dept='$dept_name' ORDER BY group_id"; //http get method from the form
                                            $user_result = mysqli_query($dbc, $active) or die(mysql_error()); //sql
                                            
                                            $i=0; //counter
                                            foreach($user_result as $result): $i++; //declare loop
                                        ?>
                                    <!-- test ends -->
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $result["id"] ?></td>
                                        <td><?php echo $result["name"] ?></td>
                                        <td><?php echo $result["dept"] ?></td>
                                        <td><?php echo $result["PassiveType"] ?></td>
                                        <td>
                                        <?php
                                        //here is the logic, run query inside table to be discoverable
                                        //getting shift name
                                            $sql = "SELECT * FROM tgroup WHERE id='$shift_name'";
                                            $result = mysqli_query($dbc, $sql) or die('Bad Query: $sql');

                                            while($row = $result->fetch_assoc()){
                                                $id = $row["name"];
                                            }
                                            echo $id; 
                                            //ends here 
                                        ?>
                                        </td>
                                    </tr>
                                    <?php endforeach ?> 
                                    <!-- ends loop -->
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Employee ID</th>
                                        <th>Employee Name</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                        <th>Shift</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
    <!-- end::main-content -->

<?php include('scripts.php'); ?>
    <!-- footer -->
<?php include('footer.php') ?>