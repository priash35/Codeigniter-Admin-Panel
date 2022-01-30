

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Socialmedia
   
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Socialmedia</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url();?>index.php/admin/socialmedia/updatesocialmedia" method="post" enctype="multipart/form-data">
              <div class="box-body">
                  
				<input type="hidden" class="form-control" name="id" id="" value="<?php echo $socialmedia['id']?>">
				<div class="form-group">
                  <label for="exampleInputEmail1">Facebook Link</label>
                  <input type="text" class="form-control" name="facebooklink" id="" value="<?php echo $socialmedia['facebooklink']?>">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Google Plus Link</label>
                  <input type="text" class="form-control" name="googlepluslink" id="" value="<?php echo $socialmedia['googlepluslink']?>">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Linked In Link</label>
                  <input type="text" class="form-control" name="linkedinlink" id="" value="<?php echo $socialmedia['linkedinlink']?>">
                </div>
                
              
                
             
                
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" name="submit"  class="btn btn-primary" value="Submit"/>
              </div>
            </form>
          </div>
          <!-- /.box -->

       

          <!-- Input addon -->
          
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>