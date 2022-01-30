<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skill extends CI_Controller {

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
		$this->load->model('skillmodel');
		
		$this->load->view('admin/header');
		$this->load->view('admin/add_skill');
		$this->load->view('admin/footer');
	}
	
	
	public function addskill(){
		
		$this->load->view('admin/header');
		$this->load->view('admin/add_skill');
		$this->load->view('admin/footer');
		}
	public function insertskill(){
				$this->load->model('skillmodel');
		$title = $_REQUEST["title"];
		$short_description = $_REQUEST["short_description"];
		$skill_per = $_REQUEST["skill_per"];
		
		
		$this->skillmodel->insertskill($title,$short_description,$skill_per);
		
		redirect(base_url()."index.php/admin/skill/addskill");

		
		}
		
		public function manageskill(){
			$this->load->model("skillmodel");
			$res = $this->skillmodel->getskills();
			$data = array();
			$data ["skill"] = $res ;
			
			$this->load->view('admin/header');
			$this->load->view('admin/manage_skill',$data);
			$this->load->view('admin/footer');
			
			}
		public function edit($id){
			$this->load->model("skillmodel");
			$res = $this->skillmodel->getskillbyid($id);
			$data ["skill"] = $res ;
			$this->load->view('admin/header');
			$this->load->view('admin/edit_skill',$data);
			$this->load->view('admin/footer');
			}
			
		public function update(){
			
			$this->load->model('skillmodel');
			$id = $_REQUEST["id"];
		$title = $_REQUEST["title"];
		$short_description = $_REQUEST["short_description"];
		$skill_per = $_REQUEST["skill_per"];
		
		
		$this->skillmodel->updateskill($id,$title,$short_description,$skill_per);
		
		redirect(base_url()."index.php/admin/skill/manageskill");
			}
	 public function delete($id){
		 		$this->load->model("skillmodel");
			 $this->skillmodel->deleteskill($id);
			 redirect(base_url()."index.php/admin/skill/manageskill");
		 }
}
