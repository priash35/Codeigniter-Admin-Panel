<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experiencemodel extends CI_Model {

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
	
	
	public function getexperiences(){
		//$query = $this->db->query(" select * from product as p,category as c where(p.c_id = c.c_id)");
		
		$query = $this->db->query("select * from work_experience  ");
		$result = $query->result_array();
		return $result;
		
		}
		
		public function insertexperience($company_name,$position,$description,$job_date){
		 $this->db->query("insert into work_experience set company_name='".$company_name."',position='".$position."',description='".$description."',job_date='".$job_date."'");
		
	
		
		}
		
		public function getexperiencebyid($id){
		$query = $this->db->query(" select * from work_experience where id = ".$id);
		$result = $query->row_array();
		return $result;
		
		}
		
		public function updateexperience($id,$company_name,$position,$description,$job_date){
			
			$this->db->query("update work_experience set company_name='".$company_name."',position='".$position."',description='".$description."',job_date='".$job_date."' where id=".$id);
			}
		
		public function deleteexperience($id){
			$this->db->query("delete from  work_experience where id= ".$id);
			}
	
}
