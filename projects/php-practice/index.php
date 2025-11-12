<!doctype html>
<html lang ='en'>
	<head>
	</head>
	<body>
		<?php
			$first = "John";
			$last = "Boutos";
			$age = 36;
			$full_name = $first . " " . $last;

			if ($age < 18) {
				echo $full_name . " you don't have the right to vote!";
			} else if ($age >= 18 && $age <= 80) {
				echo $full_name . " please proceed to the voting chamber";
			} else {
				echo "Go away you're too old!";
			}                            

			$number = 77;
			
			if ($number % 2 == 0) {
				echo "<p>" . $number . " is even</p>";
			} else {
				echo "<p>" . $number . " is odd</p>";
			}

			$cat = ["name" => "Tina", "age" => 2, "personality" => "obedient", "favorite toy" => "small ball", 
			"favorite food" => "wet food", "hiding-place" => "Inside the bed's lining"];

			echo "<p> My cat's name is " . $cat["name"] . ", she is " . $cat["age"] . " years old and I would characterize her as a rather " . $cat["personality"] . " obedient pet</p>";

		?>
	</body>
</html>