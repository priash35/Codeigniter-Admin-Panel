

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Name Title And Image
   
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
              <h3 class="box-title"> Edit Name Title And Image</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url();?>index.php/admin/nametitle/updatenametitle" method="post" enctype="multipart/form-data">
              <div class="box-body">
                  
				<input type="hidden" class="form-control" name="id" id="" value="<?php echo $nametitle['id']?>">
				<div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" name="name" id="" value="<?php echo $nametitle['name']?>">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" name="title" id="" value="<?php echo $nametitle['title']?>">
                </div>
                
			<div class="form-group">
                  <label for="exampleInputEmail1">Choose Image For Profile 294*294</label>
                  <input type="file"  name="image" id="">
                </div>
                
                <div class="form-group">
                  <img style="height:100px;width:100px;" src="<?php echo base_url();?>uploads/<?php echo $nametitle["bg_image"] ; ?>" >
                </div>
                
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" name="flightsubmit"  class="btn btn-primary" value="Submit"/>
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