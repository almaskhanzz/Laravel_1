<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Edit User</h1>
	<a href="<?php echo e(route('student.index')); ?>">Back</a> | 
	<a href="/logout">logout</a>
	
	<form method="post">
	<table border="1">
		<tr>
			<td>USERNAME</td>
			<td><input type="text" name="username" value="<?php echo e($std['username']); ?>"></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><input type="text" name="password" value="<?php echo e($std['password']); ?>"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="update"></td>
			<td></td>
		</tr>
	</table>
</form>

</body>
</html><?php /**PATH C:\xampp\htdocs\lex\resources\views/student/edit.blade.php ENDPATH**/ ?>