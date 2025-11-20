<header style='font-size: 30px'>
<?php 

	function monsterGenerator($name, $age, $favoriteFood) {
		$monster = [
			"name" => $name,
			"age" => $age,
			"favoriteFood" => $favoriteFood
		];
		return $monster;
	}

	$crunchy = monsterGenerator("Crunchy", 6, "pork rinds");
	$crusty = monsterGenerator("Crusty", 6, "bread");
	$dusty = monsterGenerator("Dusty", 6, "off-brand cola");
	$chunky = monsterGenerator("Chunky", 6, "corn on the cob");
	$chubby = monsterGenerator("Chubby", 6, "marshmallow");

	$monsters = [$crunchy, $crusty, $dusty, $chunky, $chubby];

	?>

	<?php foreach ($monsters as $monster) { ?>

		<li class='monster'>
			<monster-card>
			   <h2 class='name'><?=$monster["name"]?></h2>

				<p class='age'><?=$monster["age"]?></p>
				<p class='food'><?=$monster["favoriteFood"]?></p>
			</monster-card>
		</li>

	<?php } ?>

</header>



























































<?php include('styles.php'); ?>
<?php include('monster-factory.php'); ?>

<ol class='monster-list'>

<?php foreach ($monsters as $monster) { ?>
	<?php
		$id = $monster["id"];
		$name = $monster["name"];
		$story = "My favorite food is " . $monster["favorite food"] . " and I am " . $monster["age"] . " years old.";
		$portrait = $monster["portrait"];
		$status = $monster["adopted"];

		//set human readable status
		if ($status == 1) {
			$status = "Adopted!";
		} else {
			$status = "Needs a home!";
		}

	?>

	<li class='monster'>
		<monster-card id='<?=$id?>'>
			<picture class='portrait'>
				<img src='<?=$portrait?>' width='200'>
			</picture>
		   <h2 class='name'><?=$name?></h2>

			<p class='story'><?=$story?></p>
			<p class='status'><?=$status?></p>
		</monster-card>

	</li>

<?php } ?>

</ol>