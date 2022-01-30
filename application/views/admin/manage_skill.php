<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Manage Skills 
   
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Skills</h3>

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
                  <th>Skill Title</th>
                  <th>Skill Description</th>
                  <th>Skill Ratio</th>
                
                 
                  <th>Action</th>
                  
                </tr>
		
<?php foreach ($skill as $allskill){
	
	?>
                <tr>
                <td><?php echo $allskill["title"] ; ?></td>
                <td><?php echo $allskill["short_description"] ; ?></td>
                <td> <?php echo $allskill["skill_per"] ; ?></td>
				
				
                <td><a href="<?php echo base_url();?>index.php/admin/skill/edit/<?php echo $allskill["id"] ; ?>" > Edit</a>|<a href="<?php echo base_url();?>index.php/admin/skill/delete/<?php echo $allskill["id"] ; ?>" > Delete</a></td>                </tr>
                
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
      