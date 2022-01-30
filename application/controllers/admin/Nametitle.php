<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nametitle extends CI_Controller {

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
		$this->load->model('nametitlemodel');
		$res = $this->nametitlemodel->getnametitle();
		$data ["nametitle"] =$res;
					$this->load->view('admin/header');
				$this->load->view('admin/nametitle_view' , $data);
				$this->load->view('admin/footer');
	}
	
	public function update($id){
		
		$this->load->model('nametitlemodel');
		$res = $this->nametitlemodel->getnametitleByid($id);
		$data ["nametitle"] =$res;
					$this->load->view('admin/header');
				$this->load->view('admin/edit_nametitle' , $data);
				$this->load->view('admin/footer');
		}
	
	
	
	public function updatenametitle(){
		$this->load->model('nametitlemodel');
		
		
				
		$id = $_REQUEST['id'];
		$title = $_REQUEST['title'];
		$name = $_REQUEST['name'];
		
		
		
	if(isset($_FILES["image"]["name"]) && ($_FILES["image"]["name"])){
				$physicalpath =  $_SERVER['DOCUMENT_ROOT']."/".basename(base_url())."/uploads/";
			$image = date("dmYGis").$_FILES["image"]["name"];
			move_uploaded_file($_FILES["image"]["tmp_name"],$physicalpath.$image);
			
			}
		 $this->nametitlemodel->updatenametitle($id,$name,$title,$image);
			
			redirect(base_url()."index.php/admin/nametitle");
			}
		
		
		
	
	
		
}
