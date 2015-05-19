<?php
class Test_dangtin extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
		$this->load->model("frontend/mpost");
	}
	public function index()
	{
		$user = "admin";
		$name = "quang";
		$data = array(
			'recruitment' => $name, 
			'title'		  => "Tuyển nhân viên", 
			'number'	  => "10", 
			'position'	  => "Lập trình viên C", 
			'postdate'	  => "2014-02-03", 
			'outdate'	  => "2015-02-03",
			'describer'	  => "Làm việc part-time",
			'status'      => '1',
			'belong'	  => $user 
		);
		$this->mpost->insert($data);
		$query = $this->db->get_where('post', array('recruitment' => $name,'title' => "Tuyển nhân viên"));
        $row = $query->row();
		$data_result=array(
			'recruitment' => $row->recruitment, 
			'title'		  => $row->title,  
			'number'	  => $row->number,
			'position'	  => $row->position, 
			'postdate' 	  => $row->postdate, 
			'outdate'	  => $row->outdate,
			'describer'	  => $row->describer,
			'status'	  => $row->status,
			'belong'	  => $row->belong
		);
		$test_name = 'test add data to database';
		$this->unit->run($data_result, $data, $test_name);	
		$this->load->view("test");
	}
}
/* End of file test_post.php */
/* Location: ./application/controllers/testingunit/test_post.php */