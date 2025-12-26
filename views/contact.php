<div class ='column'>
	<h1 class='attention-voice'><?= $title ?></h1>
	<p class='calm-voice'><?= $subtitle ?></p>
	<p class='calm-voice'><?= $subtitle2 ?></p>

	<form method='POST'>

		<div class='field'>
			<label for='name'><?= $nameLabel ?></label>
			<input id='name' type='text' name='name' value='<?php echo $name; ?>' required>
		</div>

		<div class='field'>
			<label for='message'><?= $label ?></label>
			<textarea id="message" name="message" value='<?php echo $message; ?>' required></textarea>
		</div>

		<button type='submit' name='submitted'><?= $button ?></button>

	</form>

	<?php echo $reply ?>

	<h2 class='careful-voice'><?= $links ?></h2>

	<?php include('modules/footer.php') ?>
</div>