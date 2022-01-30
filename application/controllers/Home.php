<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	
	public function index()
	
	{
		$this->load->model('homemodel');
		
		///////////NAME TITLE /////////////////
		$res = $this->homemodel->getnametitle();
		$data ["nametitle"] = $res ;
		
		///////////////ABOUT ME ///////////////////////
		
		$res = $this->homemodel->getaboutme();
		$data ["aboutme"] = $res ;
		
		///////////////SKILLS ///////////////////////
		
		$res = $this->homemodel->getskills();
		$data ["skill"] = $res ;
		
		//////////////EXPERIENCE/////////////////////
		$res = $this->homemodel->getexperiences();
		$data ["experience"] = $res ;
		
		/////////////EDUCATION//////////////////
		$res = $this->homemodel->geteducations();
		$data ["education"] = $res ;
		
		////////////PORTFOLIO/////////////////////
		$res = $this->homemodel->getwp();
		$data ["wordpress"] = $res ;
		
		$res = $this->homemodel->getmvc();
		$data ["mvc"] = $res ;
		
		$res = $this->homemodel->getwebdesign();
		$data ["webdesign"] = $res ;
		
		////////////CONFIGURATION/////////////////////
		$res = $this->homemodel->getconfiguration();
		$data ["configuration"] =$res;
		
		////////////SOCIALMEDIA///////////////////////SS
		$res = $this->homemodel->getsocialmedia();
		$data ["socialmedia"] =$res;
		
					$this->load->view('theme_header_view',$data);
				$this->load->view('theme_main_view',$data);
				$this->load->view('theme_footer_view',$data);
		
		
	}
	
	
		
}
