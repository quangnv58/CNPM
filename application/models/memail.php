<?php
class Memail extends CI_Model{
	public function sent($data,$email){
		$this->email->from('sinhviencan111@gmail.com', 'SVC'); // email ng gui
        $this->email->to('duytien.uet@gmail.com');    // email ng nhan
        $this->email->subject('Email Test');
        $this->email->message('Chuc nang gui email-'.$data['name']);    
        
        //Các dòng được thêm nè
        $path = $this->config->item('server_root');//Test đường dẫn thì echo nó ra,rùi   dùng die(); nếu hiện ra đường dẫn thì ok xóa bỏ nó
       // $file = $path . '/ciexam/attachments/yourinfo.txt';
        //$this->email->attach($file);
        
        if($this->email->send()){
        echo "Mail đã được gửi cho bạn";
        }
        else
        {
            show_error($this->email->print_debugger());
        }
	}
}
	