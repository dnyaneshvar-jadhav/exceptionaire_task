<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Login user is...... <?php $loginUser = $this->session->userdata('loginUser'); echo $loginUser['first_name']." ".$loginUser['last_name'];  ?></h1> 
	<a href="<?php echo base_url('UserController/') ?>" class="btn btn-primary">Logout</a>
</body>
</html>