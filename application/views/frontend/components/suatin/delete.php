<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href=" <?php echo base_url();?> "></base>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link href=" <?php echo base_url();?> public/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<div class="container">
<div class="jumbotron">
<form action="" method="post" method="post">
<div >
	<table width="758" border="0">
    	<tr>
        	<td height="102" colspan="4"><div align="center"><strong>Xác nhận xóa tin</strong></div></td>
		</tr>
  		<tr>
			<td width="123" height="74">Tiêu đề</td>
			<td colspan="3"><?php echo isset($post['title'])?$post['title']:'';?></td>
		</tr>
		<tr>
			<td height="63">Vị trí</td>
			<td colspan="3"><?php echo isset($post['position'])?$post['position']:'';?></td>
		</tr>
		<tr>
			<td height="56">Ảnh minh họa</td>
			<td colspan="3"><img src ="#"width="100"/>
			</td>
		</tr>
		<tr>
			<td height="56">Ngày đăng</td>
			<td width="167"><?php echo isset($post['postdate'])?$post['postdate']:'';?></td>
			<td width="157">Ngày hết hạn</td>
			<td width="293"><?php echo isset($post['outdate'])?$post['outdate']:'';?> </td>
		</tr>
		<tr>
			<td><p> Mô tả </p>
			<p>công việc</p></td>
			<td colspan="3"><?php echo isset($post['describer'])?$post['describer']:'';?> </textarea></td>
		</tr>
		<tr>
			<td height="40">Số lượng</td>
			<td colspan="3"><?php echo isset($post['number'])?$post['number']:'';?> </td>
		</tr>
		<tr>
			<td height="66">&nbsp;</td>
			<td colspan="2">
            	<p>
            		<input type="submit" name="delete" value="Xác nhận" id="delete">
				</p>
			</td>
    		<td>
            	<a href="http://localhost/studentneed/tinmoi"> 

					<p>&nbsp;</p>        
				</a>
			</td>
		</tr>
	</table>
</div>
</form>
</div>
</div>
</div>