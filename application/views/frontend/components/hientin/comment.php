<!Doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="bl">
	<form role="form" method="POST">
		<div>
			<label for="comment">Comment:</label>
			<input type="text" class="form-control" id="comment" name="cm"/>
		</div>
		
			<button type="submit" class="btn btn-default">Bình luận</button>
		
	</form>
	<?php
		if($_SERVER["REQUEST_METHOD"] =="POST"){
				$conn = new mysqli("localhost", "root","","svcan");
					if ($conn->connect_error) {
			   			 die("Connection failed: " . $conn->connect_error);
			   		}
			   		$content=$_POST['cm'];
			   		$post=$_SESSION['id'];
			   		$user=$session_data['user'];
					$sql="INSERT INTO svc_comment(content,belongPost,belongUser)
					VALUES ( '{$content}','{$post}','{$user}')";
					$conn->query($sql);
		}
	?>
</div>
	
</body>
</html>