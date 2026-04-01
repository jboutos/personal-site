<?php 
   $href = !empty($directLink) ? $directLink : "?page=details&project={$key}";
?>
<a class='project-card' aria-labelledby='card-title-<?= $id ?>' href='<?= $href ?>'>
   <article id='<?= $id ?>'>
      <picture class='image'>
         <img src='<?= "images/" . $image ?>' alt='<?= $title ?> image'>
      </picture>
      <h2 id='card-title-<?= $id ?>' class='subtle-voice'><?= $title ?></h2>
      <span class='underline'>See more</span>
   </article>
</a>