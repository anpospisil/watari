<!DOCTYPE html>
<html>
<body>
<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<?php if (empty($pages)): ?>
		<p>No pages at the moment. </p>
	<?php else: ?>
		<table>
			<thead>
				<tr> 
					<th>Name</th>
					<th>Position</th>
					<th>Bio</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($pages as $page): ?>
					<tr>
						<td><?php echo e($page['name']); ?></td>
						<td><?php echo e($page['position']); ?></td>
						<td><?php echo e($page['bio']); ?></td>
						<td><a href="<?php echo BASE_URL; ?>/admin/edit.php?id=<?php echo e($page['id']); ?>">Update</a></td>
						<td><a href="<?php echo BASE_URL; ?>/admin/delete.php?id=<?php echo e($page['id']); ?> ">Delete</a></td>
					</tr>	
				<?php endforeach; ?>	
			</tbody>
		</table>
	<?php endif; ?>

	<a href="<?php echo BASE_URL; ?>/admin/add.php">Add new page </a>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
</body>
</html>