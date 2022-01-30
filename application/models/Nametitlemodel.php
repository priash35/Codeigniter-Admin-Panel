<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nametitlemodel extends CI_Model {

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
	 


			public function getnametitle(){
			$query = $this->db->query( "select * from name_job_title " );
			$result = $query->row_array();
			return $result ;
			}
			
			public function getnametitleByid($id){
			$query = $this->db->query( "select * from name_job_title where id=".$id );
			$result = $query->row_array();
			return $result ;
			}
			
			public function updatenametitle($id,$name,$title,$image){
			$instr="";
			if($image)
			$instr = " , bg_image = '".$image."'";
			$this->db->query("update name_job_title set name='".$name."',title='".$title."' ".$instr." where id=".$id);
			}
}
