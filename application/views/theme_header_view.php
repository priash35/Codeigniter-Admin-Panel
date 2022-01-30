<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]--><head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Shariq Hussain Portfolio</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--main style-->
<?php echo link_tag('shariqsheki/css/bootstrap.css') ?>
<?php echo link_tag('shariqsheki/css/style.css') ?>
<!--background slider style-->
<?php echo link_tag('shariqsheki/css/slideshow.css') ?>
<!--google font style-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
<!--font-family: 'Open Sans', sans-serif;-->
<!-- font css style-->

<?php echo link_tag('shariqsheki/css/font-awesome.css') ?>
<!--for slider style-->

<noscript>
<?php echo link_tag('shariqsheki/css/fallback.css"') ?>
</noscript>
<!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="css/fallback.css" />
		<![endif]-->
</head><body>
<!--wrapper start-->
<div class="wrapper" id="wrapper">
  <header>
    <!--banner start-->
    <div class="banner row" id="banner">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 noPadd" style="height:100%">
        <!--background slide show start-->
        <div class="bannerPart"> <img src="<?php echo base_url();?>uploads/<?php echo $nametitle["bg_image"] ; ?>" alt="" class="bannerImg"> </div>
        <!--background slide show end-->
      </div>
    </div>
    <!--banner end-->
    <div class="bannerText container">
      <h1><?php echo $nametitle["name"];?></h1>
      <h2><?php echo $nametitle["title"];?></h2>
    </div>
    <!--menu start-->
    <div class="menu">
      <div class="navbar-wrapper">
        <div class="container">
          <div class="navwrapper">
            <div class="navbar navbar-inverse navbar-static-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                  <a class="navbar-brand" href="#">Menu</a> </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li class="menuItem active"><a href="#wrapper">Home</a></li>
                    <li class="menuItem"><a href="#aboutme">About</a></li>
                    <li class="menuItem"><a href="#technical">Skills</a></li>
                    <li class="menuItem"><a href="#exprience">Experience</a></li>
                    <li class="menuItem"><a href="#education">Education</a></li>
                    <li class="menuItem"><a href="#protfolio">Portfolio</a></li>
                    <li class="menuItem"><a href="#contact">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- End Navbar -->
        </div>
      </div>
    </div>
    <!--menu end-->
  </header>