<div class ='column'>
	<h1 class='attention-voice'><?= $title ?></h1>
	<p class='calm-voice'><?= $subtitle ?></p>
	<p class='calm-voice'><?= $subtitle2 ?></p>

	<form method='POST'>

		<div class='field'>
			<label for='name'><?= $nameLabel ?></label>
			<input id='name' type='text' placeholder='Name' name='name' value='' required>
		</div>

		<div class='field'>
			<label for='email'><?= $nameLabel2 ?></label>
			<input id='email' type='text' placeholder='Email' name='email' value='' required>
		</div>

		<div class='field'>
			<label for='message'><?= $label ?></label>
			<textarea id='message' placeholder='Your message here' name='message' required></textarea>
		</div>

		<button type='submit' name='submitted'><?= $button ?></button>
		<div id='spinner' style='display:none'>Loading...</div>

	</form>

	<?php echo $reply ?>

	<h2 class='careful-voice'><?= $links ?></h2>

	<?php include('modules/footer.php') ?>
</div>