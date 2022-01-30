<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experience extends CI_Controller {

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
		$this->load->model('experiencemodel');
		$this->load->view('admin/header');
		$this->load->view('admin/add_experience');
		$this->load->view('admin/footer');
	}
	
	
	public function addexperience(){
		
		$this->load->view('admin/header');
		$this->load->view('admin/add_experience');
		$this->load->view('admin/footer');
		}
	public function insertexperience(){
				$this->load->model('experiencemodel');
		$company_name = $_REQUEST["company_name"];
		$position = $_REQUEST["position"];
		$description = $_REQUEST["description"];
		$job_date = $_REQUEST["job_date"];
		
		$this->experiencemodel->insertexperience($company_name,$position,$description,$job_date);
		
		redirect(base_url()."index.php/admin/experience/addexperience");

		
		}
		
		public function manageexperience(){
			$this->load->model("experiencemodel");
			$res = $this->experiencemodel->getexperiences();
			$data = array();
			$data ["experience"] = $res ;
			
			$this->load->view('admin/header');
			$this->load->view('admin/manage_experience',$data);
			$this->load->view('admin/footer');
			
			}
		public function edit($id){
			$this->load->model("experiencemodel");
			$res = $this->experiencemodel->getexperiencebyid($id);
			$data ["experience"] = $res ;
			$this->load->view('admin/header');
			$this->load->view('admin/edit_experience',$data);
			$this->load->view('admin/footer');
			}
			
		public function update(){
			
			$this->load->model('experiencemodel');
			$id = $_REQUEST["id"];
		$company_name = $_REQUEST["company_name"];
		$position = $_REQUEST["position"];
		$description = $_REQUEST["description"];
		$job_date = $_REQUEST["job_date"];
		
		$this->experiencemodel->updateexperience($id,$company_name,$position,$description,$job_date);
		
		redirect(base_url()."index.php/admin/experience/manageexperience");
			}
	 public function delete($id){
		 		$this->load->model("experiencemodel");
			 $this->experiencemodel->deleteexperience($id);
			 redirect(base_url()."index.php/admin/experience/manageexperience");
		 }
}
