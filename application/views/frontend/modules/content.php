<div id="content">
	<?
		if(isset($_GET['quanli'])){
			$tam=$_GET['quanli'];
		}else{
			$tam="";
		}
		if($tam=="loaitin"){
			include("modules/loaitin/main.php");
		}
		else	
			if($tam=="tinmoi"){
				include("modules/tinmoi/tinmoi.php");
			}
			else if($tam=="baiviet"){
				include("modules/tinmoi/baidang.php");
					
			}
			else{
				include("modules/body1.php");
				include("modules/body2.php");
			}
	?>	
</div>
<div class="xoa"></div>
