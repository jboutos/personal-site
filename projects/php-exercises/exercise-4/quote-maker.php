<a id='quote-maker'></a>

<form action='index.php#quote-maker' method='POST'>

	<h3>Quote maker</h3>
	<p>Creates a quote based on user input</p>

	<div class='field'>
		<label for='quote'>Quote</label>
		<input id='quote' type='text' name='quote'>
	</div>

	<div class='field'>
		<label for='author'>Author</label>
		<input id='author' type='text' name='author'>
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

		if (strlen($quote) == 0 && strlen($author) == 0) {
			$output = "Author and quote must have some values!";
		} else if (strlen($quote) == 0) {
			$output = "Quote field cannot be empty!";
		} else if (strlen($author) == 0) {
			$output = "Author field cannot be empty!";
		} else if (is_numeric($quote) || is_numeric($author)) {
			$output = "Numbers do not work for the author and quote fields!";
		} else if (is_numeric($quote)) {
			$output = "Numbers do not work for the quote field!";
		} else if (is_numeric($author)) {
			$output = "Numbers do not work for the author field!";
		} else {
			$output = "<p>" . ucwords($author) . " says, \"" . $quote . "\"</p>";
		}

		echo $output;
	}
?>