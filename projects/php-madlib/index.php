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

			echo "<p>Today, I went to the " . $place . " to buy a " . $attribute . " " . $noun .".
			When I got there, a ". $animal . " suddenly " . $verb . " past me!
			Everyone started " . $verb2 . ", and I couldn’t stop " . $verb2 . " too.</p>"
		?>

		<p>Today, I went to the <?php echo $place;?> to buy a <?php echo $attribute;?> <?php echo $noun;?>.
			When I got there, a <?php echo $animal;?> suddenly <?php echo $verb;?> past me!
			Everyone started <?php echo $verb2;?>, and I couldn’t stop <?php echo $verb2;?> too.</p>

		<p>Today, I went to the <?=$place?> to buy a <?=$attribute?> <?=$noun?>.
			When I got there, a <?=$animal?> suddenly <?=$verb?> past me!
			Everyone started <?=$verb2?>, and I couldn’t stop <?=$verb2?> too.</p>
		
	</body>
</html>