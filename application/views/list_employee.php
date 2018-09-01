<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>


</head>
<body>
	<div class="container">
		<h1>Employee List</h1>
		<?php if($this->session->flashdata('message') != ""){?>
		<div class="alert alert-success">
		  <?php echo $this->session->flashdata('message'); ?>
		</div>
		<?php } ?>
		<div style="text-align: right;">
				Admin: <?php $loginUser = $this->session->userdata('loginUser'); echo $loginUser['first_name'];  ?>
			<a href="<?php echo base_url('UserController/') ?>" class="btn btn-primary">Logout</a>
		</div><br/>
		<div style="text-align: right;">
			<a href="<?php echo base_url('EmployeeController/') ?>" class="btn btn-success">Add Employee</a>
		</div><br/>
		<table id="example" class="table table-striped table-bordered" >
        <thead>
            <tr>
            	<th>SR NO.</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
			<?php $i=1;
			 foreach ($employees as $employee): ?>
			<tr>
				<th><?php echo $i++; ?></th>
				<td><?php echo $employee['first_name'] ?></td>
				<td><?php echo $employee['last_name'] ?></td>
				<td><?php echo $employee['email'] ?></td>
				<td>
					<a href="<?php echo base_url('EmployeeController/editEmp/'.$employee['id']) ?>" class="btn btn-primary">Edit</a>
					<a href="<?php echo base_url('EmployeeController/deleteEmp/'.$employee['id']) ?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
    </table>

	</div>
</body>
</html>
<script>
	$(document).ready(function() {
	    $('#example').DataTable();
	} );
</script>