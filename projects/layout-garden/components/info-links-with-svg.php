<div class='<?= $container ?>'>
	<a href='#' class='<?= $linkClass ?>'>
		<picture>
			<?php include($svgPath) ?>
		</picture>
		<?php if (!empty($spanContent)): ?>
			<span class='<?= $spanClass ?>'><?= $spanContent ?></span>
		<?php endif; ?>
	</a>
</div>