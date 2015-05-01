
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Suatin extends CI_Controller {
	public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->model("frontend/mmenu");
		$this->data['menu'] = $this->mmenu->menu_by(1,0);
		$this->data['pages'] = 'suatin';
		
    }
	public function index()
	{
		$this->data['cat'] = 'edit';
		$this->load->database();
		$this->load->view('frontend/home',$this->data);
	}
	public function edit($id)
	{
		$id = (int)$id;
		$data['post'] = $this->db->select('*')->from('post')->where(array('idpost' => $id))->get()->row_array();
		if(!isset($data['post']) || count($data['post']) == 0)
		{
			header('Location: http://localhost/CNPM/tinmoi');
			die;
		}
		if($this->input->post('edit'))
		{
			$title = $this->input->post('title');
			$recruitment = $this->input->post('recruitment');
			$number = $this->input->post('number');
			$position = $this->input->post('position');
			$postdate = $this->input->post('postdate');
			$outdate = $this->input->post('outdate');
			$describer = $this->input->post('describer');                          
			$data = array( 
				'recruitment' => $recruitment, 
				'title'		  => $title, 
				'number'	  => $number, 
				'position'    => $position, 
				'postdate'	  => $postdate, 
				'outdate'	  => $outdate,
				'describer'	  => $describer
			); 
			$this->db->where('idpost',$id)->update('post',$data);
			header('Location: http://localhost/CNPM/tinmoi');
		}	
		$this->data['post'] = $data['post'];
		$this->data['cat'] = 'edit';
		$this->load->view('frontend/home',$this->data);	
	}
	public function delete($id)
	{
		$id = (int)$id;
		$data['post']=$this->db->select('*')->from('post')->where(array('idpost'=>$id))->get()->row_array();
		if(!isset($data['post']) || count($data['post']) == 0)
		{
			header('Location: http://localhost/CNPM/tinmoi');
			die;
		}
		if($this->input->post('delete'))
		{ 
			$this->db->delete('post',array('idpost'=>$id));
			header('Location: http://localhost/CNPM/tinmoi');
			die;
		}
		$this->data['post'] = $data['post'];
		$this->data['cat'] = 'delete';
		$this->load->view('frontend/home',$this->data);	
	}
}
/* End of file Suatin.php */
/* Location: ./application/controllers/Suatin.php */