<?php
	//include config
	require_once('../includes/config.php');
	
	//if not logged in rdirect to login page
	if(!$user->is_logged_in())
	{
		header('Location: login.php');
	}
?>	
	<form action="" method="post">
		<p><label>Username</label><input type="text" name ="username" value=""/></p>
		<p><label>Password</label>
