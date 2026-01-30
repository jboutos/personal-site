<footer class='<?= $section['variant'] ?>'>
	<inner-column>
		<div class='upper-footer'>

			<div class='container-2'>
				<h4 class='significant-voice'><?= $section['heading-1'] ?></h4>
				<nav>
					<ul>
						<?php foreach ($section['actions'] as $action): ?>
						<li><a href=''><?= $action['text'] ?></a></li>
						<?php endforeach; ?>
					</ul>
				</nav>
			</div>

			<div class='container-2'>
				<h4 class='significant-voice'><?= $section['heading-2'] ?></h4>
				<nav>
					<ul>
						<?php foreach ($section['actions2'] as $action2): ?>
						<li><a href=''><?= $action2['text'] ?></a></li>
						<?php endforeach; ?>
					</ul>
				</nav>
			</div>

			<div class='container-2'>
				<h4 class='significant-voice'><?= $section['heading-3'] ?></h4>
				<nav>
					<ul>
						<?php foreach ($section['actions3'] as $action3): ?>
						<li><a href=''><?= $action3['text'] ?></a></li>
						<?php endforeach; ?>
					</ul>
				</nav>
			</div>

			<div class='container-2'>
				<div class='subscribe'>
					<h4 class='significant-voice'><?= $section['heading-4'] ?></h4>
					<div class="subscribe-container">
					   <input type="email" placeholder="Email address" aria-label="Sign-up" />
					   <button type="submit" class="submit-btn"><?php include($section['icon']); ?></button>
					</div>
					<p class='calm-voice'><?= $section['intro'] ?></p>
				</div>
			</div>

		</div>
		<div class='lower-footer'>
			<a href='#'>
				<?php include($section['logo']); ?>
			</a>
			<nav>
				<ul class='terms'>
					<?php foreach ($section['actions4'] as $action4): ?>
					<li><a href='#'><?= $action4['text'] ?></a></li>
					<?php endforeach; ?>
				</ul>
			</nav>
			<div class='socials'>
				<a href='#'><?php include($section['social-1']); ?></a>
				<a href='#'><?php include($section['social-2']); ?></a>
				<a href='#'><?php include($section['social-3']); ?></a>
			</div>
		</div>
	</inner-column>
</footer>