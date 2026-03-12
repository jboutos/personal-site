<?php if (isset($detail)) { ?>
    <?= component("project-detail", [...$detail, 'remarks' => $remarks]); ?>
<?php } else { ?>
    <?= component("project-not-found"); ?>
<?php } ?>