

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Add Skill
   
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
              <h3 class="box-title">Skill</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url();?>index.php/admin/skill/insertskill" method="post" enctype="multipart/form-data">
              <div class="box-body">
                  
				
				<div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" name="title" id="" placeholder="Enter Skill Title">
                </div>
                
				  <div class="form-group">
                  <label for="exampleInputEmail1">Skill Short Description</label>
                  <input type="text" class="form-control" name="short_description" id="" placeholder="Enter Short Description">
                </div>
				
               <div class="form-group">
                  <label for="exampleInputEmail1">Skill Ratio</label>
                  <input type="number" class="form-control" name="skill_per" id="" placeholder="Enter Skill Ratio">
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