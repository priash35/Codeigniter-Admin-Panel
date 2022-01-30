<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Manage About Me 
   
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage About Me</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
          
              <table class="table table-hover">
			  
                <tr>
                  <th>About Me Description</th>
                  <th>Profile Image</th>
                  <th>Cv Link</th>
                
                 
                  <th>Action</th>
                  
                </tr>
		

                <tr>
                <td><?php echo $about["description"] ; ?></td>
                <td> <img style="width:300px ; height:300px ; " src="<?php echo base_url();?>uploads/<?php echo $about["image"] ; ?>" /></td>
                <td> <?php echo $about["cv"] ; ?></td>
				
				
                <td><a href="<?php echo base_url();?>index.php/admin/aboutme/edit/<?php echo $about["id"] ; ?>" > Update</a></td>                </tr>
  
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      </section>
      </div>
      