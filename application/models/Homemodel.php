<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homemodel extends CI_Model {

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
	 


		public function getmyusers(){
			$query = $this->db->query( "select * from users " );
			$result = $query->result_array();
			return $result ;
			}
		public function getnametitle(){
			$query = $this->db->query( "select * from name_job_title " );
			$result = $query->row_array();
			return $result ;
			}
		public function getaboutme(){
			$query = $this->db->query( "select * from about_me" );
			$result = $query->row_array();
			return $result ;
			}
		public function getskills(){
			$query = $this->db->query( "select * from skills" );
			$result = $query->result_array();
			return $result ;
			}
		public function getexperiences(){
			$query = $this->db->query("select * from work_experience  ");
			$result = $query->result_array();
			return $result;
			}
		public function geteducations(){
		$query = $this->db->query("select * from education_diploma  ");
		$result = $query->result_array();
		return $result;
			}
		public function getwp(){
		$query = $this->db->query("select * from portfolio where category= 'Wordpress'");
		$result = $query->result_array();
		return $result;
			}
		public function getmvc(){
		$query = $this->db->query("select * from portfolio where category= 'Php Mvc'  ");
		$result = $query->result_array();
		return $result;
			}
		public function getwebdesign(){
		$query = $this->db->query("select * from portfolio where category= 'Web Design'  ");
		$result = $query->result_array();
		return $result;
			}
		public function getconfiguration(){
			$query = $this->db->query( "select * from configuration " );
			$result = $query->row_array();
			return $result ;
			}
		public function getsocialmedia(){
			$query = $this->db->query( "select * from social_media " );
			$result = $query->row_array();
			return $result ;
			}
			
		
}
