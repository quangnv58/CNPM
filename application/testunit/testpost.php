<?php
class Testpost extends PHPUnit_Framework_TestCase
{
	public function setup()
	{
		$user="admin";
		$query=$this->db->get_where('user', array('user'=>$user));
		foreach($query->result() as $row)
		{
			$name=$row->name;
		}
		$data1 = array(
			'recruitment'=>$name, 
			'title'=>"Tuyển nhân viên", 
			'number'=>"10", 
			'position'=>"Lập trình viên C", 
			'postdate'=>"1/10/2013", 
			'outdate'=>"10/10/2014",
			'describer'=>"Làm việc part-time",
			'status'=>'1',
			'belong'=>$user 
		);
		$data1 = array(
			'recruitment'=>$name, 
			'title'=>"Tuyển nhân viên",  
			'position'=>"Lập trình viên C", 
			'postdate'=>"1/10/2013", 
			'outdate'=>"10/10/2014",
			'describer'=>"Làm việc part-time",
			'status'=>'1',
			'belong'=>$user 
		);
	}
    public function testPost()
    {
		$this->mpost->insert($data);
		$query=$this->db->get_where('post', array('user'=>$user,'title'=>"Tuyển nhân viên"));
        $this->assertEquals($data, $query->result_array());
		$this->mpost->insert($data1);
		$this->assertEquals(NULL, $query->result_array());
    }
}