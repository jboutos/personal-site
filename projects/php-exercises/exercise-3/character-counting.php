<character-counting>
	<a id='character-counting'></a>

	<form action='index.php#character-counting' method='POST'>

		<h3>Character counting app</h3>
		<p>Calculates the length of a given string</p>
		<div class='field'>
			<label for='input'>Input string</label>
			<input id='input' type='text' name='input' value="<?php echo $_POST['input'] ?? ''; ?>">
		</div>

		<button type='submit' name='character-submit'>Submit</button>

	</form>

	<?php
		
		if (isset($_POST["character-submit"])) {
			if (isset($_POST["input"])) {
				$text = $_POST["input"];
			}

			if (strlen($text) == 0) {
				$output = "<p>The string cannot be empty!</p>";
				echo $output;
				return;
			} else {
				$output = "<p>" . $text . " has " . strlen($text) . " characters.</p>";
			}

			echo $output;
		}
	?>
</character-counting>