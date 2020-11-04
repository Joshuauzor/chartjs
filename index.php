<?php include('header.php'); ?>

<?php include('head.php'); ?>

<?php include('nav_bar.php'); ?>


<!-- <php include('nav_bar.php'); ?> -->
    <div class="row">
        <div class="col-md-12">

            <div class="row" style="margin: 2% 0">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                <span>Total Employee(s)</span>
                                <span class="avatar">
                                <span class="avatar-title bg-success text-white rounded-circle">
                                    <i class="fa fa-percent"></i>
                                </span>
                                </span>
                            </h6>
                            <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                <h3 class="mb-0 mr-2"><?php echo $total_employees; ?></h3>
                                <p class="small text-muted mb-0 line-height-20">
                                    <span class="text-success"></span> total
                                </p>
                            </div>
                            <canvas id="widget-chart1"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                <span>Department</span>
                                <span class="avatar">
                                <span class="avatar-title bg-warning text-white rounded-circle">
                                    <i class="fa fa-dollar"></i>
                                </span>
                                </span>
                            </h6>
                            <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                <h3 class="mb-0 mr-2"><?php echo $department ?></h3>
                                <p class="small text-muted mb-0 line-height-20">
                                    <span class="text-danger"></span> total
                                </p>
                            </div>
                            <canvas id="widget-chart2"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title d-flex align-items-start justify-content-between mb-0">
                                <span>Division</span>
                                <span class="avatar">
                                <span class="avatar-title bg-danger text-white rounded-circle">
                                    <i class="fa fa-cube"></i>
                                </span>
                                </span>
                            </h6>
                            <div class="d-flex d-sm-block d-lg-flex align-items-end mb-3">
                                <h3 class="mb-0 mr-2">3</h3>
                                <p class="small text-muted mb-0 line-height-20">
                                    <span class="text-success"></span> total
                                </p>
                            </div>
                            <canvas id="widget-chart3"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart section -->
                
            <div class="row"  style="margin-top:3%">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <!--Bar Chart begins -->
                                <div class="container">
                                    <canvas id="myChart"></canvas>
                                </div>
                            <!-- chart ends -->
                        </div>
                    </div>
                </div>
                <!-- right corner column -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="progress" style="height: 10px">
                                <div class="progress-bar w-25 bg-primary" role="progressbar"></div>
                                <div class="progress-bar w-50 bg-info" role="progressbar"></div>
                                <div class="progress-bar w-25 bg-warning" role="progressbar"></div>
                            </div>
                            <div class="row mt-3 pt-3">
                                <div class="col border-right">
                                    <p class="mb-0">
                                        <span class="fa fa-circle text-info mr-1"></span> Raw Log
                                    </p>
                                    <h5 class="mt-2 mb-0"><?php echo $raw_log ?></h5>
                                </div>
                                <div class="col border-right">
                                   <p class="mb-0">
                                        <span class="fa fa-circle text-warning mr-1"></span> Processed Record(s)
                                    </p>
                                    <h5 class="mt-2 mb-0"><?php echo $processed_log?></h5>
                                </div>                      
                                <div class="col">
                                    <p class="mb-0">
                                        <span class="fa fa-circle text-primary mr-1"></span> Unassigned Employee(s)
                                    </p>
                                    <h5 class="mt-2 mb-0"><?php echo $Not_assigned ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card" style="margin-top:10%">
                        <div class="card-body">
                            <!-- <h6 class="card-title">Total Sales By Org Unit</h6>
                            <p class="text-muted">Total Sales</p>
                            <h2 class="number-font">69,453</h2> -->
                            <div class="progress" style="height: 10px">
                                <div class="progress-bar w-25 bg-primary" role="progressbar"></div>
                                <div class="progress-bar w-50 bg-info" role="progressbar"></div>
                                <div class="progress-bar w-25 bg-warning" role="progressbar"></div>
                            </div>
                            <div class="row mt-3 pt-3">
                                <div class="col border-right">
                                    <p class="mb-0">
                                        <span class="fa fa-circle text-primary mr-1"></span> ADA
                                    </p>
                                    <h5 class="mt-2 mb-0"><?php echo $ada; ?> </h5>
                                </div>
                                <div class="col border-right">
                                    <p class="mb-0">
                                        <span class="fa fa-circle text-info mr-1"></span> System Users
                                    </p>
                                    <h5 class="mt-2 mb-0"><?php echo $system_users ?></h5>
                                </div>
                                <div class="col">
                                    <p class="mb-0">
                                        <span class="fa fa-circle text-warning mr-1"></span> Terminal
                                    </p>
                                    <h5 class="mt-2 mb-0"><?php echo $terminal  ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- right corner column ends-->
            </div>
            <!-- div enclose first section -->


            <!-- second section begins -->
            <div class="row"  style="margin-top:3%">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <!--Bar Chart begins -->
                            <div class="container">
                                <canvas id="myChart2"></canvas>
                            </div>
                            <!-- chart ends -->
                        </div>
                    </div>
                </div>
                <!-- second section right corner column -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="progress" style="height: 10px">
                                <div class="progress-bar w-25 bg-primary" role="progressbar"></div>
                                <div class="progress-bar w-50 bg-info" role="progressbar"></div>
                                <div class="progress-bar w-25 bg-warning" role="progressbar"></div>
                            </div>
                            <div class="row mt-3 pt-3">
                                <div class="col border-right">
                                    <p class="mb-0">
                                        <span class="fa fa-circle text-primary mr-1"></span>  Test
                                    </p>
                                    <h5 class="mt-2 mb-0"><?php echo $Not_assigned ?></h5>
                                </div>
                                <div class="col border-right">
                                    <p class="mb-0">
                                        <span class="fa fa-circle text-info mr-1"></span> Shift(s)
                                    </p>
                                    <h5 class="mt-2 mb-0"><?php echo $total_shifts?></h5>
                                </div>
                                <div class="col">
                                    <p class="mb-0">
                                        <span class="fa fa-circle text-warning mr-1"></span> ADA
                                    </p>
                                    <h5 class="mt-2 mb-0"><?php echo $ada; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card" style="margin-top:10%">
                        <div class="card-body">
                            <!-- <h6 class="card-title">Total Sales By Org Unit</h6>
                            <p class="text-muted">Total Sales</p>
                            <h2 class="number-font">69,453</h2> -->
                            <div class="progress" style="height: 10px">
                                <div class="progress-bar w-25 bg-primary" role="progressbar"></div>
                                <div class="progress-bar w-50 bg-info" role="progressbar"></div>
                                <div class="progress-bar w-25 bg-warning" role="progressbar"></div>
                            </div>
                            <div class="row mt-3 pt-3">
                                <div class="col border-right">
                                    <p class="mb-0">
                                        <span class="fa fa-circle text-primary mr-1"></span> Day Shift
                                    </p>
                                    <h5 class="mt-2 mb-0">50</h5>
                                </div>
                                <div class="col border-right">
                                    <p class="mb-0">
                                        <span class="fa fa-circle text-info mr-1"></span> Night Shift
                                    </p>
                                    <h5 class="mt-2 mb-0">0</h5>
                                </div>
                                <div class="col">
                                    <p class="mb-0">
                                        <span class="fa fa-circle text-warning mr-1"></span> FDA
                                    </p>
                                    <h5 class="mt-2 mb-0">0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- right corner column ends-->
            </div>
                      
                 
     
        
    </div>
    <?php include('scripts.php'); ?>
    <!-- footer -->
   <?php include('footer.php') ?>