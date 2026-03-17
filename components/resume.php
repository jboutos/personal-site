<section>
	<left-panel>

		<picture class='profile'>
			<img src='<?= $profPic ?>'>
		</picture>

		<qualifications>
			<h3 class='subtle-voice resume-heading'><?= $qualificationsTitle ?></h3>

			<ul class='resume-list'>

			<?php foreach ($qualifications as $quality) { ?>
				<li><?=$quality?></li>
			<?php } ?>

			</ul>
			
		</qualifications>

		<hr>

		<education>
			<h3 class='subtle-voice resume-heading'><?= $educationTitle ?></h3>

			<?php foreach ($education as $edu) { ?>
				<p class='calm-voice education'><?=$edu['school']?>
				<br><?=$edu['years']?></p>
			<?php } ?>
		</education>

	</left-panel>

	<right-panel>

		<personal-info>

			<h1 class='attention-voice'><?= $name ?></h1>

			<?php foreach ($personalInfo as $group) { ?>
		      <?= component($group['module'], $group) ?>
		   <?php } ?>

		</personal-info>

		<experience>
		   <?php foreach ($experience as $group) { ?>
		      <?= component($group['module'], $group) ?>
		   <?php } ?>
		</experience>

	</right-panel>
</section>