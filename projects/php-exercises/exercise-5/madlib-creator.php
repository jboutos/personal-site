<madlib-creator>
	<a id='madlib-creator'></a>

	<form action='index.php#madlib-creator' method='POST'>

		<h3>Madlib creator</h3>
		<p>Creates a madlib based on user input</p>

		<div class='field'>
			<label for='noun'>Noun</label>
			<input id='noun' type='text' name='noun' value="<?php echo $_POST['noun'] ?? ''; ?>">
		</div>

		<div class='field'>
			<label for='verb'>Verb</label>
			<input id='verb' type='text' name='verb' value="<?php echo $_POST['verb'] ?? ''; ?>">
		</div>

		<div class='field'>
			<label for='adverb'>Adverb</label>
			<input id='adverb' type='text' name='adverb' value="<?php echo $_POST['adverb'] ?? ''; ?>">
		</div>

		<div class='field'>
			<label for='adjective'>Adjective</label>
			<input id='adjective' type='text' name='adjective' value="<?php echo $_POST['adjective'] ?? ''; ?>"'>
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

			if (strlen($noun) == 0 || strlen($verb) == 0 || strlen($adverb) == 0 || strlen($adjective) == 0) {
				$output = "You didn't enter a value somewhere!";
				echo $output;
				return;
			} else if (is_numeric($noun) || is_numeric($verb) || is_numeric($adverb) || is_numeric($adjective)) {
				$output = "You entered a number somewhere, this won't work!";
				echo $output;
				return;
			} else {
				$output = "<p>The " . "<span><em>" . strtolower($adjective) . "</em></span>" . " " . "<span><em>" . strtolower($noun) . "</em></span>" . " decided to " . "<span><em>" . strtolower($verb) . "</em></span>" . " " . "<span><em>" . strtolower($adverb) . "</em></span>" . " into the void.</p>";
			}

			echo $output;
		}
	?>
</madlib-creator>