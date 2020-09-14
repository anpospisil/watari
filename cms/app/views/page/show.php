<?php require VIEW_ROOT . '/templates/header.php'; ?>

	<?php if (!$page): ?>
		<p>No page found, sorry.</p>

	<?php else: ?>
		<h2><?php echo e($page['name']); ?></h2>
		<p><?php echo e($page['position']); ?></p>
		<p><?php echo e($page['bio']); ?></p>
		
		<p class="faded">Created on <?php echo $page['created']->format('jS M Y'); ?>
			<?php if ($page['updated']): ?>
				Last updated <?php echo $page['updated']->format('jS M Y'); ?>
			<?php endif; ?>	
		</p>
	<?php endif; ?>	

<?php require VIEW_ROOT . '/templates/footer.php'; ?>