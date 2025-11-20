<?php

$favoriteBands = ["band1", "band2", "band3", "band4", "band5", "band6"];
$favoriteNumbers = [23, 16, 13, 38, 100, 11, 1, 4];

foreach ($favoriteBands as $band) {
	echo "<li> $band </li>";
}


for ($i = 0; $i <= 34; $i++) {
	if ($i != 12 && $i != 17 && $i != 23) {
		echo "$i ";
	}
}

foreach ($favoriteNumbers as $number) {
	if ($number < 20) {
		echo "$number ";
	}
}

echo "\n";

?>

<style>

	label, input, button {
		border: 1px solid red;
	}

	form {
		max-width: 400px;
		border: 1px solid green;
	}

	.field {
		border: 1px solid blue;
		display: flex;
		flex-direction: column;
	}

	.field label {
		font-size: 14px;
		margin-bottom: 4px;
	}

	button[type='submit'], .field + .field {
		margin-top: 10px;
	}

	.submitted {
		color: green;
	}

</style>





<?php

	$stuff = $_POST;
	print_r($stuff);
	var_dump($stuff);

	$students = 0;
	$books = 0;

	if (isset($_POST["submitted"])) {
		echo $_POST["books"];
		echo "<p class='submitted'>submitted it!</p>";

		if (isset($_POST["students"])) {
			if ($_POST["students"] >= 0) {
				$students = $_POST["students"];
			}
		}
		if (isset($_POST["books"])) {
			if ($_POST["books"] >= 0) {
				$students = $_POST["books"];
			}
		}

		$total = floatval($books) * floatval($students);
		echo "<p>$total</p>";
	}

?>

<form method='POST'>

	<p>Calculating the books</p>

	<div class='field'>
		<label>Number of students</label>
		<input type='number' name='students' value='<?=$students?>' min='0' max='30'>
	</div>

	<div class='field'>
		<label>Books per student</label>
		<input type='number' name='books' value='<?=$books?>' min='0' max='5'>
	</div>

	<button type='submit' name='submitted'>Push me</button>

</form>