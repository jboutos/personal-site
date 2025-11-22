<a id='pizza'></a>

<form action='index.php#pizza' method='POST'>

	<h3>Pizza division</h3>
	<p>Calculates how much pizza each member of the party gets</p>

	<div class='field'>
		<label for='people'>Number of people</label>
		<input id='people' type='number' name='people' min='1'>
	</div>

	<div class='field'>
		<label for='pizza11'>Amount of pizzas</label>
		<input id='pizza11' type='number' name='pizza' min='1'>
	</div>

	<div class='field'>
		<label for='slice'>Slices per pizza</label>
		<input id='slice' type='number' name='slice' min='1'>
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

		if (strlen($people) == 0 || strlen($pizza) == 0 || strlen($slices) == 0) {
			$output = "All fields need values!";
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