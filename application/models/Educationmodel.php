<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Educationmodel extends CI_Model {

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
	
	
	public function geteducations(){
		//$query = $this->db->query(" select * from product as p,category as c where(p.c_id = c.c_id)");
		
		$query = $this->db->query("select * from education_diploma  ");
		$result = $query->result_array();
		return $result;
		
		}
		
		public function inserteducation($title,$name_uni,$description,$end_date){
		 $this->db->query("insert into education_diploma set title='".$title."',name_uni='".$name_uni."',description='".$description."',end_date='".$end_date."'");
		
	
		
		}
		
		public function geteducationbyid($id){
		$query = $this->db->query(" select * from education_diploma where id = ".$id);
		$result = $query->row_array();
		return $result;
		
		}
		
		public function updateeducation($id,$title,$name_uni,$description,$end_date){
			
			$this->db->query("update education_diploma set title='".$title."',name_uni='".$name_uni."',description='".$description."',end_date='".$end_date."'");
			}
		
		public function deleteeducation($id){
			$this->db->query("delete from  education_diploma where id= ".$id);
			}
	
}
