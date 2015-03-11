<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mpost extends CI_Model{
	function insert($data){ 
		$this->db->insert("post",$data); 
		return $this->db->insert_id(); 
    }
	public function post_by(){
		$table=$this->db->dbprefix('post');	
		$this->db->order_by('title','asc');
		$query=$this->db->get($table);
		return $query->result_array();
	}

}

?>