<hero class='<?= $section['variant'] ?>'>
  <inner-column>

    <h1 class='loud-voice'><?= $section['heading'] ?></h1>
    <p class='calm-voice'><?= $section['intro'] ?></p>

    <?php if($section['variant'] === 'hero-1'): ?>
      <div class='container-hero'>
        <?php foreach ($section['actions'] as $action): ?>
          <a class='' href='<?= $action['url'] ?>'>
            <?= $action['text'] ?>
          </a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if($section['variant'] === 'hero-2'): ?>
      <div class='container-hero2'>
        <?php foreach ($section['actions'] as $action): ?>
          <a class='' href='<?= $action['url'] ?>'>
            <?= $action['text'] ?>
          </a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if($section['variant'] === 'hero-3'): ?>
      <div class='container-3'>
        <div class='input-container'>
          <?php include('images/mail.php'); ?>
          <input type='email' placeholder='Email Address'>
        </div>
        <button type="submit" class="submit-btn"><?= $action['text'] ?></button>
      </div>
    <?php endif; ?>

  </inner-column>
</hero>