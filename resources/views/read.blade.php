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
    	@foreach($user as $users)
    	<tr>
    		<td>{{$users->id}}</td>
    		<td>{{$users->name}}</td>
    		<td>{{$users->email}}</td>
    		<td>{{$users->mobile}}</td>
    		<td>{{$users->gender}}</td>
    		<td>{{$users->os}}</td>
    		<td><a href="show/{{$users->id}}">Show</a></td>
    		<td><a href="edit/{{$users->id}}">Upadat</a></td>
    		
    		<td><a href="delete/{{$users->id}}">delete</a></td>

    	</tr>
    	@endforeach
   	</table>


</body>
</html>