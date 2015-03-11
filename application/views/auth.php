
<?php
	if($this->session->userdata("facebook")!=NULL):?>
    <?php
	$user_profile= $this->facebook->api("/me");
	echo '<img src="https://graph.facebook.com/'. $user_profile['id'] .'/picture" width="30" height="30"/><div>'.$user_profile['name'].'</div>';
	?>
    <a href="<?php echo site_url("auth/logout");?>">Logout</a>
<?php else:?>
	<a href="<?php echo site_url("auth/login");?>">Login</a>
   	<?php endif;?>
