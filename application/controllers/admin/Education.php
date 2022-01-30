<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Education extends CI_Controller {

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
		$this->load->model('educationmodel');
		$this->load->view('admin/header');
		$this->load->view('admin/add_education');
		$this->load->view('admin/footer');
	}
	
	
	public function addeducation(){
		
		$this->load->view('admin/header');
		$this->load->view('admin/add_education');
		$this->load->view('admin/footer');
		}
	public function inserteducation(){
				$this->load->model('educationmodel');
		$title = $_REQUEST["title"];
		$name_uni = $_REQUEST["name_uni"];
		$description = $_REQUEST["description"];
		$end_date = $_REQUEST["end_date"];
		
		$this->educationmodel->inserteducation($title,$name_uni,$description,$end_date);
		
		redirect(base_url()."index.php/admin/education/addeducation");

		
		}
		
		public function manageeducation(){
			$this->load->model("educationmodel");
			$res = $this->educationmodel->geteducations();
			$data = array();
			$data ["education"] = $res ;
			
			$this->load->view('admin/header');
			$this->load->view('admin/manage_education',$data);
			$this->load->view('admin/footer');
			
			}
		public function edit($id){
			$this->load->model("educationmodel");
			$res = $this->educationmodel->geteducationbyid($id);
			$data ["education"] = $res ;
			$this->load->view('admin/header');
			$this->load->view('admin/edit_education',$data);
			$this->load->view('admin/footer');
			}
			
		public function update(){
			
			$this->load->model('educationmodel');
			$id = $_REQUEST["id"];
		$title = $_REQUEST["title"];
		$name_uni = $_REQUEST["name_uni"];
		$description = $_REQUEST["description"];
		$end_date = $_REQUEST["end_date"];
		
		
		$this->educationmodel->updateeducation($id ,$title,$name_uni,$description,$end_date);
		
		redirect(base_url()."index.php/admin/education/manageeducation");
			}
	 public function delete($id){
		 		$this->load->model("educationmodel");
			 $this->educationmodel->deleteeducation($id);
			 redirect(base_url()."index.php/admin/education/manageeducation");
		 }
}
