<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

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
		$this->load->model('portfoliomodel');
		$res = $this->portfoliomodel->getportfolio();
		$data ["portfolio"] =$res;
					$this->load->view('admin/header');
				$this->load->view('admin/manage_portfolio' , $data);
				$this->load->view('admin/footer');
	}
	
	public function update($id){
		
		$this->load->model('portfoliomodel');
		$res = $this->portfoliomodel->getportfolioByid($id);
		$data ["portfolio"] =$res;
					$this->load->view('admin/header');
				$this->load->view('admin/edit_portfolio' , $data);
				$this->load->view('admin/footer');
		}
	
	
	
	public function updateportfolio(){
		$this->load->model('portfoliomodel');
		
		
				
		$id = $_REQUEST['id'];
		$title = $_REQUEST['title'];
		$project_link = $_REQUEST['project_link'];
		$category = $_REQUEST['category'];
		
		
		
	if(isset($_FILES["image"]["name"]) && ($_FILES["image"]["name"])){
				$physicalpath =  $_SERVER['DOCUMENT_ROOT']."/".basename(base_url())."/uploads/";
			$image = date("dmYGis").$_FILES["image"]["name"];
			move_uploaded_file($_FILES["image"]["tmp_name"],$physicalpath.$image);
		
			
			 $this->portfoliomodel->updateportfolio($id,$title,$project_link,$category,$image);
			}
		
			
			redirect(base_url()."index.php/admin/portfolio");
			}
		public function addportfolio(){
		
		$this->load->view('admin/header');
				$this->load->view('admin/add_portfolio' );
				$this->load->view('admin/footer');
		}
			public function insertportfolio(){
				
			
		$this->load->model('portfoliomodel');
		
		
		
		$title = $_REQUEST['title'];
		$project_link = $_REQUEST['project_link'];
		$category = $_REQUEST['category'];
		
		
	$physicalpath =  $_SERVER['DOCUMENT_ROOT']."/".basename(base_url())."/uploads/";
			$image = date("dmYGis").$_FILES["image"]["name"];
			if(move_uploaded_file($_FILES["image"]["tmp_name"],$physicalpath.$image)){
		
			 $this->portfoliomodel->insportfolio($title,$project_link,$category,$image);
			redirect(base_url()."index.php/admin/portfolio/addportfolio");
			}
		
		
		
			}
	public function delete($id){
		$this->load->model('portfoliomodel');
		$this->portfoliomodel->deletepro($id);
		redirect(base_url()."index.php/admin/portfolio");
		
		}
		
}
