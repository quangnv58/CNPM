<?php
class Testverifylogin_5 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
		$this->load->model('frontend/user','',TRUE);
		$this->load->model("frontend/mmenu");
		$this->load->library("session");
		$this->load->library("facebook",array(
			"appId"=>"1567383593519565",
			"secret"=>"8e12a6ee40251675e9e965448edf76f1"
		));
		$this->access_token=$this->facebook->getAccessToken();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data=false;
		$user=$this->input->post('manhtien');
		$data_result=$this->user->login($user, "123456abcde");
		$test_name='test function check_database';
		$this->unit->run($data_result, $data, $test_name);	
		$this->load->view("test");
	}
}