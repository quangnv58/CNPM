<?php

class mlogin extends CI_Model{
	
	
	public function insert($tk = array()){
		$this->db->insert('svc_user',$tk);
	}	
}	