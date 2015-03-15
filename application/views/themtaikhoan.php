<?php echo form_open("login/xulythem"); ?>
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
  <form role="form">
    <div class="form-group">
      <label for="ten">Tên người dùng:</label>
      <input type="text" class="form-control" id="ten" name="name" />
    </div>
    <div class="form-group">
      <label for="tentk">Tên tài khoản:</label>
      <input type="text" class="form-control" id="tentk" name="user" />
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="ns">Birthday:</label>
      <input type="date" class="form-control" id="ns" name="birthday" />
    </div>
    <div class="form-group">
      <label for="gt">Gender:</label>
      <input type="text" class="form-control" id="gt" name="gender" />
    </div>
    <button type="submit" class="btn btn-default">Save</button>
  </form>
</div>

</body>
</html>


<?php echo form_close(); ?>