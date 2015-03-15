<?php class VerifyLogin extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
		$this->load->model("frontend/mmenu");
		$this->data['menu']=$this->mmenu->menu_by(1,0);
		$this->load->model("frontend/mpost");
		$this->data['post']=$this->mpost->post_by();
   $this->load->model('frontend/user','',TRUE);
 }
 
 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('frontend/login_view');
   }
   else
   {
     //Go to private area
     redirect('home', 'refresh');
   }
 
 }
 
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
 
   //query the database
   $result = $this->user->login($username, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Vui lòng kiểm tra lại tên đăng nhập hoặc mật khẩu.');
     return false;
   }
 }
}
?>