<?php

class Test_tinMoi extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
		$this->load->model("frontend/mpost");
	}
	public function index()
	{
		$data=array(
			'user' 	   => "admin",
			'password' => "123456"
			);
		$data2=array(
			'user'     => "admin",
			'password' => "123456"
			);
		$this->mpost->insert($data);
		$test = $query->result_array();
		$expected_result = $data;
		$test_name = 'test signup';
		$this->unit->run($test, $expected_result, $test_name);	
		$this->unit->run($test, $expected_result, "test2");	
		$this->load->view("test");
	}
}
/* End of file Test_tinMoi.php */
/* Location: ./application/controllers/testingunit/Test_tinMoi.php */