<section>
	<left-panel>

		<picture class='profile'>
			<img src='<?= "images/" . $profPic ?>'>
		</picture>

		<qualifications>
			<?php foreach ($qualifications as $group) { ?>
		      <?= component($group['module'], $group) ?>
		   <?php } ?>
			
		</qualifications>

		<hr>

		<education>
			<?php foreach ($education as $group) { ?>
		      <?= component($group['module'], $group) ?>
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