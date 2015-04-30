<?php
Class User extends CI_Model{
	function login($user, $password)
	{
		$this->db->select('opentid, user, password');
		$this->db->from('user');
		$this->db->where('user', $user);
		$this->db->where('password', $password);
		$this->db->limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
}
/* End of file */
/* Location: ./application/models/User.php */
?>