<!-- database connection begins (controller) -->
<?php include('database.php'); ?>
<?php include('get_clocking.php'); ?>
<?php include('get_details.php'); ?>
<!-- database connection ends -->
<?php include('header2.php'); ?>
<?php include('head.php'); ?>

<?php include('nav_bar.php'); ?>
        <div class="container">
            <div class="header_container">
                <div class="container_main">
                    <div>
                        <div><h2>Card Reader</h2></div>
                        <div class="top-text">
                            <p>This page will AUTO-REFRESH every second</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="form-group">
                   <form action="" method="POST">
                        <div class="form-inline"><div id="search"><b>Search:</b></div>
                            <input type="text"  placeholder="Employee ID">
                        </div>
                        <div class="submit">
                            <input type="submit">
                        </div>
                   </form>
                </div> -->
            </div>

            <div class="main">
                <!-- <div class="content">
                    <div>
                        <div>Search:
                            <input type="text"  placeholder="Employee ID">
                        </div>
                    </div>
                    <div>
                        <div>First Name:
                            <input type="text" disabled placeholder="Joshua">
                        </div>
                    </div>
                    <div>
                        <div>Last Name:
                            <input type="text" disabled placeholder="Uzor">
                        </div>
                    </div>
                    <div>
                        <div>Sex:
                            <input type="text" disabled placeholder="Male">
                        </div>
                    </div>
                    <div>
                        <div>Email:
                            <input type="text" disabled placeholder="Joshuauzor@gmail.com">
                        </div>
                    </div>
                    <div>
                        <div>Department:
                            <input type="text" disabled placeholder="Production">
                        </div>
                    </div>
                    <div>
                        <div>Terminal:
                            <input type="text" disabled placeholder="ESNL">
                        </div>
                    </div>
                    <div>
                        <div>Shift:
                            <input type="text" disabled placeholder="Morning">
                        </div>
                    </div>
                </div> -->
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="col" class="text-left">ID:</th>
                            <td scope="col" class="text-left"><?php echo $e_id?> </td>
                        </tr>
                        <tr>
                            <th scope="col" class="text-left">Employee name:</th>
                            <td scope="col" class="text-left"> <?php echo $name ?> </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left">Clocking Time:</th>
                            <td class="text-left"><?php echo $e_time?> </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left">Clocking Date</th>
                            <td class="text-left"><?php echo $e_date ?> </td>
                        </tr>
                        <tr>
                            <th scope="col" class="text-left">Sex:</th>
                            <td scope="col" class="text-left"> <?php echo $sex ?> </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left">Department</th>
                            <td class="text-left"><?php echo $dept ?> </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left">Division</th>
                            <td class="text-left"><?php echo $division ?> </td>
                        </tr>
                        <!-- <tr>
                            <th scope="row" class="text-left">Division</th>
                            <td class="text-left"><?php echo $division ?> </td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left">Division</th>
                            <td class="text-left"><?php echo $division ?> </td>
                        </tr> -->
                        <!--   <tr>
                            <th scope="row" class="text-left">Email</th>
                            <td class="text-left">Jacob@gmail.com</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left">Sex:</th>
                            <td class="text-left">Male</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left">Shift:</th>
                            <td class="text-left">Morning</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left">Terminal:</th>
                            <td class="text-left">Esnl</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-left">Date:</th>
                            <td class="text-left">17/07/2020</td>
                        </tr> <tr>
                            <th scope="row" class="text-left">Time:</th>
                            <td class="text-left">16:00:12</td>
                        </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    </body>


    <?php include('scripts.php'); ?>

      
</html>