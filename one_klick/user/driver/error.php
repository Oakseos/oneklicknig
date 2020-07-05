<?php if (sizeof($errors) > 0 ) : ?>

		<div>
			<button class="btn btn-danger btn-block">
				<?php foreach ($errors as $error): ?> 
					<strong><?php echo $error ?></strong>
				<?php endforeach ?>
			</button>
			
		</div>

<?php endif ?>