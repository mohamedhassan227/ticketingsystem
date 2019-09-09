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
              <div class="col">
                <!--Start Table-->
                <table class="table">
                  <thead>
                    <tr>

                      <th scope="col">#</th>
                      <th scope="col">TITLE</th>
                      <th scope="col">PRIORITY</th>
                      <th scope="col">STATUS</th>
                      <th scope="col">REPLAYS</th>
                      <th scope="col">CREATED AT</th>
                      <th scope="col">LAST REPLAY</th>
                      <th scope="col">VIEW</th>
                      <th scope="col">EDIT</th>
                      <th scope="col">DELETE</th>


                    </tr>
                  </thead>
                  <tbody>

                        <tr>
                          <th scope="row">1445</th>
                            <td>printer problem</td>
                            <td><img style= " width : 70px"src="images/4.png" alt=""></td>
                            <td style = "color:#41c338;">Open</td>
                            <td>12</td>
                            <td>Tuesday At 12:21 PM</td>
                            <td>Tuesday At 12:21 PM</td>
                            <td><a href="view_ticket.php" class = "btn btn-primary">View</a></td>
                            <td><a href="view_ticket.php" class = "btn btn-success">Edit</a></td>
                            <td><a href="view_ticket.php" class = "btn btn-danger">Delete</a></td>


                        </tr>

                        <tr>
                          <th scope="row">1446</th>
                            <td>Database problem</td>
                            <td><img style= " width : 70px"src="images/2.png" alt=""></td>
                            <td style = "color:red;">closed</td>
                            <td>6</td>
                            <td>Tuesday At 12:21 PM</td>
                            <td>Satrday At 12:21 PM</td>
                            <td><a href="view_ticket.php" class = "btn btn-primary">View</a></td>
                            <td><a href="view_ticket.php" class = "btn btn-success">Edit</a></td>
                            <td><a href="view_ticket.php" class = "btn btn-danger">Delete</a></td>
                        </tr>
                    
                    </tbody>
                </table><!--End Table-->
            </div><!--End Col-->
        </div><!--End Row-->
    </div><!--End Container-->

           
        </div><!--End Contenr-->
    </div><!--End Wraper-->

  <?php include"includes/footer.php"; ?>