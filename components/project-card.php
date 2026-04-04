<nav aria-label='my projects navigation'>
   <ul>
      <?php foreach ($cards as $card) : ?>
         <li>
            <?= component('project-card-solo', $card) ?>
         </li>
      <?php endforeach; ?>
   </ul>
</nav>

