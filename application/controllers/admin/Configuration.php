<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuration extends CI_Controller {

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
		$this->load->model('configurationmodel');
		$res = $this->configurationmodel->getconfiguration();
		$data ["configuration"] =$res;
					$this->load->view('admin/header');
				$this->load->view('admin/configuration_view' , $data);
				$this->load->view('admin/footer');
	}
	
	public function update($id){
		
		$this->load->model('configurationmodel');
		$res = $this->configurationmodel->getconfigurationByid($id);
		$data ["configuration"] =$res;
					$this->load->view('admin/header');
				$this->load->view('admin/edit_configuration' , $data);
				$this->load->view('admin/footer');
		}
	
	
	
	public function updateconfiguration(){
		$this->load->model('configurationmodel');
		
		
		$id = $_REQUEST['id'];	
		$address = $_REQUEST['address'];
		$mobile_no = $_REQUEST['mobile_no'];
		$email = $_REQUEST['email'];
		$website = $_REQUEST['website'];
		$ad_map = $_REQUEST['ad_map'];
		
		
	
		 $this->configurationmodel->updateconfiguration($id,$address,$mobile_no,$email,$website,$ad_map);
			
			redirect(base_url()."index.php/admin/configuration");
			}
		
		
		
	
	
		
}
