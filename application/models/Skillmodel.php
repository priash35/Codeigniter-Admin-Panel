<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skillmodel extends CI_Model {

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
	
	
	public function getskills(){
		//$query = $this->db->query(" select * from product as p,category as c where(p.c_id = c.c_id)");
		
		$query = $this->db->query("select * from skills ");
		$result = $query->result_array();
		return $result;
		
		}
		
		public function insertskill($title,$short_description,$skill_per){
		 $this->db->query("insert into skills set title='".$title."',short_description='".$short_description."',skill_per='".$skill_per."'");
		
	
		
		}
		
		public function getskillbyid($id){
		$query = $this->db->query(" select * from skills where id = ".$id);
		$result = $query->row_array();
		return $result;
		
		}
		
		public function updateskill($id,$title,$short_description,$skill_per){
			
			$this->db->query("update skills set title='".$title."',short_description='".$short_description."',skill_per='".$skill_per."' where id=".$id);
			}
		
		public function deleteskill($id){
			$this->db->query("delete from  skills where id= ".$id);
			}
	
}
