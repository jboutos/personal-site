<?php 
   $href = !empty($directLink) ? $directLink : "?page=details&project={$key}";
?>
<project-card id='<?= $id ?>'>
   <picture class='image'>
      <a href='<?= $href ?>'>
         <img src='<?= "images/" . $image ?>' alt='<?= $title ?> image'>
      </a>
   </picture>
   <h2 class='subtle-voice'><?= $title ?></h2>
   <a class='underline' href='<?= $href ?>'>See more</a>
</project-card>