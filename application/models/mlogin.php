<?php

class mlogin extends CI_Model{
	

	public function findAll(){
		return $this->db->get('svc_user')->result();
	}
	public function insert($tk = array()){
		$this->db->insert('svc_user',$tk);
	}	
	public function find($data){
		$this->db->where('name', $data['name']);
		return $this->db->get('svc_user')->row();
	}
}
	