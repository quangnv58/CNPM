<?php
class Test_signUp extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
		$this->load->model("mlogin");
	}
	public function index()
	{
		$data = array (
			'name' 	   => "Tran Manh Tien",
			'user' 	   => "manhtien1212",
			'password' => "12121995",
			'email'    => "manhtien121219952gmail.com",
			'field'    => "IT"
		);	
		$this->mlogin->insert($data);
		$query = $this->db->get_where('user', array('name' => "Tran Manh Tien"));
        $row = $query->row();
		$data_result = array(
			'name'     => $row->name, 
			'user'     => $row->user,  
			'password' => $row->password,
			'email'    => $row->email, 
			'field'    => $row->field, 
		);
		$test_name = 'test add account to database';
		$this->unit->run($data_result, $data, $test_name);	
		$this->load->view("test");
	}
}
/* End of file test_sinUp.php */
/* Location: ./application/controllers/testingunit/Test_signUp.php */