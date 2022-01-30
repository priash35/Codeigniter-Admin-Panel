<section class="aboutme" id="aboutme">
    <div class="container">
      <div class="heading">
        <h2>About me</h2>
        <p>A Small Introduction About My Self</p>
      </div>
      <div class="row">
        <div class=" col-xs-12 col-sm-12 col-md-7 col-lg-7">
       <?php echo $aboutme["description"];?>
          <a href="<?php echo base_url();?>uploads/<?php echo $aboutme["cv"];?>" class="bntDownload" download >Download Printable Resume</a> </div>
        <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-1 col-lg-offset-1 proPic"> <img src="<?php echo base_url();?>uploads/<?php echo $aboutme["image"];?>" alt="" class="img-circle topmar"> </div>
      </div>
    </div>
  </section>
  <!--about me end-->
  <!--technical start-->
  <section class="technical" id="technical">
    <div class="container">
      <div class="heading">
        <h2>Technical Skills</h2>
        <p>I Can Say I’m Quite Ggood At</p>
      </div>
      <div class="row">
       <?php foreach($skill as $allskill){?>
        <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 skillsArea">
          <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6 skills"> <span class="chart skilBg" data-percent="<?php echo $allskill["skill_per"];?>"> <span class="percent"></span> </span>
            <h4><?php echo $allskill["title"];?></h4>
            <p><?php echo $allskill["short_description"];?></p>
          </div>
        </div>
        <?php }?>
      </div>
    </div>
  </section>
  <!--technical end-->
  <!--exprience start-->
  <section class="exprience" id="exprience">
    <div class="container">
      <div class="heading">
        <h2>Work Experience</h2>
        <p>My previous associations</p>
      </div>
      <?php foreach($experience as $allexperience){
			?>
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
        
        
          <div class="workYear"><?php echo $allexperience ["job_date"];?> </div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4><?php echo $allexperience ["company_name"];?></h4>
            <h5><?php echo $allexperience ["position"];?></h5>
            <p><?php echo $allexperience ["description"];?></p>
          </div>
         
        </div>
      </div>
      
       <?php
		}
		?>
    </div>
  </section>
  <!--exprience end-->
  <!--education start-->
  <section class="education" id="education">
    <div class="container">
      <div class="heading">
        <h2>Education & Diplomas</h2>
        <p>What I have done in my academic career</p>
      </div>
      
      

       <?php foreach($education as $alleducation){
			?>
      <div class="row workDetails">
        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
        
        
          <div class="workYear"><?php echo $alleducation ["end_date"];?> </div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 rightArea">
          <div class="arrowpart"></div>
          <div class="exCon">
            <h4><?php echo $alleducation ["title"];?></h4>
            <h5><?php echo $alleducation ["name_uni"];?></h5>
            <p><?php echo $alleducation ["description"];?></p>
          </div>
         
        </div>
      </div>
      
       <?php
		}
		?>
    </div>
  </section>
  <!--education end-->
  <!--protfolio start-->
  <section class="protfolio" id="protfolio">
    <div class="container">
      <div class="heading">
        <h2>Portfolio</h2>
        <p>showcase of my latest works</p>
      </div>
      <div class="portfolioFilter">
        <ul>
          <li><a href="#" data-filter="*" class="current">All</a></li>
          <li><a href="#" data-filter=".photos">Wordpress</a></li>
          <li><a href="#" data-filter=".branding">Php</a></li>
          <li><a href="#" data-filter=".illustration">Web Design </a></li>
        </ul>
      </div>
      <ul class="portfolioContainer row">
      <?php foreach($wordpress as $allwp){?>
        <li class="photos col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="<?php echo base_url();?>uploads/<?php echo $allwp ["image"];?>" title="<?php echo $allwp ["title"];?>" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> <a href="<?php echo $allwp ["project_link"];?>" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="<?php echo base_url();?>uploads/<?php echo $allwp ["image"];?>" alt="<?php echo $allwp ["title"];?>"  > </div>
        </li>         
        <?php
	  }
	  ?>
      
       <?php foreach($mvc as $allmvc){?>
        <li class="branding col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="<?php echo base_url();?>uploads/<?php echo $allmvc ["image"];?>" title="<?php echo $allmvc ["title"];?>" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> <a href="<?php echo $allmvc ["project_link"];?>" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="<?php echo base_url();?>uploads/<?php echo $allmvc ["image"];?>" alt="<?php echo $allmvc ["title"];?>"  > </div>
        </li>         
        <?php
	  }
	  ?>
      
       <?php foreach($webdesign as $allwebdesign){?>
        <li class="illustration col-xs-6 col-sm-4 col-md-3 col-lg-3">
          <div class="lightCon"> <span class="hoverBox"> <span class="smallIcon"> <a rel="lightbox-demo" href="<?php echo base_url();?>uploads/<?php echo $allwebdesign ["image"];?>" title="<?php echo $allwebdesign ["title"];?>" class="zoom lb lb_warsaw1"><i class="fa fa-search fa-2x"></i></a> <a href="<?php echo $allwebdesign ["project_link"];?>" title="Project Link" target="_blank" class="linKed"><i class="fa fa-link fa-2x"></i></i></a> </span> </span> <img src="<?php echo base_url();?>uploads/<?php echo $allwebdesign ["image"];?>" alt="<?php echo $allwebdesign ["title"];?>"  > </div>
        </li>         
        <?php
	  }
	  ?>
      </ul>
    </div>
  </section>
  <!--protfolio end-->
  <!--contact start-->
  <section class="contact" id="contact">
    <div class="container topCon">
      <div class="heading">
        <h2>Get In Touch</h2>
        <p>Please feel free if you would like to have a chat.</p>
      </div>
    </div>
    <div class="row mapArea">
    <!--https://maps.google.com/?ie=UTF8&amp;ll=-37.817682,144.957595&amp;spn=0.01134,0.026157&amp;t=m&amp;z=16&amp;output=embed-->
      <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $configuration ["ad_map"];?>"></iframe>
    </div>
  </section>
  <section class="contactDetails">
    <div class="container">
      <!--contact info start-->
      <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
        <h4>Contact details</h4>
        <p> <i class="fa fa-map-marker fa-lg"></i><?php echo $configuration ["address"];?></p>
        <p> <i class="fa fa-mobile fa-lg"></i><?php echo $configuration ["mobile_no"];?></p>
        <p> <i class="fa fa-envelope-o "></i> <a href="mailto:<?php echo $configuration ["email"];?>"><?php echo $configuration ["email"];?></a></p>
        <p> <i class="fa fa-link "></i> <a href="<?php echo $configuration ["website"];?>"><?php echo $configuration ["website"];?></a></p>
      </div>
      <!--contact info end-->
      <!--contact form start-->
      <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8 conForm">
        <h4>Shoot a message!</h4>
        <div id="message"></div>
        <form method="post" action="php/contact.php" name="cform" id="cform">
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-6 col-md-6 col-lg-6" placeholder="Your name..." >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-6 col-md-6 col-lg-6 noMarr" placeholder="Your email..." >
          <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your message..."></textarea>
          <input type="submit" id="submit" name="send" class="submitBnt" value="Send message">
          <div id="simple-msg"></div>
        </form>
      </div>
      <!--contact form end-->
    </div>
  </section>
  <!--contact end-->