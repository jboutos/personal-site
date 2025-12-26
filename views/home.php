<div class='column'>

  <h1 class='attention-voice'><?= $title ?></h1>

  <ul>
      <?php foreach ($data as $info) { ?>
          <li>
             <?php component("info-card", $info); ?>
          </li> 
      <?php } ?>
  </ul>

</div>