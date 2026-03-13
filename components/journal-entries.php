<ul>
   <?php foreach ($journal as $entry) { ?>
       <li>
           <h2 class="careful-voice"><?= $entry['date'] ?></h2>
           <p class="calm-voice"><?= $entry['observations'] ?></p>
       </li>
   <?php } ?>
</ul>