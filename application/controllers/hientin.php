
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hientin extends CI_Controller 
{
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->model("frontend/mmenu");
		$this->data['menu'] = $this->mmenu->menu_by(1,0);
		$this->data['pages'] = 'hientin';
		$this->load->library("session");
		$this->load->library("facebook",array(
			"appId"  => "1567383593519565",
			"secret" => "8e12a6ee40251675e9e965448edf76f1"
		));
		$this->uid = $this->facebook->getUser();
    	$this->access_token = $this->facebook->getAccessToken();
		$this->facebook->setAccessToken($this->access_token);
 
		
    }
	public function index()
	{
		$this->data['cat'] = 'show';
		$this->load->database();
		$this->load->view('frontend/home',$this->data);
	}
	public function show($id)
	{
		$id = int)$id;
		$data['post']=$this->db->select('*')->from('post')->where(array('idpost'=>$id))->get()->row_array();
		if(!isset($data['post']) || count($data['post']) == 0)
		{
			header('Location: http://localhost/CNPM/tinmoi');
			die;
		}
		$this->data['id'] = $id;
		$this->data['post'] = $data['post'];
		$this->data['cat'] = 'show';
		$this->load->view('frontend/home',$this->data);	
	}
}
/* End of file Hientin.php */
/* Location: ./application/controllers/Hientin.php */
