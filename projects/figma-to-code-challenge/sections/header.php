<?php
	$actions2 = $section['actions2'][0] ?? null;
	$actions3 = $section['actions3'][0] ?? null;
	$alt = $section['alt'][0] ?? null;
?>


<header class='<?= $section['variant'] ?>'>
	<inner-column>
		<nav>
			<ul>
				<li><a href='#'><?php include('images/logo-blue.php') ?></a></li>
			</ul>
		</nav>
		<nav class='hidden-small'>
			<ul class='center'>
				<?php foreach ($section['actions'] as $action): ?>
					<li><a href='#'><?= $action['text'] ?></a></li>
				<?php endforeach; ?>
			</ul>
		</nav>
		<nav class='hidden-small'>
			<ul>
				<li>
					<a class='language' href='#'>
						<?php if ($section['variant'] === 'header-1' || $section['variant'] === 'header-2'): ?>
						  <?php include($actions2['image']); ?>
						  <span><?= $actions2['text']; ?></span>
						<?php elseif ($section['variant'] === 'header-3'): ?>
						  <?= $actions2['text']; ?>
						<?php endif; ?>
					</a>
				</li>
				<li class='button'><a href='#'><?= $actions3['text'] ?></a></li>
			</ul>
		</nav>
		<nav class='hidden-large'>
			<ul>
				<li>
					<a href='#'>
						<?php include($alt['image']) ?>
					</a>
				</li>
			</ul>
		</nav>
	</inner-column>
</header>