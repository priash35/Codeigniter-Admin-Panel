<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Configuration
   
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Manage Configuration</h3>

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
                  
                  <th> Address </th>
                  <th>Mobile Number </th>
                  <th>Email</th>
                  <th>Website Link</th>
                  <th>Map Address</th>
                  <th>Update</th>
                  
                  
                </tr>
				          <?php

 
	
?>
                <tr>
                <td><?php echo $configuration["address"] ; ?></td>
				<td> <?php echo $configuration["mobile_no"] ; ?></td>
                <td><?php echo $configuration["email"] ; ?></td>
				<td> <?php echo $configuration["website"] ; ?></td>
                <td> <?php echo $configuration["ad_map"] ; ?></td>
				
                <td><a href="<?php echo base_url();?>index.php/admin/configuration/update/<?php echo $configuration["id"] ; ?>" > Update</a></td>
             
                </tr>
                <?php

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
      