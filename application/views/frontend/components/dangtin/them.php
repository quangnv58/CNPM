<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href=" <?php echo base_url();?> "></base>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link href=" <?php echo base_url();?> public/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<div id="suatin"> 
<div class="container">
<div class="jumbotron">
<?php
	if($this->session->userdata('logged_in')!=NULL):?>
<form action="<?php echo base_url(); ?>dangtin/save" method="post" enctype="multipart/form-data">
<div >
	<table width="758" border="0">
		<tr>
			<td height="102" colspan="4"><div align="center"><strong> CHỨC NĂNG ĐĂNG TIN</strong></div></td>
		</tr>
		<tr>
			<td width="138" height="40">Tên công ty</td>
			<td colspan="3"><input type="text" name="recruitment" id="recruitment" size="60"></td>
		</tr>
		<tr>
			<td height="74">Tiêu đề</td>
			<td colspan="3"><input name="title" type="text" id="title" value="" size="70" /></td>
		</tr>
		<tr>
			<td height="63">Vị trí</td>
			<td colspan="3"><input type="text" name="position" id="position" size="40" /></td>
		</tr>
		<tr>
			<td height="56">Ảnh minh họa</td>
			<td colspan="3"><input type="file" name="img"></td>
		</tr>
		<tr>
			<td height="56">Ngày đăng</td>
			<td width="184"><input type="text" name="postdate" id="postdate" /></td>
			<td width="82">Ngày hết hạn</td>
			<td width="336"><input type="text" name="outdate" id="outdate" /></td>
		</tr>
		<tr>
			<td><p> Mô tả </p>
      			<p>công việc</p></td>
                
			<td colspan="3">
            <textarea name="describer" cols="70" rows="20" id="describer"></textarea></td>
		</tr>
		<tr>
		  <td height="61"><p>Trạng thái </p>
	      <p>(1-Hiển thị. 0-Ẩn)</p></td>
		  <td colspan="3"><input type="number" name="status" /></td>
	    </tr>
		<tr>
			<td height="40">Số lượng</td>
			<td colspan="3"><input type="text" name="number" id="number" /></td>
		</tr>
		<tr>
			<td height="66">&nbsp;</td>
			<td colspan="2">
            	<p>
					<input class="btn btn-primary" type="submit" name="them" id="them" value="      Đăng Tin       ">
				</p>
			</td>
			
		</tr>
	</table>
</div>
</form>
<?php else:?>
<h1> Vui lòng đang nhập trước khi đăng bài</h1>
<?php $this->load->view("frontend/components/dangnhap/login_view");?>
<?php endif;?>
</div>
</div>