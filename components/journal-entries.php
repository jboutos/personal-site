<?php foreach ($journal as $entry) { ?>
   <article>
       <h2 class='careful-voice'><?= $entry['date'] ?></h2>
       <p class='calm-voice'><?= $entry['observations'] ?></p>
   </article>
<?php } ?>