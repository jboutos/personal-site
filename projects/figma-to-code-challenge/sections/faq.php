<?php

	$data = json_decode(file_get_contents(__DIR__ . '/../data/' . $section['source']), true);

?>

<faq class='<?= $section['variant'] ?>'>
	<inner-column>
		<?php if($section['variant'] === 'faq-1'): ?>
			<h3 class='careful-voice'><?= $section['heading'] ?></h3>
			<p class='calm-voice'><?= $section['intro'] ?></p>

			<div class='faq'>
				<?php foreach ($data as $item): ?>
					<details>
						<summary class='significant-voice'><?= $item['question'] ?><span class="chevron"><?php include($item['icon']); ?></span></summary>

						<p class="calm-voice"><?= $item['answer'] ?></p>
					</details>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<?php if($section['variant'] === 'faq-2'): ?>
			<h3 class='careful-voice'><?= $section['heading'] ?></h3>
			<p class='calm-voice'><?= $section['intro'] ?></p>

			<div class='faq'>
				<?php foreach ($data as $item): ?>
					<details>
						<summary class='significant-voice summary'><span class="chevron"><?php include($item['icon-2']); ?></span><?= $item['question'] ?></summary>

						<p class="calm-voice"><?= $item['answer'] ?></p>
					</details>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<?php if($section['variant'] === 'faq-3'): ?>
			<div class='faq-info'>
				<h3 class='careful-voice'><?= $section['heading'] ?></h3>
				<p class='calm-voice'><?= $section['intro'] ?></p>
			</div>

			<div class='faq'>
				<?php foreach ($data as $item): ?>
					<details>
						<summary class='significant-voice'><?= $item['question'] ?><span class="chevron"><?php include($item['icon']); ?></span></summary>

						<p class="calm-voice"><?= $item['answer'] ?></p>
					</details>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
		
	</inner-column>
</faq>