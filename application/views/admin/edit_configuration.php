

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Configuration
   
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
              <h3 class="box-title"> Configuration</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url();?>index.php/admin/configuration/updateconfiguration" method="post" enctype="multipart/form-data">
              <div class="box-body">
                  
				<input type="hidden" class="form-control" name="id" id="" value="<?php echo $configuration['id']?>">
				<div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <input type="text" class="form-control" name="address" id="" value="<?php echo $configuration['address']?>">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Mobile No</label>
                  <input type="text" class="form-control" name="mobile_no" id="" value="<?php echo $configuration['mobile_no']?>">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" name="email" id="" value="<?php echo $configuration['email']?>">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Website Link</label>
                  <input type="text" class="form-control" name="website" id="" value="<?php echo $configuration['website']?>">
                </div>
                
				 <div class="form-group">
                  <label for="exampleInputEmail1">Map Address</label>
                  <input type="text" class="form-control" name="ad_map" id="" value="<?php echo $configuration['ad_map']?>">
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