<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Control extends CI_Controller {
	public function index()
	{
		$this->load->view('frontend/home');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */