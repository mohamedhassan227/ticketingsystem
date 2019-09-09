
<?php include"includes/header.php"; ?>
<?php include"includes/navigation.php"; ?>

<!--Start View ticket-->
<div class="view-ticket">
    <div class="container">
       <div class="row">
          <div class="col-md-8">
            <!--Start Card "Ticket" -->  
            <div class="card">
              <div class="card-body">
                  
                  <img class="img-thumbnail float-right" width="64" src="http://placehold.it/64x64" alt="">
                  
                  <h5 class="card-title">
                     Printer Problem 
                     <small class="text-muted">By : Muhammed Hassan </small>
                  </h5>
                  
                  <h6>Posted At : Today At 7 PM</h6>
                  
                  <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus mollitia voluptatum sed, repellat animi consequuntur magnam nulla atque porro id incidunt, libero eligendi quasi eius harum earum. Aut, ut, iste?.
                  </p>
                  
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  
              </div><!--End Card Body-->
              
            <img src="images/choose01.jpg" class="card-img-top" alt="...">
            
            </div><!--End Card "Ticket"-->
          </div><!--End Col-md-8 -->
          
        
          <div class="col-md-4">
            <!--Start Card "Ticket" Details -->  
            <div class="ticket-detail border">
              <h4>Ticket Details</h4>
              
              <table class="table table-bordered">
 
                  <tbody>


                    <tr>
                      <th scope="row">#</th>
                      <td>302</td>
                    </tr>
                    <tr>
                      <th scope="row">Client</th>
                      <td>Hassan</td>
                    </tr>
                    <tr>
                      <th scope="row">Created</th>
                      <td>Tuesday 29 at 7 PM</td>
                    </tr>
                    <tr>
                      <th scope="row">Priority</th>
                      <td><span class = "badge  badge-danger">High</span></td>
                    </tr>
                    <tr>
                      <th scope="row">Last Update</th>
                      <td>Tuesday 29 at 7 PM</td>
                    </tr>
                     <tr>
                      <th scope="row">Status</th>
                      <td><span class = "badge  badge-success">New</span></td>
                    </tr>


                  </tbody>
                </table>




            </div><!--End Card "Ticket" Details -->  

          </div><!--End Col-md-4 --> 
          




      </div><!--End Row-->
  </div><!--End Container-->
</div><!--End View ticket-->



<!-- Start Awnsers -->
<div class="awnser">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <hr>
        
        <!--Start Header-->
        <h1 class = "display-4">Replays:</h1>
        <!--End Header-->
         
        <!--Start Worker Card "Awnser"-->
          <div class="card border-success">
              <div class="card-body">
                  
                    <img class="img-thumbnail float-right" width="64" src="http://placehold.it/64x64/000" alt="">
                  
                  <h5 class="card-title">Restart Is Required <small class="text-muted">By : Ahmed Hady </small></h5>
                  <h6>Posted At : Today At 8:42 PM</h6>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus mollitia voluptatum sed, repellat animi consequuntur magnam nulla atque porro id incidunt, libero eligendi quasi eius harum earum. Aut, ut, iste?.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
              <!--End Card Body-->
            </div>
            <!--End Worker Card "Awnser"-->
            <hr>
        <!--Start Client Card "Awnser"-->
            <div class="card border-primary">
              <div class="card-body">
                  
                    <img class="img-thumbnail float-right" width="64" src="http://placehold.it/64x64" alt="">
                  
                  <h5 class="card-title">It Works <small class="text-muted">By : Muhammed Hassan </small></h5>
                  <h6>Posted At : Today At 8:42 PM</h6>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus mollitia voluptatum sed, repellat animi consequuntur magnam nulla atque porro id incidunt, libero eligendi quasi eius harum earum. Aut, ut, iste?.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  
                   <a class="btn btn-success" href="#">
                    EDIT
                  </a>
                   <a class="pull-right btn btn-danger" href="#">
                    DELETE
                  </a>

              </div>
              <!--End Card Body-->
            </div>
            <!--End Client Card "Awnser"-->
            
          </div><!--End Col -->


      </div><!--End Row-->
    </div><!--End Continer-->
  </div>
  <!-- End awnsers -->




<!-- Start Add Awenser -->
  <div class="add-awnser">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
              <hr>
                <div class="add">
                    <h4>Add Replay:</h4>
                    <form role="form" action = "" method = "post">
                       
                       <div class="form-group">
                           <label for="title">Title</label>
                            <input type="text" name = "title" class="form-control" >
                        </div>
                        
                         <div class="form-group">
                            <label for="exampleFormControlFile1">Ticket Image</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          </div>
                       
                        <div class="form-group">
                            <label for="content">Your Replay</label>

                            <textarea class="form-control" name= "content" rows="3"></textarea>
                        </div>
                        
                        
                        
                        <button type="submit" class="btn btn-primary" name = "create_awnser">Add Replay</button>
                    </form>
                </div>    
            </div>
        </div>
    </div>
</div>

                <hr>


<!-- end add awnser -->

<?php include"includes/footer.php"; ?>