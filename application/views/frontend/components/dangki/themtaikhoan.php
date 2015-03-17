<?php echo form_open(); ?>
 	<!DOCTYPE html>
<html lang="en">
<head>
  <title>Đăng kí tài khoản</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
  <h2>Hãy điền thông tin của bạn</h2>
  <form role="form" method="POST">
    <div class="form-group">
      <label for="ten">Tên doanh nghiệp</label>
      <input type="text" class="form-control" id="ten" name="name" required/>
    </div>
    <div class="form-group">
      <label for="tentk">Tên tài khoản:</label>
      <input type="text" class="form-control" id="tentk" name="user" required/>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" required/>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required/>
    </div>
    <div class="form-group">
      <label for="gt">Lĩnh vực</label>
      <input type="text" class="form-control" id="gt" name="field" />
    </div>
    <button type="submit" class="btn btn-default">Save</button>
  </form>
  <?php
	$test = false;
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$user  = $_POST['user'];
		$email = $_POST['email'];
		$conn=new mysqli("localhost","root","","svcan");
		  if($conn->connect_error){
			die("Connection failed: ". $conn->connect_error);
		  }
		$sql="SELECT user, email FROM svc_user";
		$result=$conn->query($sql);//?
		if($result->num_rows> 0){
			while($row=$result->fetch_assoc()){
				if( $user==$row["user"]){
				  echo'<script>alert("User Name da co nguoi su dung");</script>';
				  $test=false;
				  break;		  
				}
				else if( $email == $row["email"] ){
				  echo'<script>alert("Email da co nguoi su dung");</script>';
				  $test=false;
				  break;
				}
				else
					$test=true;
			}
		}
	}
	if($test) {
		$tk = array (
				'name' => $this->input->post('name'),
				'user' => $this->input->post('user'),
				'password' => $this->input->post('password'),
				'email' => $this->input->post('email'),
				'field' => $this->input->post('field')
		);		
		$this->mlogin->insert($tk);
		echo'<script>alert("Đăng kí thành công");</script>';
		redirect('');			
	}
  ?>
</div>

</body>
</html>
<?php echo form_close(); ?>