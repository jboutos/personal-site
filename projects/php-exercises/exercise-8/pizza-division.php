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

	<h3>Pizza division</h3>
	<p>How many people?</p>

	<div class='field'>
		<label>People</label>
		<input type='number' name='people' min='1'>
	</div>

	<p>How many pizzas do you have?</p>

	<div class='field'>
		<label>Pizza</label>
		<input type='number' name='pizza' min='1'>
	</div>

	<p>How many slices per pizza?</p>

	<div class='field'>
		<label>Slices</label>
		<input type='number' name='slice' min='1'>
	</div>

	<button type='submit' name='pizza-submit'>Submit</button>
</form>

<?php

	if (isset($_POST['pizza-submit'])) {

		if (isset($_POST['people'])) {
			$people = $_POST['people'];
		}

		if (isset($_POST['pizza'])) {
			$pizza = $_POST['pizza'];
		}

		if (isset($_POST['slice'])) {
			$slices = $_POST['slice'];
		}

		if (!is_numeric($people) || !is_numeric($pizza) || !is_numeric($slices)) {
			$output = "Cannot calculate the division";
			echo $output;
		} else {
			$pizza_Per_Person = floor(($pizza * $slices) / $people);
			$total_Slices = $slices * $pizza;
			$leftover = floor($total_Slices - ($pizza_Per_Person * $people));

			if ($people == 1 && $pizza == 1) {
				echo "<p>" . $people . " person with " . $pizza . " pizza.</p>";
			} else if ($people == 1 && $pizza > 1) {
				echo "<p>" . $people . " person with " . $pizza . " pizzas.</p>";
			} else if ($people > 1 && $pizza == 1) {
				echo "<p>" . $people . " people with " . $pizza . " pizza.</p>";
			} else {
				echo "<p>" . $people . " people with " . $pizza . " pizzas.</p>";
			}

			if ($people == 1 && $pizza_Per_Person == 1) {
				echo "<p>" . $people . " person gets " . $pizza_Per_Person . " pizza slice.</p>";
			} else if ($people == 1 && $pizza_Per_Person > 1) {
				echo "<p>" . $people . " person gets " . $pizza_Per_Person . " pizza slices.</p>";
			} else if ($people > 1 && $pizza_Per_Person == 1) {
				echo "<p>There is not enough pizza for everybody</p>";
			} else {
				echo "<p>" . $people . " people get " . $pizza_Per_Person . " pizza slices.</p>";
			} 

			if ( $leftover != 1) {
				echo "<p>There are " . $leftover . " leftover pieces.</p>";
			} else {
				echo "<p>There is " . $leftover . " leftover piece.</p>";
			}
		}
	}
?>