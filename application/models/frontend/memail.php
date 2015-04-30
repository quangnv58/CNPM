<?php
class Memail extends CI_Model{
	public function sent($data,$email)
	{
		$this->email->from('svc.111bit@gmail.com', 'SVC'); // email ng gui
        $this->email->to($email);    // email ng nhan
        $this->email->subject('Thông tin sinh viên đăng ký ứng tuyển');
        $this->email->message(' Name: '.$data['name'].' numberphone: '.$data['numberphone'].' email: '.$data['email'].' university: '.$data['university'].' birthday: '.$data['birthday'].' gender: '.$data['gender']);    
        
        //Các dòng được thêm nè
        $path = $this->config->item('server_root');//Test đường dẫn thì echo nó ra,rùi   dùng die(); nếu hiện ra đường dẫn thì ok xóa bỏ nó
        // $file = $path . '/ciexam/attachments/yourinfo.txt';
        //$this->email->attach($file);
        
        if($this->email->send())
		{
        	echo'<script>alert("Đã gửi mail đến nhà tuyển dụng");</script>';
        	redirect("");
		}
        else
        {
            show_error($this->email->print_debugger());
        }
	}
}
/* End of file */
/* Location: ./application/models/Memail.php */
	