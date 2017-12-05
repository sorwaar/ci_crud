<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class my_model extends CI_Model{
	
	public function getData(){
		$query = $this->db->get('list');
		if ($query->num_rows() > 0){
			return $query->result();
		}
	}

	public function addpost($data){
		return $this->db->insert('list', $data);
		}
}

?>