<div class='column'>

	<h1 class='attention-voice'><?= $title ?></h1>
	<h2 class='careful-voice'><?= $subtitle1 ?></h2>

	<ul class='goals'>

		<?php foreach ($data['short_term_goals']['items'] as $goal) { ?>
	      <li><?= $goal ?></li>
	    <?php } ?>

	</ul>

	<h2 class='careful-voice'><?= $subtitle2 ?></h2>

	<ul class='goals'>

		<?php foreach ($data['long_term_goals']['items'] as $goal) { ?>
	      <li><?= $goal ?></li>
	    <?php } ?>

	</ul>

</div>