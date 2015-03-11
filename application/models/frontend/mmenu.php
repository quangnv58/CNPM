<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mmenu extends CI_Model{
	public function menu_by($level,$parent_id){
		$table=$this->db->dbprefix('menu');	
		$this->db->where('level',$level);
		$this->db->where('parent_id',$parent_id);
		$this->db->where('status',1);
		$this->db->order_by('sequence','asc');
		$query=$this->db->get($table);
		return $query->result_array();
	}
}

?>