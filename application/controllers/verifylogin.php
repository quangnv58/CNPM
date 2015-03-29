<?php class VerifyLogin extends CI_Controller {
	function __construct()
	{
		//hàm khởi tạo load model và các thư viện
		parent::__construct();
		$this->load->model('frontend/user','',TRUE);
		$this->load->model("frontend/mmenu");
		$this->load->model("frontend/mpost");
		$this->data['menu']=$this->mmenu->menu_by(1,0);
		$this->data['pages']='dangnhap';
		$this->load->library("session");
		$this->load->library("facebook",array(
			"appId"=>"1567383593519565",
			"secret"=>"8e12a6ee40251675e9e965448edf76f1"
		));
		$this->uid= $this->facebook->getUser();
		$this->access_token=$this->facebook->getAccessToken();
		$this->facebook->setAccessToken($this->access_token);
		$this->load->model('frontend/user','',TRUE);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
	}
	
	function index()
	{
		//hàm điều hướng 
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		if($this->form_validation->run() == FALSE)
		{
			
			$this->data['cat']='login_view';
			$this->load->view('frontend/home',$this->data);
		}
		else
			{
				//đến trang chủ
				redirect('trangchu');
			}
	}
 
	function check_database($password)
	{
		//hàm kiểm tra
		$user = $this->input->post('user');
		$result = $this->user->login($user, $password);
 
		if($result)
		{
		//trường hợp đúng tài khoản và mật khẩu.
			$sess_array = array();
			foreach($result as $row){
				$sess_array = array(
					'opentid' => $row->opentid,
					'user' => $row->user
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
		return TRUE;
		}
		else
		{
			//đưa ra thông báo khi nhập sai
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}
}
?>
