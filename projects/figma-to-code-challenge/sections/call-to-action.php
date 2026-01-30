<call-to-action class='<?= $section['variant'] ?>'>
  <inner-column>

    <?php if($section['variant'] === 'call-1'): ?>
      <p class='calm-voice'><?= $section['eyebrow'] ?></p>
      <h3 class='careful-voice'><?= $section['heading'] ?></h3>
      <a class='link' href='<?= $action['url'] ?>'>
        <span class='quote'><?= $action['text'] ?></span>
        <?php include('images/chevron-right.php'); ?>
      </a>
    <?php endif; ?>

    <?php if($section['variant'] === 'call-2'): ?>
      <p class='calm-voice'><?= $section['eyebrow'] ?></p>
      <h3 class='careful-voice'><?= $section['heading'] ?></h3>
      <div class='container'>
      <?php foreach ($section['actions'] as $action): ?>
        <a class='<?= $action['class'] ?>' href='<?= $action['url'] ?>'>
          <span class='<?= $action['class-2'] ?>'><?= $action['text'] ?></span>
          <?php include('images/chevron-right.php'); ?>
        </a>
      <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if($section['variant'] === 'call-3'): ?>
      <div class=''>
        <h3 class='careful-voice'><?= $section['heading'] ?></h3>
        <p class='calm-voice'><?= $section['eyebrow'] ?></p>
        <div class='container-3'>
          <div class='input-container'>
            <?php include('images/mail.php'); ?>
            <input type='email' placeholder='Email Address'>
          </div>
          <button type="submit" class="submit-btn"><?= $action['text'] ?></button>
        </div>
      </div>
      <picture>
        <img src='<?= $section['image'] ?>' alt=''>
      </picture>
    <?php endif; ?>

  </inner-column>
</call-to-action>