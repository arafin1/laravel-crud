<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Read</title>
	
	<style>
		table,thead,th,tr,td{
			border-collapse: collapse;
			border:1px solid blue;
			padding-left: 1.5cm;
		}
	</style>

</head>
<body>
<br><br>
<h3><a href="create">Create</h3>
<br>
<br>
    <table style="width:100%">
    	<thead>
    	<th>Id</th>
    	<th>Name</th>
    	<th>Email</th>
    	<th>Mobile</th>
    	<th>Gender</th>
    	<th>Os</th>
    	<th>Show</th>
    	<th>Update</th>
    	<th>Dele</th>
    	</thead>
    	<?php foreach($user as $users): ?>
    	<tr>
    		<td><?php echo e($users->id); ?></td>
    		<td><?php echo e($users->name); ?></td>
    		<td><?php echo e($users->email); ?></td>
    		<td><?php echo e($users->mobile); ?></td>
    		<td><?php echo e($users->gender); ?></td>
    		<td><?php echo e($users->os); ?></td>
    		<td><a href="show/<?php echo e($users->id); ?>">Show</a></td>
    		<td><a href="edit/<?php echo e($users->id); ?>">Upadat</a></td>
    		
    		<td><a href="delete/<?php echo e($users->id); ?>">delete</a></td>

    	</tr>
    	<?php endforeach; ?>
   	</table>


</body>
</html>