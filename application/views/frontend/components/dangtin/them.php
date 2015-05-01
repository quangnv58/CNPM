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
			
		</tr>
		<tr>
			<td height="74"><label>Tiêu đề</label></td>
			<td colspan="3"><input type="text" class="form-control" id="title" name="title" required/></td>
		</tr>
		<tr>
			<td height="63"><label>Vị trí</label></td>
			<td colspan="3"><input type="text" class="form-control" id="position" name="position" required/></td>

		</tr>
		<tr>
			<td height="56"><label>Ngày đăng</label></td>
			<td width="167"><input type="text" name="postdate" id="postdate"/></td>
			<td width="157"><label> Ngày hết hạn</label></td>
			<td width="293"><input type="text" name="outdate" id="outdate"  /></td>
		</tr>
		<tr>
			<td><label>Mô tả
      			công việc<label></td>
                
			<td colspan="3">
            <textarea name="describer" cols="70" rows="20" id="describer"></textarea></td>
		</tr>
		<tr>
		  
	    </tr>
		<tr>
			<td height="40"><label>Số lượng<l/abel></td>
			<td colspan="3"><input type="text" class="form-control" id="number" name="number" required/></td>
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
<h2> Vui lòng đăng nhập trước khi đăng bài</h2>
<?php $this->load->view("frontend/components/dangnhap/login_view");?>
<?php endif;?>
</div>
</div>
<!--/*end of them.php*/-->
<!--/*application\views\frontend\components\dangtin\them.php*/-->	