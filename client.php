
<?php include"includes/header.php"; ?>
<?php include"includes/navigation.php"; ?>

<!--Start Tickets-->
<div class="tickets">
    <div class="container">
       <!--Start Head Text-->
       <div class="head">
            <h1>Your Tickets</h1>
            <a href="create_ticket.php" class = "btn btn-success ">Create New Ticket</a>
        </div>
        <!--End Head Text-->
        
        <!--Start Row-->
        <div class="row">  
            <!--Start Table-->
            <table class="table table-responsive-sm">
              <thead>
                <tr>

                  <th scope="col">#</th>
                  <th scope="col">TITLE</th>
                  <th scope="col">PRIORITY</th>
                  <th scope="col">STATUS</th>
                  <th scope="col">REPLAYS</th>
                  <th scope="col">CREATED AT</th>
                  <th scope="col">LAST REPLAY</th>
                  <th scope="col">View</th>
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
                </tr>



              </tbody>
            </table><!--End Table-->
        </div><!--End Row-->
    </div><!--End Container-->
</div><!--End Tickets-->

<?php include"includes/footer.php"; ?>