<ul>
   <?php foreach ($cards as $card) : ?>
      <li>
         <?= component('project-card-solo', $card) ?>
      </li>
   <?php endforeach; ?>
</ul>

