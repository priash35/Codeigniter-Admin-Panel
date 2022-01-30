

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Add Portfolio
   
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
              <h3 class="box-title"> Add Portfolio</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url();?>index.php/admin/portfolio/insertportfolio" method="post" enctype="multipart/form-data">
              <div class="box-body">
                  
				
				<div class="form-group">
                  <label for="exampleInputEmail1">Project Title</label>
                  <input type="text" class="form-control" name="title" id="" placeholder="Project Title">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Project Link</label>
                  <input type="text" class="form-control" name="project_link" id="" placeholder="Project Link">
                </div>
                
			<div class="form-group">
                  <label for="exampleInputEmail1">Select Project Category</label>
                  <select name="category">
                  
                  <option value="wordpress">Wordpress </option>
                  <option value="Php Mvc">Php Mvc</option>
                  <option value="Web Design"> Web Design</option>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Choose Image </label>
                  <input type="file"  name="image" id="">
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