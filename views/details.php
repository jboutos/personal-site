<?php if (!empty($detail)) { ?>
    <container>
        <div class='container-details'>
            <?php foreach ($detail['sections'] as $section) { ?>
                <?= component($section['module'], [...$section, 'title' => $detail['title']]) ?>
            <?php } ?>
        </div>
    </container>
<?php } else { ?>
    <?= component('project-not-found') ?>
<?php } ?>