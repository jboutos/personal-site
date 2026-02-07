<?php $actions = $section['actions'][0] ?? null; ?>

<video-spotlight class='<?= $section['variant'] ?>'>
	<inner-column>

		<?php if($section['variant'] === 'video-1'): ?>

			<p class='calm-voice'><?= $section['eyebrow'] ?></p>
			<h2 class='attention-voice'><?= $section['heading'] ?></h2>
			<p class='calm-voice'><?= $section['intro'] ?></p>
			<picture>
				<img src='<?= $section['image'] ?>' alt=''>
			</picture>

		<?php endif; ?>

		<?php if($section['variant'] === 'video-2'): ?>

			<span class='visual'><?php include($section['visual']) ?></span>
			<p class='calm-voice'><?= $section['eyebrow'] ?></p>
			<h2 class='attention-voice'><?= $section['heading'] ?></h2>
			<p class='calm-voice'><?= $section['intro'] ?></p>
			<a class='link' href='#'>
				<span><?= $actions['text'] ?></span>
				<?php include($actions['icon']) ?>
			</a>

		<?php endif; ?>

		<?php if($section['variant'] === 'video-3'): ?>

			<p class='calm-voice'><?= $section['eyebrow'] ?></p>
			<h3 class='careful-voice'><?= $section['heading'] ?></h3>
			<div class='container-video'>
				<?php foreach ($section['blurbs'] as $blurb): ?>
					<div class="">
						<h4 class='significant-voice'><?= $blurb['heading'] ?></h4>
						<p class="calm-voice"><?= $blurb['content'] ?></p>
					</div>
				<?php endforeach; ?>
			</div>
			<div class='video-link'>
				<a href='#'><?= $actions['text'] ?></a>
				<?php include($actions['image']); ?>
			</div>

		<?php endif; ?>

	</inner-column>
</video-spotlight>