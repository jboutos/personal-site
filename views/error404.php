<?php foreach ($data['sections'] as $section) { ?>
    <?= component($section['module'], $section) ?>
<?php } ?>