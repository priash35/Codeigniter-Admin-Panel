<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    
    
    
    
<?php echo link_tag('assets/bootstrap/css/style.css') ?>
    
    
    
  </head>

  <body>

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>


<form action="<?php echo base_url(); ?>index.php/login/getlogin" method="post">
  <h4> Login  </h4>
  <?php echo $this->session->flashdata("error"); ?>
  <input name="user_name" class="name" type="text" placeholder="Enter Eamil"/>
  <input name="password" class="pw" type="password" placeholder="Enter Password"/>

  <input type="submit" class="button" type="submit" value="Log in"/>
</form>
    
    
    
    
    
  </body>
</html>
