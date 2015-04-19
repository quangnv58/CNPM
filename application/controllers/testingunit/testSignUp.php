<?php
class testSignUp extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
		$this->load->model("mlogin");
	}
	public function index()
	{
		/*$user="admin";
		$name="quang";
		$data = array(
			'recruitment'=>$name, 
			'title'=>"Tuy?n nhân viên", 
			'number'=>"10", 
			'position'=>"L?p tr?nh viên C", 
			'postdate'=>"2014-02-03", 
			'outdate'=>"2015-02-03",
			'describer'=>"Làm vi?c part-time",
			'status'=>'1',
			'belong'=>$user 
		);*/
		$data = array (
				'name' => "Tran Manh Tien",
				'user' => "manhtien1212",
				'password' => "12121995",
				'email' => "manhtien121219952gmail.com",
				'field' => "IT"
		);	
		$this->mlogin->insert($data);
		$query=$this->db->get_where('user', array('name'=>"Tran Manh Tien"));
        $row=$query->row();
		$data_result=array(
			'name'=>$row->name, 
			'user'=>$row->user,  
			'password'=>$row->password,
			'email'=>$row->email, 
			'field'=>$row->field, 
		);
		$test_name='test add account to database';
		$this->unit->run($data_result, $data, $test_name);	
		$this->load->view("test");
	}
}