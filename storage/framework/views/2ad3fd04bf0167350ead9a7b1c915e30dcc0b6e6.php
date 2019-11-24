<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>User Details</h1>
	<a href="<?php echo e(route('student.index')); ?>">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td><?php echo e($std['id']); ?></td>
		</tr>
		<tr>
			<td>USERNAME</td>
			<td><?php echo e($std['username']); ?></td>
		</tr>
		<tr>
			<td>PASSWORD</td>
			<td><?php echo e($std['password']); ?></td>
		</tr>

	</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\lex\resources\views/student/details.blade.php ENDPATH**/ ?>