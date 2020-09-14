<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<h2>Add page</h2>
	
	<form action="<?php echo BASE_URL; ?>/admin/add.php" method="POST" 
	autocomplete="off">
		
		<label for="name">
		Name
			<input type="text" name="name" id="name">
		</label>
		
		<label for="position">
		Position
			<input type="text" name="position" id="position">
		</label>
		
		<label for="bio">
		Bio
			<textarea name="bio" id="bio" cols="30" rows="10"></textarea>
		</label>
		<input type="submit" value="Add">
	</form>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
