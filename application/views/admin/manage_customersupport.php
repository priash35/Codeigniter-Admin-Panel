<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Manage Customer Support 
   
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Customer Support</h3>

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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Comment</th>
                  <th>Reason</th>
                 
                 
                </tr>
		
<?php foreach ($support as $customersupport){
	
	?>
                <tr>
                <td><?php echo $customersupport["name"] ; ?></td>
                <td><?php echo $customersupport["email"] ; ?></td>
                <td><?php echo $customersupport["comment"] ; ?></td>
                <td><?php echo $customersupport["reason"] ; ?></td>
				
				
                        </tr>
                
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
      