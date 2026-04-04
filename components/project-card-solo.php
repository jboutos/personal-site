<?php 
   $href = !empty($directLink) ? $directLink : "?page=details&project={$key}";
?>
<article id=''>
   <a class='project-card' href='<?= $href ?>' aria-label='<?= $aria ?>'>
      <picture class='image'>
         <img src='<?= "images/" . $image ?>' alt=''>
      </picture>
      <h2 aria-hidden='true' id='card-title-<?= $id ?>' class='subtle-voice'><?= $title ?></h2>
      <span class='underline'><?= $spanContent ?></span>
   </a>
</article>