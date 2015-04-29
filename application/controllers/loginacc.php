<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginacc extends CI_Controller {
	function __construct()
	{
		 parent::__construct();
		$this->load->model("frontend/mmenu");
		$this->load->model("frontend/mpost");
		$this->data['menu'] = $this->mmenu->menu_by(1,0);
		$this->data['pages'] = 'dangnhap';
		$this->load->library("session");
		$this->load->library("facebook",array(
			"appId"  => "1567383593519565",
			"secret" => "8e12a6ee40251675e9e965448edf76f1"
		));
		$this->uid = $this->facebook->getUser();
    	$this->access_token = $this->facebook->getAccessToken();
		$this->facebook->setAccessToken($this->access_token);
		$this->load->model('frontend/user','',TRUE);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
	}
	function index()
	{
		$this->load->helper(array('form'));
		$this->data['cat'] = 'login_view';
		$this->load->view('frontend/home',$this->data);
	}
	
}
/* End of file */
/* Location: ./application/controllers/Loginacc.php */
?>