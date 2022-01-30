<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutmemodel extends CI_Model {

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
	
	
	public function getaboutme(){
		//$query = $this->db->query(" select * from product as p,category as c where(p.c_id = c.c_id)");
		
		$query = $this->db->query("select * from about_me ");
		$result = $query->row_array();
		return $result;
		
		}
		public function getaboutmeByid($id){
		$query = $this->db->query(" select * from about_me where id = ".$id);
		$result = $query->row_array();
		return $result;
		
		}
		public function updateaboutme($id,$description,$image,$cv){
			$instr=""; $instr1="";
			if($image){
			$instr = " , image = '".$image."'";
			$this->db->query("update about_me set description='".$description."' ".$instr." where id=".$id);
			}else if($cv){
				$instr1 = " , cv = '".$cv."'";
			$this->db->query("update about_me set description='".$description."' ".$instr1." where id=".$id);

			}else if ($image or $cv){
					$instr = " , image = '".$image."'";
					$instr1 = " , cv = '".$cv."'";
				}
			$this->db->query("update about_me set description='".$description."' ".$instr." ".$instr1." where id=".$id);
			}
		
		
	
}
