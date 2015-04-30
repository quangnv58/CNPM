<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trangchu extends CI_Controller 
{
	private $uid;
	private $access_token;
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->model("frontend/mmenu");
		$this->data['menu']=$this->mmenu->menu_by(1,0);
		$this->load->model("frontend/mpost");
		$this->data['post']=$this->mpost->post_by();
		$this->load->library("session");
		$this->load->library("facebook",array(
			"appId"=>"1567383593519565",
			"secret"=>"8e12a6ee40251675e9e965448edf76f1"
		));
		$this->uid= $this->facebook->getUser();
    	$this->access_token=$this->facebook->getAccessToken();
		$this->facebook->setAccessToken($this->access_token);
		$session_data=$this->session->userdata('logged_in');
		$this->data['user']=$session_data['user'];
 
	}
	public function index()
	{
		$this->load->view('frontend/home',$this->data);	
	}
	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('http://localhost/CNPM', 'refresh');
	}
}
