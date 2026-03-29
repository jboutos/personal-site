<?php 
   $href = !empty($directLink) ? $directLink : "?page=details&project={$key}";
?>
<a class='project-card' href='<?= $href ?>'>
   <project-card id='<?= $id ?>'>
      <picture class='image'>
         <img src='<?= "images/" . $image ?>' alt='<?= $title ?> image'>
      </picture>
      <h2 class='subtle-voice'><?= $title ?></h2>
      <span class='underline'>See more</span>
   </project-card>
</a>