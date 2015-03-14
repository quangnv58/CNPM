<?php

class login extends CI_Controller{
		function index(){
			echo "Dang ky thanh cong";
		}
	
		
		function themtaikhoan(){
			$this->load->view('themtaikhoan');
		} 
}
