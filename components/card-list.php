<ul>
   <?php foreach ($cards as $card) : ?>
      <li>
         <?= component('info-card', $card) ?>
      </li>
   <?php endforeach; ?>
</ul>