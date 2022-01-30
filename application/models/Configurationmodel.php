<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configurationmodel extends CI_Model {

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
	 


			public function getconfiguration(){
			$query = $this->db->query( "select * from configuration " );
			$result = $query->row_array();
			return $result ;
			}
			
			public function getconfigurationByid($id){
			$query = $this->db->query( "select * from configuration where id=".$id );
			$result = $query->row_array();
			return $result ;
			}
			
			public function updateconfiguration($id,$address,$mobile_no,$email,$website,$ad_map){
			/*$instr="";
			if($image)
			$instr = " , bg_image = '".$image."'";*/
			$this->db->query("update configuration set address='".$address."',mobile_no='".$mobile_no."',email='".$email."',website='".$website."',ad_map='".$ad_map."' where id=".$id);
			}
}
