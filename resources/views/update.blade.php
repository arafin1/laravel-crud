<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>update</title>
</head>
<body>

{{Form::model($user,['method'=>'patch','action'=>['testing@update',$user->id]])}}
{{Form::label('name','Name')}}
{{Form::text('name')}}
{{Form::submit('update')}}
{{Form::close()}}
</body>
</html>