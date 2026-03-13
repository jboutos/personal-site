<div class="column">
	<?php foreach ($data['sections'] as $section) { ?>
        <?= component($section['module'], [...$section, 'journal' => $journal]) ?>
    <?php } ?>
</div>