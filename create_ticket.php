
<?php include"includes/header.php"; ?>
<?php include"includes/navigation.php"; ?>

<!-- Start Add Ticket -->
  <div class="add-ticket">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
                <div class="add">

                    <h4>Add New Ticket</h4>
                    <form role="form" action = "" method = "post">
                       
                       <div class="form-group">
                           <label for="subject">Ticket Subject</label>
                            <input type="text" name = "title" class="form-control" >
                        </div>

                        <div class="form-group">
                           <label for="subject">Ticket Priority</label>
                           <select class = "form-control" name="" id="">
                             <option value="" >Low</option>
                             <option value="">Medium</option>
                             <option value="">High</option>
                             <option value="">Urgent</option>
                           </select>
                        </div>

                        <div class="form-group">
                            <label for="content">Ticket Content</label>

                            <textarea class="form-control" name= "content" rows="3"></textarea>
                        </div>
                        


                        
                         <div class="form-group">
    <label for="exampleFormControlFile1">Ticket Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
                       
                        
                        
                        
                        <button type="submit" class="btn btn-primary" name = "create_awnser">Create Ticket</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!--End Add Ticket -->

                <hr>





<?php include"includes/footer.php"; ?>