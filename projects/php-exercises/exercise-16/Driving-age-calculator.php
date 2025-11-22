<a id='driving'></a>

<form action='index.php#driving' method='POST'>

	<h3>Driving age calculator</h3>
	<p>Checks to see if you're eligible to drive</p>

	<div class='field'>
		<label for='age'>Age</label>
		<input id='age' type='number' name='age' min='0'>
	</div>

	<button type='submit' name='age-submit'>Submit</button>

</form>

<?php

	if (isset($_POST['age-submit'])) {

		if (isset($_POST['age'])) {
			$age = $_POST['age'];
		}

		if (strlen($age) == 0) {
			echo "<p>Please enter a value!</p>";
			exit;
		}

		$continents = ["North America" => 16, "Australia" => 16, "South America" => 18, "Europe" => 18, "Asia" => 18, "Antarctica" => 18, "Africa" => 18];

		$legal = ($age >= 16) ? "<p>You are old enough to legally drive.</p>" : "<p>You are not old enough to legally drive.</p>";

		echo "<p>$legal</p>";

		$canDrive = [];

	   foreach ($continents as $continent => $minAge) {
	       if ($age >= $minAge) {
	           $canDrive[] = $continent;
	       }
	   }

	   if (!empty($canDrive)) {
	        echo "<p>You can legally drive in: " . implode(", ", $canDrive) . ".</p>";
	    } else {
	        echo "<p>You cannot legally drive in any listed continent.</p>";
	    }
	}

?>