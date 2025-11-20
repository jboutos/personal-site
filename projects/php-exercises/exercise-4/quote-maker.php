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

	<h3>Quote maker</h3>
	<p>What is the quote?</p>

	<div class='field'>
		<label>Quote</label>
		<input type='text' name='quote'>
	</div>

	<p>Who said it?</p>

	<div class='field'>
		<label>Author</label>
		<input type='text' name='author'>
	</div>

	<button type='submit' name='quote-submit'>Submit</button>

</form>

<?php

	if (isset($_POST['quote-submit'])) {
		
		if (isset($_POST['quote'])) {
			$quote = $_POST['quote'];
		}

		if (isset($_POST['author'])) {
			$author = $_POST['author'];
		}

		if (strlen($quote) == 0 || strlen($author) == 0 || is_numeric($quote) || is_numeric($author)) {
			$output = "Please enter a valid author/quote";
		} else {
			$output = "<p>" . ucwords($author) . " says, \"" . $quote . "\"</p>";
		}

		echo $output;

	}



?>