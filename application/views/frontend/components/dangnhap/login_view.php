<!DOCTYPE >
<html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
   <title>Login</title>
 </head>
 <body>
   
     <div class="container">
     <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
            <h1>Login</h1>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="user">Username:</label>
                    <div class="col-sm-10">
                          <input type="text" class="form-control" id="user" name="user" placeholder="Enter username">
                    </div>
                </div>
                </br></br>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">          
                          <input type="password" class="form-control" id="passowrd" name="password" placeholder="Enter password">
                    </div>
                </div>
                <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-default">Login</button>
                    </div>
                </div>
            </form>
</div>
</br></br>
 </body>
</html>
