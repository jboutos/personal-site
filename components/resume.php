<section class='resume-section'>

	<div class='main-section' id='main-content'>

		<section class='personal-info'>
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

</section>