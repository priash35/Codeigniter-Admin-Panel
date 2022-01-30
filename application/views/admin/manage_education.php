<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Manage Education 
   
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Education</h3>

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
                  <th>Company Name</th>
                  <th>Position</th>
                  <th>Description</th>
                  <th>Job Date</th>
                 
                  <th>Action</th>
                  
                </tr>
		
<?php foreach ($education as $alleducation){
	
	?>
                <tr>
                <td><?php echo $alleducation["title"] ; ?></td>
                <td><?php echo $alleducation["name_uni"] ; ?></td>
                <td><?php echo $alleducation["description"] ; ?></td>
                <td><?php echo $alleducation["end_date"] ; ?></td>
				
				
                <td><a href="<?php echo base_url();?>index.php/admin/education/edit/<?php echo $alleducation["id"] ; ?>" > Edit</a>|<a href="<?php echo base_url();?>index.php/admin/education/delete/<?php echo $alleducation["id"] ; ?>" > Delete</a></td>                </tr>
                
                <?php
}?>
  
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      </section>
      </div>
      