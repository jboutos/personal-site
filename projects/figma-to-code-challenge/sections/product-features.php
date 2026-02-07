<?php
  $features = json_decode(file_get_contents(__DIR__ . '/../data/' . $section['source']), true);
?>


<product-feature class='<?= $section['variant'] ?>'>
  <inner-column>

    <?php if($section['variant'] === 'product-1'): ?>

      <div class='container-feature'>
        <h3 class='careful-voice'><?= $section['heading'] ?></h3>
        <p class='calm-voice'><?= $section['intro'] ?></p>
        <picture>
          <img src='<?= $section['image'] ?>' alt=''>
        </picture>
      </div>

      <div class='container-2'>

        <?php foreach ($features as $feature): ?>

          <div class='container-2-product'>
            <div class='mini-container'>
              <span class='enumeration'><?= $feature['enum']; ?></span>
            </div>
            <div class='mini-container'>
              <h4 class='significant-voice'><?= $feature['heading']; ?></h4>
              <p class='calm-voice'><?= $feature['content']; ?></p>
            </div>
          </div>

        <?php endforeach; ?>

      </div>

    <?php endif; ?>

    <?php if($section['variant'] === 'product-2'): ?>

      <h3 class='careful-voice'><?= $section['heading'] ?></h3>
      <p class='calm-voice'><?= $section['intro'] ?></p>

      <div class='container'>

        <?php foreach ($features as $feature): ?>

          <product>
            <span class='visual'><?php include($feature['image-1']) ?></span>
            <h4 class='significant-voice'><?= $feature['heading']; ?></h4>
            <p class='calm-voice'><?= $feature['content']; ?></p>
          </product>

        <?php endforeach; ?>

      </div>
    <?php endif; ?>

    <?php if($section['variant'] === 'product-3'): ?>

      <p class='calm-voice'><?= $section['eyebrow'] ?></p>
      <h3 class='careful-voice'><?= $section['heading'] ?></h3>
      <p class='calm-voice'><?= $section['intro'] ?></p>

      <div class='container'>

        <?php foreach ($features as $feature): ?>

          <product>
            <span class='visual'><?php include($feature['image-2']) ?></span>
            <h4 class='significant-voice'><?= $feature['heading']; ?></h4>
            <p class='calm-voice'><?= $feature['content']; ?></p>
          </product>

        <?php endforeach; ?>

      </div>

    <?php endif; ?>

  </inner-column>
</product-feature>