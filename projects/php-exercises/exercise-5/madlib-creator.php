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

	span {
		font-size: 20px;
		color: green;
	}

</style>

<form method='POST'>

	<h3>Madlib creator</h3>
	<p>Please enter a noun</p>

	<div class='field'>
		<label>Noun</label>
		<input type='text' name='noun'>
	</div>

	<p>Please enter a verb</p>

	<div class='field'>
		<label>Verb</label>
		<input type='text' name='verb'>
	</div>

	<p>Please enter an adverb</p>

	<div class='field'>
		<label>Adverb</label>
		<input type='text' name='adverb'>
	</div>

	<p>Please enter an adjective</p>

	<div class='field'>
		<label>Adjective</label>
		<input type='text' name='adjective'>
	</div>

	<button type='submit' name='madlib-submit'>Submit</button>

</form>

<?php

	if (isset($_POST['madlib-submit'])) {

		if (isset($_POST['noun'])) {
			$noun = $_POST['noun'];
		}

		if (isset($_POST['verb'])) {
			$verb = $_POST['verb'];
		}

		if (isset($_POST['adverb'])) {
			$adverb = $_POST['adverb'];
		}

		if (isset($_POST['adjective'])) {
			$adjective = $_POST['adjective'];
		}

		if (strlen($noun) == 0 || strlen($verb) == 0 || strlen($adverb) == 0 || strlen($adjective) == 0  ||
				is_numeric($noun) || is_numeric($verb) || is_numeric($adverb) || is_numeric($adjective)) {
			$output = "Please enter valid values";
		} else {
			$output = "<p>The " . "<span><em>" . strtolower($adjective) . "</em></span>" . " " . "<span><em>" . strtolower($noun) . "</em></span>" . " decided to " . "<span><em>" . strtolower($verb) . "</em></span>" . " " . "<span><em>" . strtolower($adverb) . "</em></span>" . " into the void.</p>";
		}

		echo $output;

	}

?>