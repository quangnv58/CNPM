<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nophoso extends CI_Controller 
{
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->model("frontend/mmenu");
		$this->load->model("frontend/mpost");
		$this->load->model("frontend/memail");
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
		//set up cấu hình email
		$config = array(
			'protocol'=>'smtp',
			'smtp_host'=>'ssl://smtp.googlemail.com',
			'smtp_port'=>'465',
			'smtp_user'=>'svc.111bit@gmail.com', // email cua m
			'smtp_pass'=>'Sinhviencan'//Nhớ đánh đúng user và pass nhé
        );
        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
 
    }
	public function confirm($id)
	{
		$this->session->userdata('logged_in');
		$session_data = $this->session->userdata('logged_in');
		$user= $session_data['user'];
		$this->data['cat']='xacnhan';
		$this->load->database();
		$query = $this->db->get_where('post', array('idpost' => $id));
		foreach ($query->result() as $row)
		{
			$user_recruitment=$row->belong;
		}
		
		$query=$this->db->get_where('user', array('user' => $user_recruitment));
		foreach ($query->result() as $row)
		{
			$email=$row->email;
		}
		$this->data['email']=$email;
		if(isset($_POST['confirm']))
		{
			//luu thong tin sinh vien de gui mail
			$data = array(
				'name'=>$_POST['name'], 
				'numberphone'=>$_POST['numberphone'], 
				'email'=>$_POST['email'], 
				'university'=>$_POST['university'], 
				'birthday'=>$_POST['birthday'],
				'gender'=>$_POST['gender']
			);
			$this->memail->sent($data,$email);
		}
		$this->load->view('frontend/home',$this->data);
	}
}
