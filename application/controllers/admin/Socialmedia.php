<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socialmedia extends CI_Controller {

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
		$this->load->model('socialmediamodel');
		$res = $this->socialmediamodel->getsocialmedia();
		$data ["socialmedia"] =$res;
					$this->load->view('admin/header');
				$this->load->view('admin/socialmedia_view' , $data);
				$this->load->view('admin/footer');
	}
	
	public function update($id){
		
		$this->load->model('socialmediamodel');
		$res = $this->socialmediamodel->getsocialmediaByid($id);
		$data ["socialmedia"] =$res;
					$this->load->view('admin/header');
				$this->load->view('admin/edit_socialmedia' , $data);
				$this->load->view('admin/footer');
		}
	
	
	
	public function updatesocialmedia(){
		$this->load->model('socialmediamodel');
		
		
		$id = $_REQUEST['id'];	
		$facebooklink = $_REQUEST['facebooklink'];
		$googlepluslink = $_REQUEST['googlepluslink'];
		$linkedinlink = $_REQUEST['linkedinlink'];
		
		
		
	
		 $this->socialmediamodel->updatesocialmedia($id,$facebooklink,$googlepluslink,$linkedinlink);
			
			redirect(base_url()."index.php/admin/socialmedia");
			}
		
		
		
	
	
		
}
