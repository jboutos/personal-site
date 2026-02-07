<?php

  $items = json_decode(file_get_contents(__DIR__ . '/../data/' . $section['source']), true);
  $item = $items[0] ?? null; 
  
?>

<testimonial class='<?= $section['variant'] ?>'>
  <inner-column>

    <h3 class='careful-voice'><?= $section['heading'] ?></h3>
    <p class="calm-voice"><?= $section['intro'] ?></p>

    <?php if($section['variant'] === 'testimonial-1'): ?>

      <div class='container-testimonial'>
        <?php foreach ($items as $item): ?>
          <div class='review'>
            <?php
              for ($i = 0; $i < 5; $i++) {
                include($item['image']);
              }
            ?>
            <p class='calm-voice testimonial'><?= $item['quote'] ?></p>

            <?php include($item['avatar']) ?>
            <h5 class='miniscule-voice'><?= $item['source'] ?></h5>
          </div>
        <?php endforeach; ?>
      </div>

    <?php endif; ?>

    <?php if($section['variant'] === 'testimonial-2'): ?>

      <testimonial>
        <p class='careful-voice-thin'><?= $item['quote'] ?></p>
        <div class='user'>
          <?php include($item['avatar']) ?>
          <div class='user-info'>
            <h4 class='significant-voice'><?= $item['source'] ?></h4>
            <p class='calm-voice'><?= $item['job'] ?></p>
          </div>
        </div>
      </testimonial>

    <?php endif; ?>

    <?php if($section['variant'] === 'testimonial-3'): ?>

      <testimonial>
        <div class=''>
          <picture>
            <img src='<?= $item['imageLarge'] ?>' alt=''>
          </picture>
        </div>
        <div class=''>
          <p class='lesser-voice'><?= $item['quote'] ?></p>
          <div class='user-info'>
            <h4 class='significant-voice'><?= $item['source'] ?></h4>
            <p class='calm-voice'><?= $item['job'] ?></p>
          </div>
        </div>
      </testimonial>

    <?php endif; ?>

  </inner-column>
</testimonial>