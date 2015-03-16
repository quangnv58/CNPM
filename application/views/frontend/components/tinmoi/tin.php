<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href=" <?php echo base_url();?> "></base>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link href=" <?php echo base_url();?> public/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<div >
<div class="jumbotron">
	<table class="table" id="customers">
		<caption><h1>Các tin đã đăng</h1></caption>
		<tr>
    		<th>Tiêu đề</th>
    		<th>Ngày đăng</th>
    		<?php
			if($this->session->userdata('logged_in')!=NULL){
    			echo'
    			<th colspan="2">Quản lý</th>
    			';
    		}
    		?>
    		
		</tr>
<?php

	foreach($post as $val){
		
?>
	<tr>
		<td><a href="<?php echo "http://localhost/CNPM/hientin/show/".$val['idpost'] ?>">
				<h1><?php echo $val["title"]?></h1>
			</a></td>
		<td><?php echo $val['postdate']?></td>
		<?php
		$this->session->userdata('logged_in');
		$session_data = $this->session->userdata('logged_in');
		$user= $session_data['user'];
		if($this->session->userdata('logged_in')!=NULL && $user==$val['belong']):?>
					<td width="44">
						<div align="center">
						  <a href="<?php echo "http://localhost/CNPM/suatin/edit/".$val["idpost"] ?>">						  
						  	<img src="public/frontend/images/b_edit.png" data-toggle="tooltip" data-placement="left" title="edit"/> 			  
	       				  </a> 
	        			</div>
					</td>	
       				<td width="41">
	       				<a href="<?php echo "http://localhost/CNPM/suatin/delete/".$val["idpost"] ?>">
	       					<img src="public/frontend/images/b_drop.png" data-toggle="tooltip" data-placement="left" title="delete" />
	       				</a>
       				</td>
		<?php endif; ?>
			  
		
	</tr>
<?php
	}
?>
</table>
</div>
</div>     