<div class='<?= $container ?>'>
	<?php if (!empty($headingContent)): ?>
		<h3 class='<?= $headingClass ?>'><?= $headingContent ?></h3>
	<?php endif; ?>
	<?php foreach ($links as $link): ?>
		<a href='#' class='<?= $linkClass ?>'><?= $link ?></a>
	<?php endforeach; ?>
</div>