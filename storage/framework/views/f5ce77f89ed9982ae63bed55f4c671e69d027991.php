<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>User List</h1>
	<a href="/home">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>PASSWORD</td>
			<td>ACTION</td>
		</tr>

	<!--  <?php for($i=0; $i < count($users); $i++): ?>
		<tr>
			<td><?php echo e($users[$i]['id']); ?></td>
			<td><?php echo e($users[$i]['username']); ?></td>
			<td><?php echo e($users[$i]['password']); ?></td>
			<td>
				<a href="/user/edit/<?php echo e($users[$i]['id']); ?>">Edit</a> | 
				<a href="/user/delete/<?php echo e($users[$i]['id']); ?>">Delete</a> | 
				<a href="<?php echo e(route('student.details', $users[$i]['id'])); ?>">Details</a>
			</td>
		</tr>
	<?php endfor; ?> -->

	 <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $std): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($std['id']); ?></td>
			<td><?php echo e($std['username']); ?></td>
			<td><?php echo e($std['password']); ?></td>
			<td>
				<a href="<?php echo e(route('student.edit', [$std['id']])); ?>">Edit</a> | 
				<a href="<?php echo e(route('student.delete', [$std['id']])); ?>">Delete</a> | 
				<a href="<?php echo e(route('student.details', [$std['id']])); ?>">Details</a>
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

</body>
</html><?php /**PATH C:\xampp\htdocs\lex\resources\views/student/index.blade.php ENDPATH**/ ?>