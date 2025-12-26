<div class='column'>

	<h1 class='attention-voice'><?= $title ?></h1>

	<h2 class='careful-voice'><?= $subtitle ?></h2>

	<ul>
	<?php foreach ($data as $project) { ?>
		<li class='projects'>
			<?php	component("project-card", $project); ?>
		</li>
	<?php } ?>
	</ul>

</div>