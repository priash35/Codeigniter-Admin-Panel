

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Experience
   
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
              <h3 class="box-title">Experience</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url();?>index.php/admin/experience/update" method="post" enctype="multipart/form-data">
              <div class="box-body">
                  <input type="hidden" name="id" value="<?php echo $experience["id"] ?>" />
				
				<div class="form-group">
                  <label for="exampleInputEmail1">Company Name</label>
                  <input type="text" class="form-control" name="company_name" id="" value="<?php echo $experience["company_name"] ?>">
                </div>
                
				  <div class="form-group">
                  <label for="exampleInputEmail1">Job Position</label>
                  <input type="text" class="form-control" name="position" id="" value="<?php echo $experience["position"] ?>">
                </div>
				
               <div class="form-group">
                  <label for="exampleInputEmail1">Job Description </label>
                  <textarea  class="form-control" name="description" id="" ><?php echo $experience["description"] ?></textarea>
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="text" class="form-control" name="job_date" id="" value="<?php echo $experience["job_date"] ?>">
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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