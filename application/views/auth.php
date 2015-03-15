
<?php
	if($this->session->userdata("facebook")!=NULL):?>
    <?php
	$user_profile= $this->facebook->api("/me");
	echo '<li><img src="https://graph.facebook.com/'. $user_profile['id'] .'/picture" width="30" height="30"/><span>'.$user_profile['name'].'</span></li>';
	?>
    <li><a href="<?php echo site_url("auth/logout");?>">Logout</a></li>
<?php else:?>
	<li><a href="<?php echo site_url("auth/login");?>">Login</a></li>
   	<?php endif;?>