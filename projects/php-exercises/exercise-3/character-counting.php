<style>

	.field {
		display: flex;
		flex-direction: column;
	}

	form {
		max-width: 300px;
		background-color: lightgray;
		padding: 1em;
		border: 2px solid black;
	}

	button[type='submit'] {
		margin-top: 20px;
	}

	label {
		margin-bottom: 10px;
	}

	h3 {
		color: brown;
	}

</style>

<form method='POST'>

	<h3>Character counting app</h3>
	<p>Please enter a string</p>
	<div class='field'>
		<label>Input string</label>
		<input type='text' name='input'>
	</div>

	<button type='submit' name='character-submit'>Submit</button>

</form>

<?php
	
	if (isset($_POST["character-submit"])) {
		if (isset($_POST["input"])) {
			$text = $_POST["input"];
		}

		if (strlen($text) == 0) {
			$output = "<p>Please enter a valid string";
		} else {
			$output = "<p>" . $text . " has " . strlen($text) . " characters.</p>";
		}

		echo $output;

	}



?>