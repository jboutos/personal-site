<style>

	form {
		max-width: 300px;
		background-color: cornflowerblue;
		padding: 1em;
		border: 2px solid purple;
		box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
	}

	.field {
		display: flex;
		flex-direction: column;
	}

	label {
		margin-bottom: 10px;
	}

	button[type='submit'] {
		margin-top: 10px;
	}

</style>

<form method='POST'>

	<h3>A warm greeting</h3>

	<div class='field'>
		<p>Whats your name?</p>
		<label>Name</label>
		<input type='text' name='name'>
	</div>

	<button type='submit' name='greeting-submit'>Submit</button>

</form>

<?php

if (isset($_POST["greeting-submit"])) {
	if (isset($_POST["name"])) {
		$name = $_POST["name"];
	}

	if (strlen($name) == 0 || is_numeric($name)) {
		$output = "Invalid name, please try again";
	} else {
		$output = "<p>Hello, " . ucfirst($name) . ", nice to meet you!</p>";
	}

	echo $output;
}


?>