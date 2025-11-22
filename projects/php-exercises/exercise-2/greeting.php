<a id='greeting'></a>

<form action='index.php#greeting' method='POST'>

	<h3>A warm greeting</h3>
	<p>The user enters his name and gets a warm greeting</p>

	<div class='field'>
		<label for='text'>Name</label>
		<input id='text' type='text' name='name'>
	</div>

	<button type='submit' name='greeting-submit'>Submit</button>

</form>

<?php

if (isset($_POST["greeting-submit"])) {
	if (isset($_POST["name"])) {
		$name = $_POST["name"];
	}

	if (strlen($name) == 0 || is_numeric($name)) {
		$output = "The name cannot be empty!";
	} else {
		$output = "<p>Hello, " . ucfirst($name) . ", nice to meet you!</p>";
	}

	echo $output;
}


?>