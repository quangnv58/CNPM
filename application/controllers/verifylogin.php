<?php class VerifyLogin extends CI_Controller {
 
 function __construct()
 {
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
   //This method will have the credentials validation
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('user', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     	$this->data['cat']='login_view';
		$this->load->view('frontend/home',$this->data);
   }
   else
   {
     //Go to private area
     redirect('trangchu');
   }
 
 }
 
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $user = $this->input->post('user');
 
   //query the database
   $result = $this->user->login($user, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
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
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>
