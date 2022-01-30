<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('login_view');
		
		
	}
	public function getlogin(){
		$this->load->library("encrypt");
		
		
		$user_name = $_REQUEST['user_name'];
		$password = $_REQUEST['password'];
		
		$this->load->model('loginmodel');
		
		$admindetails = $this->loginmodel->getadmin($user_name);
		
		
		if(isset($admindetails['password'])){
			
			
			$passwordcode = $this->encrypt->decode($admindetails['password']);
			
			
			
			if($password == $passwordcode){
				
				$this->session->set_userdata("adminID" , $admindetails["id"]);
					$this->session->set_userdata("adminName" , $admindetails["name"]);
						$this->session->set_userdata("adminEmail" , $admindetails["email"]);	
				redirect(base_url()."index.php/dashboard");
				}else {
					$this->session->set_flashdata("error","Invalid Password");
					redirect(base_url());
					exit;
					}
					
					//invalid logins
			}else{
				$this->session->set_flashdata("error","Invalid User");
					redirect(base_url());
					exit;
				}
		
		}
}
