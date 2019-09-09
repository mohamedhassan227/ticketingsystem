
<?php include"includes/header.php"; ?>

<body class = " index">
	<!-- Start Full Page -->
	<div class="fullpage">
       
        <!--Start Overlay-->
		<div class="over">
		    <div class="overlay"></div>
		</div>
        <!--End Overlay-->
        
		<!-- Start Navbar -->
        <div class="nav">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark index-nav">
                <a class="navbar-brand" href="client.php">TICKET SYSTEM</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="client.php">Client <!-- <span class="sr-only">(current)</span> --></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="worker.php">Worker</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="admin/index.php">Admin</a>
                      </li>
                    </ul>


                    </div>
                </nav>
            </div>
        </div>
		<!-- End Navbar -->
		
        <!--start register-->
        <div class="register">
            
        
            <!-- Start MainPage -->
            <div class="main">
                <div class="container">
                    <div class="row">

                <!-- Start Left Coloumns -->
                        <div class="col-lg-8">
                            <div class="left">
                                <p>Having problem </p>
                                <h1>You Can Make Tickets Now  . Its Free</h1>
                                <span>you have to login first to make the ticket.</span>
                                <a href="index.php"><button>Login now <i class="fa fa-arrow-right"></i></button></a>
                            </div>
                        </div>
                <!-- End Left Coloumns -->

                <!-- Start Right Coloumns -->

                        <div class="col-lg-4">
                            <div class="right">
                                <h1>Register Now</h1>

                               <!-- Start Login Form Div -->
                                <div class="form">
                                    <form action="" method="">

                                    <label for="email">Email address</label>
                                         <div class="input-group mb-3">
                                              <input type="email" class="form-control" placeholder="Enter Your Email" >
                                              <div class="input-group-append">
                                                <span class="input-group-text" ><i class="fa fa-envelope"></i></span>
                                              </div>
                                        </div>

                                        <label for="email">username</label>
                                         <div class="input-group mb-3">
                                              <input type="text" class="form-control" placeholder="Enter Your Email" >
                                              <div class="input-group-append">
                                                <span class="input-group-text" ><i class="fa fa-user"></i></span>
                                              </div>
                                        </div>

                                        <label for="password">Password</label>
                                         <div class="input-group mb-3">
                                              <input type="password" class="form-control" placeholder="Enter Your Password" >
                                              <div class="input-group-append">
                                                <span class="input-group-text" ><i class="fa fa-key"></i></span>
                                              </div>
                                        </div>

                                        <label>If You Already Have Account You Can <a href="index.php">Login Here</a></label>


                                          <button type="submit" class="btn btn-primary">Register</button>
                                    </form>
                                </div><!-- End Login Form Div -->
                            </div>
                        </div><!-- End Right Coloumns -->
                    </div> <!-- End Row -->
                </div> <!-- End Container -->
            </div>
            <!-- End Main Page -->
		</div>
		<!-- End Register-->

		
	</div>
	<!-- End Full Page -->



      
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>