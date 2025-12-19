<div class='column'>

  <h1 class='attention-voice'><?= $title ?></h1>

  <ul>
      <?php
          foreach ($data as $info) {
              component("info-card", $info);
          }
      ?>
  </ul>

</div>