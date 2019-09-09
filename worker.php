<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ticket System </title>
        
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<!--	start nav-->
    <div class="nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark ">
            <a class="navbar-brand" href="#">TICKET SYSTEM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
<!--
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                </ul>
-->
                <ul class = "navbar-nav ml-auto">
                    <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Admin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Profile</a>
                      <a class="dropdown-item" href="#">Logout</a>
                    </div>
                  </li>        
                </ul>
            </div>
            </nav>
        </div>
    </div>
<!--    end nav-->
<!--start tickets-->
<div class="tickets">
    <div class="container">
       <div class="head">
            <h1>Your Tickets</h1>
        </div>
        <div class="row">  
        <table class="table">
          <thead>
            <tr>

              <th scope="col">#</th>
              <th scope="col">TITLE</th>
              <th scope="col">IMAGE</th>
              <th scope="col">STATUS</th>
              <th scope="col">AWNSERS</th>
              <th scope="col">DATE</th>
              <th scope="col">View</th>
              <th scope="col">Close</th>

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
                <td><a href="view_ticket.php" class = "btn btn-primary">View</a></td>
                <td><a href="view_ticket.php" class = "btn btn-danger">Close</a></td>

            </tr>

           
            <tr>
              <th scope="row">1445</th>
                <td>printer problem</td>
                <td><img style= " width : 70px"src="images/4.png" alt=""></td>
                <td style = "color:#41c338;">Open</td>
                <td>12</td>
                <td>Tuesday At 12:21 PM</td>
                <td><a href="view_ticket.php" class = "btn btn-primary">View</a></td>
                <td><a href="view_ticket.php" class = "btn btn-danger">Close</a></td>

            </tr>

            
            <tr>
              <th scope="row">1445</th>
                <td>printer problem</td>
                <td><img style= " width : 70px"src="images/4.png" alt=""></td>
                <td style = "color:#41c338;">Open</td>
                <td>12</td>
                <td>Tuesday At 12:21 PM</td>
                <td><a href="view_ticket.php" class = "btn btn-primary">View</a></td>
                <td><a href="view_ticket.php" class = "btn btn-danger">Close</a></td>

            </tr>

            
            <tr>
              <th scope="row">1445</th>
                <td>printer problem</td>
                <td><img style= " width : 70px"src="images/4.png" alt=""></td>
                <td style = "color:#41c338;">Open</td>
                <td>12</td>
                <td>Tuesday At 12:21 PM</td>
                <td><a href="view_ticket.php" class = "btn btn-primary">View</a></td>
                <td><a href="view_ticket.php" class = "btn btn-danger">Close</a></td>

            </tr>

            
            

          </tbody>
    </table>

            
            
        </div>
<hr>
<div class="row">  
  <h1>Closed Tickets</h1>
        <table class="table">
          <thead>
            <tr>

              <th scope="col">#</th>
              <th scope="col">TITLE</th>
              <th scope="col">IMAGE</th>
              <th scope="col">STATUS</th>
              <th scope="col">AWNSERS</th>
              <th scope="col">DATE</th>
              <th scope="col">View</th>
              <th scope="col">Edit</th>

            </tr>
          </thead>
          <tbody>
           
            <tr class="table-danger">
              <th scope="row">1445</th>
                <td>printer problem</td>
                <td><img style= " width : 70px"src="images/4.png" alt=""></td>
                <td style = "color:red;">closed</td>
                <td>12</td>
                <td>Tuesday At 12:21 PM</td>
                <td><a href="view_ticket.php" class = "btn btn-primary">View</a></td>
                <td><a href="view_ticket.php" class = "btn btn-success">Open</a></td>

            </tr>

            <tr class="table-danger">
              <th scope="row">1446</th>
                <td>Database problem</td>
                <td><img style= " width : 70px"src="images/2.png" alt=""></td>
                <td style = "color:red;">closed</td>
                <td>6</td>
                <td>Satrday At 12:21 PM</td>
                <td><a href="view_ticket.php" class = "btn btn-primary">View</a></td>
                <td><a href="view_ticket.php" class = "btn btn-success">Open</a></td>

            </tr>
            <tr class="table-danger">
              <th scope="row">1445</th>
                <td>printer problem</td>
                <td><img style= " width : 70px"src="images/4.png" alt=""></td>
                <td style = "color:red;">closed</td>
                <td>12</td>
                <td>Tuesday At 12:21 PM</td>
                <td><a href="view_ticket.php" class = "btn btn-primary">View</a></td>
                <td><a href="view_ticket.php" class = "btn btn-success">Open</a></td>

            </tr >

            <tr class="table-danger">
              <th scope="row">1446</th>
                <td>Database problem</td>
                <td><img style= " width : 70px"src="images/2.png" alt=""></td>
                <td style = "color:red;">closed</td>
                <td>6</td>
                <td>Satrday At 12:21 PM</td>
                <td><a href="view_ticket.php" class = "btn btn-primary">View</a></td>
                <td><a href="view_ticket.php" class = "btn btn-success">Open</a></td>

            </tr>
            <tr class="table-danger">
              <th scope="row">1445</th>
                <td>printer problem</td>
                <td><img style= " width : 70px"src="images/4.png" alt=""></td>
                <td style = "color:red;">closed</td>
                <td>12</td>
                <td>Tuesday At 12:21 PM</td>
                <td><a href="view_ticket.php" class = "btn btn-primary">View</a></td>
                <td><a href="view_ticket.php" class = "btn btn-success">Open</a></td>

            </tr>

            <tr class="table-danger">
              <th scope="row">1446</th>
                <td>Database problem</td>
                <td><img style= " width : 70px"src="images/2.png" alt=""></td>
                <td style = "color:red;">closed</td>
                <td>6</td>
                <td>Satrday At 12:21 PM</td>
                <td><a href="view_ticket.php" class = "btn btn-primary">View</a></td>
                <td><a href="view_ticket.php" class = "btn btn-success">Open</a></td>

            </tr>
            <tr class="table-danger">
              <th scope="row">1445</th>
                <td>printer problem</td>
                <td><img style= " width : 70px"src="images/4.png" alt=""></td>
                <td style = "color:red;">closed</td>
                <td>12</td>
                <td>Tuesday At 12:21 PM</td>
                <td><a href="view_ticket.php" class = "btn btn-primary">View</a></td>
                <td><a href="view_ticket.php" class = "btn btn-success">Open</a></td>

            </tr>

            <tr class="table-danger">
              <th scope="row">1446</th>
                <td>Database problem</td>
                <td><img style= " width : 70px"src="images/2.png" alt=""></td>
                <td style = "color:red;">closed</td>
                <td>6</td>
                <td>Satrday At 12:21 PM</td>
                <td><a href="view_ticket.php" class = "btn btn-primary">View</a></td>
                <td><a href="view_ticket.php" class = "btn btn-success">Open</a></td>

            </tr>
            

          </tbody>
    </table>

            
            
        </div>




    </div>
</div>
<!--end tickets-->


      
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>    