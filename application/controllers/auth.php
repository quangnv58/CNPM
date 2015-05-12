<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
	private $uid;
	private $access_token;
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->library("session");
		$this->load->library("facebook",array(
			"appId"  => "1567383593519565",
			"secret" => "8e12a6ee40251675e9e965448edf76f1"
		));
		$this->uid = $this->facebook->getUser();
    	$this->access_token=$this->facebook->getAccessToken();
		$this->facebook->setAccessToken($this->access_token);
	}
	public function index()
	{
		$this->load->view("auth",$this);
	}
	public function login()
	{
		if($this->uid)
		{
			try{
				$me = $this->facebook->api("/me");
				$this->session->set_userdata("facebook",$me['id']);
				$this->load->view("auth");
			}
			catch(FacebookApiException $e){
				$this->uid=NULL;
			}
		}
		else
		{
			die("<script>top.location='".$this->facebook->getLoginUrl(array(
				"scope" => "email",
				"redirect_url" => site_url("auth")
			))."'</script>");	
		}
		redirect("");	
	}
	public function logout()
	{
		//session_destroy();
		$this->session->sess_destroy();
		redirect("");
	}
}
/* End of file */
/* Location: ./application/controllers/auth.php */