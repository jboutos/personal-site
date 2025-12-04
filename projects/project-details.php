<style>
	
	body {
		background-color: powderblue;
	}

	h1 {
		margin-top: 80px;
		padding-top: 0;
		color: firebrick;
	}

	p, a, h2 {
		color: mediumblue;
		max-width: 50ch;
	}

	a:hover {
		background-color: hsl(180, 92%, 40%);
	}

	li::marker {
		color: mediumblue;
	}

	picture {
		margin-top: 80px;
	}

	container {
		display: flex;
		align-items: start;
		gap: 2em;
	}

</style>

<?php include("projects-data.php") ?>

<?php
//needed the data as a prtial, if it wss kept in projects2 the array wouldnt load since index php includes only this page and not projects2!

	$project_id = '';

	if (isset($_GET['project'])) {
		$project_id = $_GET['project'];
	}

	foreach ($projects as $project) {
		if ($project_id == $project["id"]) {
			$detail = $project;
			break;
		}
	}
?>

<?php if (isset($detail)) { 

	$description = "In " . strtolower($detail["title"]) . " " . $detail["description"];
?>

	<description>

			<container>

				<picture>
					<img src='<?=$detail["image"]?>' alt='<?=$detail["title"] . " image"?>'>
				</picture>

				<div class='description'>

					<h1 class='attention-voice'><?=$detail['title']?></h1>
					<p class='calm-voice'><?=$description?></p>
					<a href='<?=$detail["link"]?>'>Go to exercise</a>

				</div>

			</container>

	</description>

<?php } else {?>

	<description2>

			<container>

				<div class='description'>

					<h1 class='attention-voice'>No project found!</h1>
					<p class='calm-voice'>Check out the list for more projects <a href='?page=projects2'>here</a></p>

				</div>

			</container>

	</description2>

<?php } ?>
