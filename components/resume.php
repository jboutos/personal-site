<section class='resume-section'>
	<aside>

		<picture class='profile'>
			<img src='<?= "images/" . $profPic ?>' alt='<?= $alt ?>'>
		</picture>

		<section class='qualifications'>
			<?php foreach ($qualifications as $group) { ?>
		      <?= component($group['module'], $group) ?>
		   <?php } ?>
		</section>

		<hr>

		<section class='education'>
			<?php foreach ($education as $group) { ?>
		      <?= component($group['module'], $group) ?>
		   <?php } ?>
		</section>

	</aside>

	<div class='main-section'>

		<section class='persona-info'>
			<h1 class='attention-voice'><?= $name ?></h1>
			<?php foreach ($personalInfo as $group) { ?>
		      <?= component($group['module'], $group) ?>
		   <?php } ?>
		</section>

		<section class='experience'>
		   <?php foreach ($experience as $group) { ?>
		      <?= component($group['module'], $group) ?>
		   <?php } ?>
		</section>

	</div>
</section>