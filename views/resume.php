<div class="column resume-view">
   <?php foreach ($data['sections'] as $section) { ?>
      <?= component($section['module'], $section) ?>
   <?php } ?>
</div>