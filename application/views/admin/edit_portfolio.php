

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Portfolio
   
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
              <h3 class="box-title"> Edit Portfolio</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url();?>index.php/admin/portfolio/updateportfolio" method="post" enctype="multipart/form-data">
              <div class="box-body">
                  
				<input type="hidden" class="form-control" name="id" id="" value="<?php echo $portfolio['id']?>">
				<div class="form-group">
                  <label for="exampleInputEmail1">Project Title</label>
                  <input type="text" class="form-control" name="title" id="" value="<?php echo $portfolio['title']?>">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Project Link</label>
                  <input type="text" class="form-control" name="project_link" id="" value="<?php echo $portfolio['project_link']?>">
                </div>
                
			<div class="form-group">
                  <label for="exampleInputEmail1">Select Project Category</label>
                  <select name="category">
                 <option  selected="selected" value="<?php echo $portfolio['category']?>"><?php echo $portfolio['category']?> </option>
                 
                           <option value="wordpress">Wordpress </option>
                  <option value="Php Mvc">Php Mvc</option>
                  <option value="Web Design"> Web Design</option>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Choose Project Image</label>
                  <input type="file"  name="image" id="">
                </div>
                
                
                <div class="form-group">
                  <img style="height:100px;width:100px;" src="<?php echo base_url();?>uploads/<?php echo $portfolio["image"] ; ?>" >
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