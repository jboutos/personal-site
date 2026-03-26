<div class='<?= $container ?>'>
	<?php if (!empty($imageSource)): ?>
		<div class='<?= $pictureContainer ?>'>
			<picture>
				<img src='<?= $imageSource ?>'>
			</picture>
		</div>
	<?php endif; ?>

	<div class='<?= $infoContainer ?>'>
		<?php if (!empty($headingContent)): ?>
			<h4 class='<?= $headingClass ?>'><?= $headingContent ?></h4>
		<?php endif; ?>
		<p class='<?= $paragraphClass ?>'><?= $paragraphContent ?></p>
		<?php if (!empty($linkContent)): ?>
			<a href='#' class='<?= $linkClass ?>'><?= $linkContent ?></a>
		<?php endif; ?>
	</div>
</div>