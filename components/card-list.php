<section>
   <p class='calm-voice'><?= $heading ?></p>

   <nav aria-label='about me navigation'>
      <ul>
         <?php foreach ($cards as $card) : ?>
            <li>
               <?= component('info-card', $card) ?>
            </li>
         <?php endforeach; ?>
      </ul>
   </nav>
</section>