<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Login form</h1>
		<?php if($this->session->flashdata('message') != ""){?>
		<div class="alert alert-danger">
		  <?php echo $this->session->flashdata('message'); ?>
		</div>
		<?php } ?>
		<form method="post" action="<?php echo base_url('UserController/checkLogin'); ?>">
			<div class="row">
				<div class="col-sm-4">
				    <label>Email:</label>
				    <div class="form-group"> 
		                <input type="email" name="email" value="" class="form-control" placeholder="Email" required> 
		            </div> 
				       <label>Password:</label>
		            <div class="form-group"> 
		                <input type="password" value="" name="password" class="form-control" placeholder=" Password"> 
		            </div> 
				       <label></label>
		            <div class="form-group"> 
		                <input type="submit" value="Login" class="btn btn-success"> 
		                <a href="<?php echo base_url('UserController/register'); ?>" class="btn btn-success">Register</a>
		            </div> 
		            
				</div>  
			</div>
		</form>	
	</div>
</body>
</html>