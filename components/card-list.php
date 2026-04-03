<section>
   <h2 class='careful-voice'><?= $heading ?></h2>

   <ul>
      <?php foreach ($cards as $card) : ?>
         <li>
            <?= component('info-card', $card) ?>
         </li>
      <?php endforeach; ?>
   </ul>
</section>