<?php if (isset($detail)) { ?>
    <?= component("project-detail", $detail); ?>
<?php } else { ?>
    <?= component("project-not-found"); ?>
<?php } ?>