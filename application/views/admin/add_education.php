

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Add Education
   
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
              <h3 class="box-title">Education</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url();?>index.php/admin/education/inserteducation" method="post" enctype="multipart/form-data">
              <div class="box-body">
                  
				
				<div class="form-group">
                  <label for="exampleInputEmail1">Degree / Diploma Title</label>
                  <input type="text" class="form-control" name="title" id="" placeholder="Degree / Diploma Title">
                </div>
                
				  <div class="form-group">
                  <label for="exampleInputEmail1">University / Institute Name</label>
                  <input type="text" class="form-control" name="name_uni" id="" placeholder="University / Institute Name">
                </div>
				
               <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <textarea  class="form-control" name="description" id="" placeholder="Enter Description"></textarea>
                </div>
                
                 <div class="form-group">
                  <label for="exampleInputEmail1">Till Date</label>
                  <input type="text" class="form-control" name="end_date" id="" placeholder="Enter Till Date">

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