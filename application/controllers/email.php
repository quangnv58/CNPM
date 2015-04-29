
<?php
class Email extends CI_Controller
{  
    function index()
	{
         $config = array(
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => '465',
			'smtp_user' => 'manhtien12121995@gmail.com', // email cua m
			'smtp_pass' => ''//Nhớ đánh đúng user và pass nhé
        );
        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        
        $this->email->from('manhtien12121995@gmail.com', 'TMT'); // email ng gui
        $this->email->to('manhtien12121995@gmail.com');    // email ng nhan
        $this->email->subject('Email Test');
        $this->email->message('Chuc nang gui email-');    
        
        //Các dòng được thêm nè
        $path = $this->config->item('server_root');//Test đường dẫn thì echo nó ra,rùi   dùng die(); nếu hiện ra đường dẫn thì ok xóa bỏ nó
        $file = $path . '/ciexam/attachments/yourinfo.txt';
        $this->email->attach($file);
        
        if($this->email->send()){
        	echo "Mail đã được gửi cho bạn";
        }
        else
        {
            show_error($this->email->print_debugger());
        }
    }
}
/* End of file */
/* Location: ./application/controllers/Email.php */
?>
