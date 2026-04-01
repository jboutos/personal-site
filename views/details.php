<?php if (!empty($detail)) { ?>
    <section class='projects-section'>
        <div class='container-details'>
            <?php foreach ($detail['sections'] as $section) { ?>
                <?= component($section['module'], $section) ?>
            <?php } ?>
        </div>
    </section>
<?php } else { ?>
    <?= component('project-not-found') ?>
<?php } ?>