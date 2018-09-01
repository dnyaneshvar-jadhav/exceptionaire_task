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
		<h1>Add Employee Page</h1>
		<div style="text-align: right;">
				Admin: <?php $loginUser = $this->session->userdata('loginUser'); echo $loginUser['first_name'];  ?>
			<a href="<?php echo base_url('UserController/') ?>" class="btn btn-primary">Logout</a>
		</div><br/>
		<form method="post" action="<?php echo base_url('/EmployeeController/addEmp'); ?>">
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
				    <label></label>
		            <div class="form-group"> 
		                <input type="submit" value="Add" class="btn btn-success"> 
		                <a href="<?php echo base_url('EmployeeController/listEmployee'); ?>" class="btn btn-primary">Back</a>
		            </div> 
		            
				</div>  
			</div>
		</form>	
	</div>
</body>
</html>