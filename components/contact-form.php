<form method='POST'>

	<div class='field'>
		<label for='name'><?= $nameLabel ?></label>
		<input id='name' type='text' placeholder='Name' name='name' value='' required>
	</div>

	<div class='field'>
		<label for='email'><?= $nameLabel2 ?></label>
		<input id='email' type='email' placeholder='Email' name='email' value='' required>
	</div>

	<div class='field'>
		<label for='message'><?= $label ?></label>
		<textarea id='message' placeholder='Your message here' name='message' required></textarea>
	</div>

	<button type='submit' name='submitted'><?= $button ?></button>
	<div id='spinner' style='display:none'>Loading...</div>

</form>

<div role="status">
  <?php echo $reply ?>
</div>