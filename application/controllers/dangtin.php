<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dangtin extends CI_Controller {
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->model("frontend/mmenu");
		$this->load->model("frontend/mpost");
		$this->data['menu'] = $this->mmenu->menu_by(1,0);
		$this->data['pages'] = 'dangtin';
		$this->load->library("session");
		$this->load->library("facebook",array(
			"appId"  => "1567383593519565",
			"secret" => "8e12a6ee40251675e9e965448edf76f1"
		));
		$this->uid = $this->facebook->getUser();
    	$this->access_token=$this->facebook->getAccessToken();
		$this->facebook->setAccessToken($this->access_token);
 		$this->load->helper('date');
    }
	public function index()
	{
		$this->data['cat'] = 'them';
		$this->load->database();
		$this->load->view('frontend/home',$this->data);
	}
	function save()
	{ 
		$this->session->userdata('logged_in');
		$session_data = $this->session->userdata('logged_in');
		$user=$session_data['user'];
		$query=$this->db->get_where('user', array('user'=>$user));
		foreach($query->result() as $row)
		{
			$name = $row->name;
		}
		$datestring = "%Y-%m-%d";
		$time = time();                         
		$data = array( 
			'recruitment' => $name, 
			'title' 	  => $_POST['title'], 
			'number' 	  => $_POST['number'], 
			'position'	  => $_POST['position'], 
			'postdate'    => mdate($datestring, $time), 
			'outdate'     => $_POST['outdate'],
			'describer'   => $_POST['describer'],
			'status' 	  => '1',
			'belong' 	  => $user
		); 
		$this->mpost->insert($data); 
		redirect(""); 
	}
	public function them()
    {
        //call helper form
        $this->load->helper('form');
        //call view
        $this->load->view('frontend/components/dangtin/them',$data);
    }
}
/* End of file dangtin.php */
/* Location: ./application/controllers/dangtin.php */