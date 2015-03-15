<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trangchu extends CI_Controller {
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
 
 }
	public function index()
	{
		$this->load->view('frontend/home',$this->data);	
	}
	public function login(){
		if($this->uid){
			try{
				$me=$this->facebook->api("/me");
				$this->session->set_userdata("facebook",$me['id']);
				$this->load->view("frontend/home");
			}
			catch(FacebookApiException $e){
				$this->uid=NULL;
			}
		}
		else{
			die("<script>top.location='".$this->facebook->getLoginUrl(array(
				"scope"=>"email",
				"redirect_url"=>site_url("")
			))."'</script>");	
		}
		redirect("");	
	}
	public function logout(){
		//session_destroy();
		$this->session->sess_destroy();
		redirect("");
	}
	
}
