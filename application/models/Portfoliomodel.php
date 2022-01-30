<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfoliomodel extends CI_Model {

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
	 


			public function getportfolio(){
			$query = $this->db->query( "select * from portfolio " );
			$result = $query->result_array();
			return $result ;
			}
			
			public function getportfolioByid($id){
			$query = $this->db->query( "select * from portfolio where id=".$id );
			$result = $query->row_array();
			return $result ;
			}
			
			public function updateportfolio($id,$title,$project_link,$category,$image){
			$instr="";
			if($image)
			$instr = " , image = '".$image."'";
			$this->db->query("update portfolio set title='".$title."',project_link='".$project_link."',category='".$category."' ".$instr." where id=".$id);
			}
			
			public function insportfolio($title,$project_link,$category,$image){
				$this->db->query("insert into portfolio set title='".$title."',project_link='".$project_link."',category='".$category."',image='".$image."'" );
				}
			public function deletepro($id){
				
				$this->db->query("delete from portfolio where id=".$id);
				}
}
