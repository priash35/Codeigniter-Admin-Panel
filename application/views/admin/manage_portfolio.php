<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Portfolio
   
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Manage Portfolio</h3>

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
                  
                  <th> Project Title </th>
                  <th>Project Link </th>
                  <th>Project Image</th>
                  <th>Category</th>
                  
                  <th>Action</th>
                  
                  
                </tr>
				          <?php
foreach($portfolio as $allportfolio){
	
?>
                <tr>
                <td><?php echo $allportfolio["title"] ; ?></td>
				<td> <?php echo $allportfolio["project_link"] ; ?></td>
				<td> <img style="width:300px ; height:300px ; " src="<?php echo base_url();?>uploads/<?php echo $allportfolio["image"] ; ?>" /></td>
                <td><?php echo $allportfolio["category"] ; ?></td>
                <td><a href="<?php echo base_url();?>index.php/admin/portfolio/update/<?php echo $allportfolio["id"] ; ?>" > Edit</a> | <a href="<?php echo base_url();?>index.php/admin/portfolio/delete/<?php echo $allportfolio["id"] ; ?>" > Delete</a>
                <td></td>
             
                </tr>
                <?php
}

?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      </section>
      </div>
      