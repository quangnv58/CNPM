<?php 
	$this->session->userdata('logged_in');
	$session_data = $this->session->userdata('logged_in');
	$user= $session_data['user'];
?>
<script src="<?php echo $base_url;?>js/jquery.min.js" type="text/javascript"></script>
<h1 class="banner">Studentneed</h1>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
    	<div class="navbar-header">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>                        
      		</button>
        	<a class="navbar-brand" href="#">Sinh viên cần</a>
        </div>
         <div>
         	<div class="collapse navbar-collapse" id="myNavbar">
         	<ul class="nav navbar-nav">
            	<li><a href="">Home</a></li>
          		 <?php
				
          				foreach($menu as $m){
          					$html="<li><a href='".$m['link']."'>".$m['name']."</a></li>";
                    echo $html;
          				}
			
				
				?>	
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Help<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Mr.Trọng</a></li>
                        <li><a href="#">Mr.Tiến</a></li>
                        <li><a href="#">Mr.Quang</a></li>
                      </ul>
        		    </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            	
				        <?php if($this->session->userdata("facebook")==NULL && $user==NULL ):?>
            			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"> Login<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="loginacc"> Login for recruitment</a></li>
                        <li><a href="auth/login"><img src="images/facebook.png" /></a></li>
                      </ul>
        		      </li>
    				      <li>
    					       <a href="login"><span class="glyphicon glyphicon-user"></span>  SignUp</a>
                  </li>
                <?php else:?>
              			 <?php if($this->session->userdata("facebook")!=NULL):?>
          				        <?php $this->load->view("auth");?>
                          <?php else:?>
                              <li><a><span class="glyphicon glyphicon-user"></span>  Welcome <?php echo $user; ?>!</a></li>
   				                    <li><a href="http://localhost/CNPM/trangchu/logout"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
			                    <?php endif;?>
                      <?php endif;?>
            </ul>
            </div>
          </div>
     </div>
</nav>