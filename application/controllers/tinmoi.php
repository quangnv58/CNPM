<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tinmoi extends CI_Controller {
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->model("frontend/mmenu");
		$this->data['menu'] = $this->mmenu->menu_by(1,0);
		$this->load->model("frontend/mpost");
		$this->data['post'] = $this->mpost->post_by();
		$this->data['pages'] = 'tinmoi';
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
		$this->data['cat'] = 'tin';
		$this->load->view('frontend/home',$this->data);
	}
}
/* End of file Tinmoi.php */
/* Location: ./application/controllers/Tinmoi.php */
