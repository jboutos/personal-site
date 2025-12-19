<!doctype html>
<html>
	<head>
	</head>
	<body>
		<?php
			$place = "convenience store";
			$attribute = "delicious";
			$noun = "meal";
			$animal = "bear";
			$verb = "walked";
			$verb2 = "shouting";
			$place2 = "university";
			$attribute2 = "cozy";
			$noun2 = "crow";
			$noun3 = "chair";
			$verb2 = "speak";
			$verb3 = "scream";
			$place3 = "elderly house";
			$attribute3 = "bleak";
			$noun4 = "biscuit";
			$animal2 = "cow";
			$verb4 = "appeared";
			$verb5 = "laughing";

			echo "<p>Today, I went to the " . $place . " to buy a " . $attribute . " " . $noun .".
			When I got there, a ". $animal . " suddenly " . $verb . " past me!
			Everyone started " . $verb2 . ", and I couldn’t stop " . $verb2 . " too.</p>"
		?>

		<p>One day, I went to my local <?php echo $place2;?>. It was very <?php echo $attribute2;?> there. I saw a <?php echo $noun2;?> sitting on a <?php echo $noun3;?>. Suddenly, it started to <?php echo $verb2;?> and everyone began to <?php echo $verb3;?>
		in surprise. What a day!</p>

		<p>Today, I visited the <?=$place3?>, which looked incredibly <?=$attribute3?>.
		I spotted a <?=$noun4?> on the counter, and suddenly a <?=$animal2?> <?=$verb4?> right in front of me!
		Everyone began <?=$verb5?>, and I couldn’t help <?=$verb5?> along with them.</p>

	</body>
</html>