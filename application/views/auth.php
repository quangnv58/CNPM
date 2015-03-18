
<?php
	if($this->session->userdata("facebook")!=NULL):?>
    <?php
	$user_profile= $this->facebook->api("/me");
	echo'<li><a><img src="https://graph.facebook.com/'. $user_profile['id'] .'/picture" class="img-rounded" alt="profile" width="30" height="30"></a></li>';
	echo '<li><a>'.$user_profile["name"].'</a></li>';
	?>
    <li><a href="<?php echo site_url("auth/logout");?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
<?php else:?>
	<li><a href="<?php echo site_url("auth/login");?>">Login</a></li>
   	<?php endif;?>
