<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nophoso extends CI_Controller {
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->model("frontend/mmenu");
		$this->load->model("frontend/mpost");
		$this->data['menu']=$this->mmenu->menu_by(1,0);
		$this->data['pages']='hoso';
		$this->load->library("session");
		$this->load->library("facebook",array(
			"appId"=>"1567383593519565",
			"secret"=>"8e12a6ee40251675e9e965448edf76f1"
		));
		$this->uid= $this->facebook->getUser();
    	$this->access_token=$this->facebook->getAccessToken();
		$this->facebook->setAccessToken($this->access_token);
 
    }
	public function confirm($id){
		$this->session->userdata('logged_in');
		$session_data = $this->session->userdata('logged_in');
		$user= $session_data['user'];
		$this->data['cat']='xacnhan';
		$this->load->database();
		$query = $this->db->get_where('post', array('idpost' => $id));
		foreach ($query->result() as $row)
		{
			$user_recruitment = $row->belong;
		}
		
		$query = $this->db->get_where('user', array('user' => $user_recruitment));
		foreach ($query->result() as $row)
		{
			$email = $row->email;
		}
		$this->data['email']=$email;
		$this->load->view('frontend/home',$this->data);
	}
}
