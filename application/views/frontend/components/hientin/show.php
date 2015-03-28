<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href=" <?php echo base_url();?> "></base>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link href=" <?php echo base_url();?> public/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="style.css">
<div id="hienthi"> 
<form action="" method="post" method="post">
<div class="container" >
    <div class="jumbotron">
        <div class="right" style="float:right">
        	<img src="public/frontend/img_tin/random.php"  width="400px">
        </div>
        <div class="left" style="float:left" style="text-align:left">
            <p class="text">
            <?php echo isset($post['title'])?$post['title']:'';?>
            </p>
            <img src=" <?php echo isset($post['img'])?$post['img']:'';?>"/>
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
           </br>
        </div>
        <div class="xoa" style="clear:both"></div>
            <p class="text">Mô tả công việc: </p>
            <p>
            <?php echo isset($post['describer'])?$post['describer']:'';?>
            </p>
            <p class="text">Hạn nộp hồ sơ</p>
            <p>
            <?php echo isset($post['outdate'])?$post['outdate']:'';?>
            </p>
            <a href="<?php echo 'http://localhost/CNPM/nophoso/confirm/'.$id?>">
            <p> <img src="images/nopdon.png" /> Nộp hồ sơ</p>
            </a>
		</div>
	</div>
</form>
	<div class="old_comment">
		<div class="container">
		<?php
            $conn = new mysqli("localhost", "root","","svcan");
            if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
            }
            $sql = " SELECT belongUser,content,belongPost FROM svc_comment";
            $result = $conn->query($sql);
            if($result->num_rows>0)
			{
                while($row=$result->fetch_assoc())
				{
                    if($row["belongPost"]==$post['idpost'])
					{ 
                        echo '<div class="jumbotron"><span class="glyphicon glyphicon-user"></span>'.$row["belongUser"]." : ".$row["content"]."<br></div>";
                    }
                }
            }
		?>
		</div>
	</div>
	<?php 
    $this->session->userdata('logged_in');
    $session_data = $this->session->userdata('logged_in');
    $user= $session_data['user'];
    if($user!=NULL)
	{
        $_SESSION['id']=$post['idpost'];
        include("comment.php");
    }
?>
</div>