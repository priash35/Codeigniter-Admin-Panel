

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Update About Me
   
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
              <h3 class="box-title">Update About Me</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url();?>index.php/admin/aboutme/update" method="post" enctype="multipart/form-data">
			           <input type="hidden" class="form-control" name="id" id="" value="<?php echo $about["id"]; ?>" >
      
              
				
				
                </div>
				  <div class="form-group">
                  <label for="exampleInputPassword1">About Me Description</label>
                  <textarea name="description" id="editor1" class="form-control"><?php echo $about["description"]; ?></textarea>
                </div>
				
                <div class="form-group">
                  <label for="exampleInputFile">Product Image</label>
                  <input type="file" id="exampleInputFile" name="image"> <br>
<br>
				<img src="<?php echo base_url();?>/uploads/<?php echo $about["image"]; ?>" width="150px">

                </div>
               
			   <div class="form-group">
                  <label for="exampleInputFile">Upload Cv </label>
                  <input type="file" id="exampleInputFile" name="cv"> <br>
<br>
				<p><?php echo base_url();?>/uploads/<?php echo $about["cv"]; ?></p>

                </div>
			   
			   
			
			   
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
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
  
  <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
  
  <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
 
  });
</script>