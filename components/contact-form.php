<form method='POST' aria-label='Contact form for sending a message to the site owner'>

	<div class='field'>
		<label class='calm-voice label-alignment' for='name'><?= $nameLabel ?></label>
		<input id='name' type='text' placeholder='Please enter your name' name='name' value='' required>
	</div>

	<div class='field'>
		<label class='calm-voice label-alignment' for='email'><?= $nameLabel2 ?></label>
		<input id='email' type='email' placeholder='Please enter your email' name='email' value='' required>
	</div>

	<div class='field'>
		<label class='calm-voice label-alignment' for='message'><?= $label ?></label>
		<textarea id='message' placeholder='Please enter your message' name='message' required></textarea>
	</div>

	<button type='submit' name='submitted'><?= $button ?></button>
	<div id='spinner' style='display:none'>Loading...</div>

</form>

<div role="status">
  <?php echo $reply ?>
</div>