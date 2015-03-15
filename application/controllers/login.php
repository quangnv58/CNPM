<?php

class login extends CI_Controller{
		function index(){
			echo "Dang ky thanh cong";
		}
	
		
		function themtaikhoan(){
			$this->load->view('themtaikhoan');
		} 
		
		function xulythem(){
			$tk = array (
				'name' => $this->input->post('name'),
				'user' => $this->input->post('user'),
				'password' => $this->input->post('password'),
				'email' => $this->input->post('email'),
				'birthday' => $this->input->post('birthday'),
				'gender' => $this->input->post('gender')
				);	
				$this->mlogin->insert($tk);
			redirect("login/index");
		}
}
