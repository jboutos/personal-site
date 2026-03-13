<?php foreach ($goals as $proximity) { ?>
   <h2 class="careful-voice"><?= $proximity['title'] ?></h2>
   <ul class="goals">
       <?php foreach ($proximity['goals'] as $goal) { ?>
           <li><?= $goal ?></li>
       <?php } ?>
   </ul>
<?php } ?>