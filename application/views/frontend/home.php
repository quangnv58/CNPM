<!DOCTYPE html >
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href=" <?php echo base_url();?> "></base>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link href=" <?php echo base_url();?> public/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="public/frontend/css/css/style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="public/frontend/css/styleq.css">
  <title>Sinh viên cần</title>
</head>

<body>
<div class="container-fluid">
  <div class="mainmenu">
    <?php $this->load->view('frontend/modules/menu.php');?>
  </div>
  <div class="container">
    <?php
    if(isset($pages)&&isset($cat)){
      $this->load->view("frontend/components/".$pages."/".$cat);
      $this->load->view('frontend/modules/footer.php');
    }
    else{ 
      $this->load->view('frontend/modules/slide.php');
      $this->load->view('frontend/modules/boxtin.php');
      $this->load->view('frontend/modules/footer.php');
    }
  ?>    
  </div>
</div><!--/*end container*/-->
</body>
</html>
