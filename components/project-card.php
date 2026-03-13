<ul>
   <?php foreach ($cards as $card) : ?>
      <li>
         <?php 
            $href = !empty($card['directLink']) ? $card['directLink'] : "?page=details&project={$card['key']}";
         ?>
         <project-card id='<?= $card['id'] ?>'>
            <picture class='image'>
               <a href='<?= $href ?>'>
                  <img src='<?= $card['image'] ?>' alt='<?= $card['title'] ?> image'>
               </a>
            </picture>
            <h2 class='subtle-voice'><?= $card['title'] ?></h2>
            <a class='underline' href='<?= $href ?>'>See more</a>
         </project-card>
      </li>
   <?php endforeach; ?>
</ul>

