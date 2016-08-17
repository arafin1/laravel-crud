
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>create</title>
</head>
<body>
<form action="store" method="post">
	<label for="name">Name</label>
	<input type="text" name="Name" ><br/>
	<label for="email">Email</label>
	<input type="text" name=""><br/>
	<label for="mobile">Mobile</label>
	<input type="text" name=""><br/>

	Gender<input type="radio" name="gender" value="male">Male
	<input type="radio" name="gender" value="female">Female<br/>
	<select name="os" id="os">
		<option value="windows">windows</option>
		<option value="linux">linux</option>
		<option value="mac">Mac</option>
	</select><br/>

	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

	<label for=""></label>
	<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>