<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href=" <?php echo base_url();?> "></base>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link href=" <?php echo base_url();?> public/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<div id="hienthi"> 
<form action="" method="post" method="post">
<div class="container" >
<div class="jumbotron">
	<div class="right" style="float:right">
		<img src="public/frontend/img_tin/random.php"  width="500px">
	</div>
    <div class="left" style="float:left" style="text-align:left">
        <p class="text">
        <?php echo isset($post['title'])?$post['title']:'';?>
        </p>
        <img src=" <?php echo isset($post['img'])?$post['img']:'';?>"/>
		</p>
        <p class="text">Công ty: </p>
        <p>        	
        <?php echo isset($post['recruitment'])?$post['recruitment']:'';?>
        </p>
        <p class="text">Vị trí tuyển dụng: </p>
        <p>
        <?php echo isset($post['position'])?$post['position']:'';?>
        </p>
        <p class="text">Số lượng tuyển: </p>
        <p>
        <?php echo isset($post['number'])?$post['number']:'';?>
        </p>
        <p class="text">Mô tả công việc: </p>
        <p>
        <?php echo isset($post['describer'])?$post['describer']:'';?>
        </p>
        <p class="text">Hạn nộp hồ sơ</p>
        <p>
        <?php echo isset($post['outdate'])?$post['outdate']:'';?>
        </p>
	</div>
    <div class="xoa" style="clear:both"></div>
</div>
</div>
</form>
</div>