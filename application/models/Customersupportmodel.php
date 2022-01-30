<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customersupportmodel extends CI_Model {

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
	
	
	public function getcustomersupports(){
		//$query = $this->db->query(" select * from product as p,category as c where(p.c_id = c.c_id)");
		
		$query = $this->db->query("select * from customersupport  ");
		$result = $query->result_array();
		return $result;
		
		}
		
		
	
}
