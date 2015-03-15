<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {
 
 function __construct()
 {
	parent::__construct();
	$this->load->model("frontend/mmenu");
	$this->data['menu']=$this->mmenu->menu_by(1,0);
	$this->load->model("frontend/mpost");
	$this->data['post']=$this->mpost->post_by();
}
 
 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
     $this->load->view('frontend/home',$this->data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }
 
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect("");
 }
 
}
 
?>