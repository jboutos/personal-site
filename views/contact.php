<div class ='column'>
	<?php foreach ($data['sections'] as $section) { ?>
        <?= component($section['module'], [...$section, 'reply' => $reply, 'name' => $name, 'email' => $email, 'message' => $message]) ?>
    <?php } ?>
</div>