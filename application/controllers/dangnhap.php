<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dangnhap extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("frontend/mmenu");
		$this->data['menu']=$this->mmenu->menu_by(1,0);
		$this->load->model("frontend/mpost");
		$this->data['post']=$this->mpost->post_by();
	}

	function index(){
		this->
		$this->load->helper(array('form'));
		$this->load->view('frontend/login_view',$this->data);
	}
}

?>