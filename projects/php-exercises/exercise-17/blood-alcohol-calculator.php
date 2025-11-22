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

	<h3>Blood alcohol calculator</h3>
	<p>What is your weight?</p>

	<div class='field'>
		<label>Weight</label>
		<input type='number' name='weight' min='1' step='0.1'>
	</div>

	<p>What is your gender?</p>

	<div class='field'>
		<label>Gender</label>
		<input type='text' name='gender'>
	</div>

	<p>How many drinks did you have?</p>

	<div class='field'>
		<label>Amount of drinks</label>
		<input type='number' name='drinks' min='0'>
	</div>

	<p>Please enter the amount of alcohol by volume</p>

	<div class='field'>
		<label>Alcohol amount</label>
		<input type='number' name='volume' step='0.1' min='0'>
	</div>

	<p>How many hours have passed since your last drink?</p>

	<div class='field'>
		<label>Hours passed</label>
		<input type='number' name='time' min='0'>
	</div>

	<button type='submit' name='blood-submit'>Submit</button>
</form>

<?php

	if (isset($_POST['blood-submit'])) {

		if (isset($_POST['weight'])) {
			$weight = $_POST['weight'];
		}

		if (isset($_POST['gender'])) {
			$gender = strtolower($_POST['gender']);
		}

		if (isset($_POST['drinks'])) {
			$drinks = $_POST['drinks'];
		}

		if (isset($_POST['volume'])) {
			$volume = $_POST['volume'];
		}

		if (isset($_POST['time'])) {
			$time = $_POST['time'];
		}

		$weight = $_POST['weight'] ?? '';
		$gender = $_POST['gender'] ?? '';
		$drinks = $_POST['drinks'] ?? '';
		$volume = $_POST['volume'] ?? '';
		$time = $_POST['time'] ?? '';

		if ($gender !== "male" && $gender !== "female") {
    		echo "<p>Please enter a valid value</p>";
    		exit;
		}

		if ($gender == "male") {
			$r = 0.73;
		} else {
			$r = 0.66;
		}

	}

?>