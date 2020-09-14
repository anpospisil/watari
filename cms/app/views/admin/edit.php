<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<h2>Update Page</h2>
	
	<form action="<?php echo BASE_URL; ?>/admin/edit.php" method="POST" 
	autocomplete="off">
		
		<label for="name">
		Name
			<input type="text" name="name" id="name" value="<?php echo e($page['name']); ?>">
		</label>
		
		<label for="position">
		Position
			<input type="text" name="position" id="position" value="<?php echo e($page['position']); ?>">
		</label>
		
		<label for="bio">
		Bio
			<textarea name="bio" id="bio" cols="30" rows="10"><?php echo e($page['bio']); ?></textarea>
		</label>
		
		<input type="hidden" name="id" value="<?php echo e($page['id']); ?>">
		
		<input type="submit" value="Update">
	</form>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
