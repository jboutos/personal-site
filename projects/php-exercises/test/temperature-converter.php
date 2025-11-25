<style>
	inner-column {
		display: flex;
		flex-direction: column;
		max-width: 1600px;
		margin-left: auto;
		margin-right: auto;
	}

	.field {
		display: flex;
		flex-direction: column;
	}

	header {
		@media(min-width: 900px) {
			display: flex;
			flex-direction: column;
			align-items: center;
		}
	}

	footer {
		@media(min-width: 900px) {
			display: flex;
			flex-direction: column;
			align-items: center;
		}
	}

	header a {
		margin-bottom: 1em;
		color: brown;
	}

	footer a {
		margin-top: 2em;
		color: brown;
	}

	form {
		max-width: 300px;
		background: linear-gradient(150deg, lightgray, #F2F0EF);
		padding: 1em;
		border: 1px solid black;
		border-radius: 10px;
		box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
	}

	button[type='submit'] {
		margin-top: 20px;
		border-radius: 15px;
		border: 1px solid black;
		box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
		padding: 3px 7px;
		cursor: pointer;
	}

	input {
		border-radius: 10px;
		border: 1px solid gray;
		padding: 3px 7px;
	}

	label {
		opacity: 0.5;
		margin: 0;
		font-size: 13px;
		padding-bottom: 5px;
		font-family: 'Monda', sans-serif;

	}

	h3 {
		color: brown;
	}

	.field + .field {
		margin-top: 1.1em;
	}

	partials {
		display: grid;
		gap: 2em;

		@media(min-width: 600px) {
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			column-gap: 1em;
			row-gap: 2em;
		}

		@media(min-width: 750px) {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
		}

		@media(min-width: 900px) {
			display: grid;
			grid-template-columns: repeat(4, 1fr);
		}
	}

	.mini {
		font-size: 13px;
	}

	p, a {
		font-family: 'Monda', sans-serif;
		font-size: 16px;
	}

	h1, h2, h3, h4 {
		font-family: 'Julius Sans One', sans-serif;
	}
</style>

<?php

	$choice = '';
	$temp = '';
	$result = '';

	if (isset($_POST['choice-submit'])) {
		
		if (isset($_POST['choice'])) {
			$choice = strtolower($_POST['choice']);
		}

		if ($choice != "c" && $choice != "f") {
			echo "<p>I need either C or F as input</p>";
			echo "<a href=''>Go back</a>";
			return;
		} 

		if (isset($_POST['temp'])) {

			if ($_POST['temp'] !== '') {
				$temp = $_POST['temp'];

				if (($choice) == 'c') {
					$result = round(($temp - 32) * 5 / 9, 1);
				} else {
					$result = round(($temp * 9 / 5) + 32, 1);
				}
			}
		} 
	}
?>


<form method='POST'>

	<h3>Temperarture converter</h3>
	<p>Receives a temperature either in Celsius or Fahrenheit and converts it</p>

	<?php if (!$choice): ?>

		<div class='field'>
			<label for='choice'>Press C to convert from Fahrenheit to Celsius.<br>Press F to convert from Celsius to Fahrenheit.</label>
			<input id='choice' type='text' name='choice' maxlength='1' required>
		</div>

		<button type='submit' name='choice-submit'>Submit</button>

	<?php elseif ($result === ''): ?>

		<div class='field'>
			<label for='temp'>Please enter the temperature in <?php echo $choice == 'c' ? 'Fahrenheit:' : 'Celsius:'; ?> </label>
			<input id='temp' type='number' name='temp' step='0.1' required>
			<input type="hidden" name="choice" value="<?php echo $choice; ?>">
		</div>

		<button type='submit' name='choice-submit'>Submit</button>

	<?php else: ?>

		<p><em>The temperature in <?php echo $choice == 'c' ? ' Celsius is: ' : ' Fahrenheit is: ' ?> <?php echo $result ?> degrees.</em></p>
		<a href=''>Go back</a>

	<?php endif; ?>

</form>