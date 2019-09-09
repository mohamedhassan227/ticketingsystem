<?php include"includes/header.php"; ?>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php include"includes/sidebar.php"; ?>
        <!-- Page Content Holder -->
        <div id="content">  
          <!-- Upper Navigation -->
          <?php include"includes/upper_nav.php"; ?>            
            
          <div class="container">
              <div class="row">


                  <!--Start Card One-->
                  <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-primary mb-3">

                      <div class="card-header">
                        <div class="row">
                          <div class="col-6">
                            <i class="fas fa-globe fa-8x"></i>
                          </div>
                          <div class="col-6 text-right">
                            <h1>13</h1>
                          </div>
                        </div>
                      </div>

                      <div class="card-body">
                        <h4 class="card-title">Total Ticket</h4>
                        <a href="#" class="btn btn-light btn-block">View Details</a>
                      </div>

                    </div>
                </div>
               <!--End Card One-->


            
                  <!--Start Card Two-->
                  <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-success mb-3">

                      <div class="card-header">
                        <div class="row">
                          <div class="col-6">
                            <i class="fas fa-wrench fa-8x"></i>
                          </div>
                          <div class="col-6 text-right">
                            <h1>25</h1>
                          </div>
                        </div>
                      </div>

                      <div class="card-body">
                        <h4 class="card-title">Assigned Tasks</h4>
                        <a href="#" class="btn btn-light btn-block">View Details</a>
                      </div>

                    </div>
                </div>
                <!--End Card Two-->

          
                <!--Start Card Three-->
                  <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-warning mb-3">

                      <div class="card-header">
                        <div class="row">
                          <div class="col-6">
                            <i class="fas fa-ticket-alt fa-8x"></i>
                          </div>
                          <div class="col-6 text-right">
                            <h1>42</h1>
                          </div>
                        </div>
                      </div>

                      <div class="card-body">
                        <h4 class="card-title">Tickets Today</h4>
                        <a href="#" class="btn btn-light btn-block">View Details</a>
                      </div>

                    </div>
                </div>
                <!--End Card Three-->

            
                <!--Start Card Four-->
                  <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-danger mb-3">

                      <div class="card-header">
                        <div class="row">
                          <div class="col-6">
                            <i class="fas fa-users fa-8x"></i>
                          </div>
                          <div class="col-6 text-right">
                            <h1>21</h1>
                          </div>
                        </div>
                      </div>

                      <div class="card-body">
                        <h4 class="card-title">Online</h4>
                        <a href="#" class="btn btn-light btn-block">View Details</a>
                      </div>

                    </div>
                </div>
                <!--End Card Four-->
                
            </div><!--End Row-->
            
            
            <!--Start Google Chart-->
            <div class="row">
              <div class="col">
                 <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
              </div>
            </div>
            <!--End Google Chart-->
            
            </div><!--End Container-->

           
        </div><!--End Content-->
    </div><!--End Wraper-->

  <?php include"includes/footer.php"; ?>