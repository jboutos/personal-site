<div class='column'>

  <h1 class='attention-voice'><?= $title ?></h1>

  <ul>
      <?php
          foreach ($infos as $info) {
              component("info-card", $info);
          }
      ?>
  </ul>

</div>