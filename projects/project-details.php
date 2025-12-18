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



	h1.attention-voice {
		margin-top: 0;
	}

	container {
		display: flex;
		flex-direction: column;
		align-items: center;
		margin-top: 14em;

		@media (min-width: 850px) {
			flex-direction: row;
			align-items: flex-start;
			justify-content: center;
			gap: 2em;
		}
	}

	.description {
		display: flex;
		flex-direction: column;
		gap: 0.5em;
		@media (min-width: 850px) {
			display: flex;
			flex-direction: column;
			align-items: flex-start;
			gap: 0.5em;
		}
	}

	.attention-voice, .description a, .calm-voice {
		@media (min-width: 850px) {
			text-align: start;
			margin-left: 0;
		}
	}

	.description .attention-voice {
		margin-bottom: 0.5em;

		@media (max-width: 850px) {
			margin-top: 0.5em;
			padding-bottom: 0.2em;
		}
	}

	.details {
		max-width: 450px;
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

<?php if (isset($detail)) { ?>
	<?php component("project-detail", $detail); ?>
<?php } else { ?>
	<?php component("project-not-found"); ?>
<?php } ?>
