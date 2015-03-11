<?php
class Login extends CI_Controller{
	public $user;
	private $access_token;
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->library("session");
		$this->load->library("facebook",array(
			"appId"=>"1567383593519565",
			"secret"=>"8e12a6ee40251675e9e965448edf76f1"
		));
		$this->user= $this->facebook->getUser();
    }
	public function index()
	{
		if($this->user)
		{
			try{
				$user_profile=	$this->facebook->api("/me");
				$this->load->view('view_login',$this);
				
			}
			catch(FacebookApiException $e)
			{
				$user=null;
			}
		}else{
			$login=$this->facebook->getLoginUrl();
			echo "<a href='$login'>Login</a>";
		}
	}
	public function logout(){
		session_destroy();
		redirect(base_url().'login');
	}
	

}