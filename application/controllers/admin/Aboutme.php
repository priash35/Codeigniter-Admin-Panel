<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutme extends CI_Controller {

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
		$this->load->model('Aboutmemodel');
		$result = $this->Aboutmemodel->getaboutme();
		$data["about"] = $result;
		$this->load->view('admin/header');
		$this->load->view('admin/manage_aboutme',$data);
		$this->load->view('admin/footer');
	}
	public function edit($id){
				$this->load->model('Aboutmemodel');
		$result = $this->Aboutmemodel->getaboutmeByid($id);
		$data["about"] = $result;
		$this->load->view('admin/header');
		$this->load->view('admin/edit_about',$data);
		$this->load->view('admin/footer');
		
		}
		public function update(){
		$this->load->model('aboutmemodel');
		
		
				
		$id = $_REQUEST['id'];
		$description = $_REQUEST['description'];
		
		
		
		
	if(isset($_FILES["image"]["name"]) && ($_FILES["image"]["name"])){
				$physicalpath =  $_SERVER['DOCUMENT_ROOT']."/".basename(base_url())."/uploads/";
			$image = date("dmYGis").$_FILES["image"]["name"];
			move_uploaded_file($_FILES["image"]["tmp_name"],$physicalpath.$image);
			
			}
	if(isset($_FILES["cv"]["name"]) && ($_FILES["cv"]["name"])){
				$physicalpath1 =  $_SERVER['DOCUMENT_ROOT']."/".basename(base_url())."/uploads/";
			$cv = date("dmYGis").$_FILES["cv"]["name"];
			move_uploaded_file($_FILES["cv"]["tmp_name"],$physicalpath1.$cv);
			
			}
		 $this->aboutmemodel->updateaboutme($id,$description,$image,$cv);
			
			redirect(base_url()."index.php/admin/aboutme");
			}
	 
}
