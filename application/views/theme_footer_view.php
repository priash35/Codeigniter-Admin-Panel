  <!--footer start-->
  <section class="footer" id="footer">
    <div class="container">
      <ul>
        <li><a href="<?php echo $socialmedia["facebooklink"];?>"><i class="fa fa-facebook fa-2x"></i></a></li>
        <li><a href="<?php echo $socialmedia["linkedinlink"];?>"><i class="fa fa-linkedin fa-2x"></i></a></li>
        <li><a href="<?php echo $socialmedia["googlepluslink"];?>"><i class="fa fa-linkedin fa-2x"></i></a></li>
      </ul>
    </div>
  </section>
  <!--footer end-->
</div>
<!--wrapper end-->
<!--modernizr js-->
<script type="text/javascript" src="<?php echo base_url('shariqsheki/js/modernizr.custom.26633.js') ?>"></script>
<!--jquary min js-->
<script type="text/javascript" src="<?php echo base_url('shariqsheki/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('shariqsheki/js/bootstrap.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('shariqsheki/js/jquery.gridrotator.js') ?>"></script>
<!--for custom jquary-->
<script src="<?php echo base_url('shariqsheki/js/custom.js') ?>"></script>
<!--for placeholder jquary-->
<script type="text/javascript" src="<?php echo base_url('shariqsheki/js/jquery.placeholder.js') ?>"></script>
<!--for menu jquary-->
<script type="text/javascript" src="<?php echo base_url('shariqsheki/js/stickUp.js') ?>"></script>
<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  //enabling stickUp on the '.navbar-wrapper' class
  $('.navbar-wrapper').stickUp({
				parts: {
				  0: 'banner',
				  1: 'aboutme',
				  2: 'technical',
				  3: 'exprience',
				  4: 'education',
				  5: 'protfolio',
				  6: 'contact'
				},
				itemClass: 'menuItem',
				itemHover: 'active',
				topMargin: 'auto'
			  });
});

$( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
  $( ".navbar-collapse" ).addClass( "hideClass" );
});


$( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
  $( ".navbar-collapse" ).addClass( "collapse" );
});


$( ".navbar.navbar-inverse.navbar-static-top a" ).click(function() {
  $( ".navbar-collapse" ).removeClass( "in" );
});

$( ".navbar-toggle" ).click(function() {
  $( ".navbar-collapse" ).removeClass( "hideClass" );
});


});
</script>
<!--for portfoli filter jquary-->
<script src="<?php echo base_url('shariqsheki/js/jquery.isotope.js') ?>" type="text/javascript"></script>
<!--for portfoli lightbox -->
<?php echo link_tag('shariqsheki/css/jquery-ui-1.8.16.custom.css') ?>

<?php echo link_tag('shariqsheki/css/lightbox.min.css') ?>

<script type="text/javascript" src="<?php echo base_url('shariqsheki/js/jquery.ui.widget.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('shariqsheki/js/jquery.ui.rlightbox.js') ?>"></script>
<!--for skill chat jquary-->
<script src="<?php echo base_url('shariqsheki/js/jquery.easing.min.js') ?>"></script>
<script src="<?php echo base_url('shariqsheki/js/jquery.easypiechart.js') ?>"></script>
<!--contact form js-->
<script type="text/javascript" src="<?php echo base_url('shariqsheki/js/jquery.contact.js') ?>"></script>
</body>
</html>