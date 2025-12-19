<?php
	$description = "In " . strtolower($title) . " " . $description;
?>

<description>

	<container>

		<picture class='details'>
			<img src='<?= $image ?>' alt='<?= $title ?> image'>
		</picture>

		<div class='description'>
			<h1 class='attention-voice'><?= $title ?></h1>
			<p class='calm-voice'><?= $description ?></p>
			<a href='<?= $link ?>' target='<?= $target ?>'>Go to exercise</a>
		</div>

	</container>
	
</description>