<?php echo form_open(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Xác nhận thông tin hồ sơ đăng kí</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<form action="" method="post" method="post">
<body>
<div class="container">
	<?php if($this->session->userdata("facebook")!=NULL):?>
    <h2>Hãy điền thông tin của bạn</h2>
    <?php	$user= $this->facebook->api("/me");?>
    <form role="form" method="POST">
    <div class="form-group">
    <label for="ten">Họ tên:</label>
    <input type="text" class="form-control" id="ten" name="name" value=<?php echo $user['name']?> required/>
    </div>
    <div class="form-group">
    <label for="tentk">Số điện thoại:</label>
    <input type="number" class="form-control" id="sodienthoai" name="numberphone"  required/>
    </div>
    <div class="form-group">
    <label for="pwd">Email:</label>
    <input type="text" class="form-control" id="email" name="email" value=<?php echo $user['email']?> placeholder="Enter email" required/>
    </div>
    <div class="form-group">
    <label for="truong">Trường:</label>
    <input type="text" class="form-control" id="university" name="university" required/>
    </div>
    <div class="form-group">
    <label for="ns">Birthday:</label>
    <input type="date" class="form-control" id="ns" name="birthday" />
    </div>
    <div class="form-group">
    <label for="gt">Gender:</label>
    <input type="text" class="form-control" id="gt" name="gender" value=<?php echo $user['gender']?>>
    </div>
    <button type="submit" name="confirm" class="btn btn-default">Confirm</button>
    </form>
    <?php else:?>
    <a href="auth/login">
    <img src="images/facebook.png"> 
    </a>
    <p>Đăng nhập facebook trước khi nộp hồ sơ</p>
    <?php endif;?>
</div>

</body>
</html>
<?php echo form_close(); ?>