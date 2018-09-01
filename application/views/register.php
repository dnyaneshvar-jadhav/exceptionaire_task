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
		<h1>Registration form</h1>
		<?php if($this->session->flashdata('message') != ""){?>
		<div class="alert alert-danger">
		  <?php echo $this->session->flashdata('message'); ?>
		</div>
		<?php } ?>
		<form method="post" action="<?php echo base_url('UserController/addUser'); ?>">
			<div class="row">
				<div class="col-sm-4">
				    <label>First Name:</label>
				    <div class="form-group"> 
		                <input type="text" name="first_name" value="" class="form-control" placeholder="First Name" required> 
		            </div> 
		            <label>Last Name:</label>
				    <div class="form-group"> 
		                <input type="text" name="last_name" value="" class="form-control" placeholder="Last Name" required> 
		            </div> 
		            <label>Email:</label>
				    <div class="form-group"> 
		                <input type="email" name="email" value="" class="form-control" placeholder="Email" required> 
		            </div> 
				    <label>Password:</label>
		            <div class="form-group"> 
		                <input type="password" value="" name="password" class="form-control" placeholder=" Password"> 
		            </div> 
		            <label>User Type:</label>
		            <div class="form-group"> 
		                <select name="user_type" class="form-control">
		                	<option value="">Selete User Type</option>
		                	<option value="1">Admin</option>
		                	<option value="2">User</option>
		                </select>
		            </div> 
				       <label></label>
		            <div class="form-group"> 
		                <input type="submit" value="Register" class="btn btn-success"> 
		                <a href="<?php echo base_url('UserController'); ?>" class="btn btn-success">login</a>
		            </div> 
		            
				</div>  
			</div>
		</form>	
	</div>
</body>
</html>