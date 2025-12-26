<div class="column">

  <h1 class="attention-voice"><?= $title ?></h1>

	  <?php foreach ($data as $proximity) { ?>

	    <h2 class="careful-voice"><?= $proximity['title'] ?></h2>

	    <ul class="goals">
	      <?php foreach ($proximity['goals'] as $goal) { ?>
	        <li><?= $goal ?></li>
	      <?php } ?>
	    </ul>

	  <?php } ?>

</div>