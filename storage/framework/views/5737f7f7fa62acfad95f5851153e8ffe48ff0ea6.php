<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>update</title>
</head>
<body>

<?php echo e(Form::model($user,['method'=>'patch','action'=>['testing@update',$user->id]])); ?>

<?php echo e(Form::label('name','Name')); ?>

<?php echo e(Form::text('name')); ?>

<?php echo e(Form::submit('update')); ?>

<?php echo e(Form::close()); ?>

</body>
</html>