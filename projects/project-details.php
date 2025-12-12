<style>

	body {
		--color: hsl(240 100% 40.2%);
		--charged: hsl(0 67.9% 41.6%);
		--base: hsl(188 45.3% 81.4%);
		--hover: hsl(180, 92%, 40%);
		--circle: hsl(240 100% 40.2% / 0.4);
	}

	@media (prefers-color-scheme: dark) {
		body {
			--color: hsl(188 45.3% 81.4%);
			--charged: hsl(0 67.9% 60.6%);
			--base: hsl(240 100% 40.2%);
			--hover: hsl(180, 92%, 20%);
			--circle: hsl(188 45.3% 81.4% / 0.4);
		}
	}
	
	body {
		background-color: var(--base);
	}

	h1 {
		margin-top: 80px;
		padding-top: 0;
		color: var(--charged);
	}

	p, a, h2, li::marker {
		color: var(--color);
		max-width: 50ch;
	}

	.circle {
		color: var(--circle);
		fill: var(--circle);
	}

	a:hover {
		background-color: var(--hover);
	}

	container {
		@media (max-width: 645px) {
			display: flex;
			flex-direction: column;
		}
		display: flex;
		align-items: start;
		justify-content: center;
		gap: 2em;
		margin-top: 14em;
	}

	.description {
		display: flex;
		flex-direction: column;
		align-items: flex-start;
		gap: 0.3em;
	}

	.calm-voice {
		text-align: left;
	}

	h1.attention-voice {
		margin-top: 0;
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
					<a href='<?=$detail["link"]?>' target='<?=$detail["target"]?>'>Go to exercise</a>

				</div>

			</container>

	</description>

<?php } else {?>

	<description2>

			<container>

				<div class='description'>

					<h1 class='attention-voice'>No project found!</h1>
					<p class='calm-voice'>Check out the list for more projects <a href='?page=projects'>here</a></p>

				</div>

			</container>

	</description2>

<?php } ?>
