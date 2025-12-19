<?php
	$journal = json_decode(file_get_contents('journal.json'), true);

?>

<div class ='column'>

	<h1 class='attention-voice'><?= $title ?></h1>


	<ul>
	<?php foreach ($journal as $entry) { ?>
	  <li>
		  <h1 class=careful-voice><?= $entry['date'] ?></h1>
		  <p class='calm-voice'><?= $entry['observations'] ?></p>
	  </li>
	<?php } ?>
	</ul>

	<h2 class='careful-voice'><?= $links ?>s</h2>

	<?php include('footer.php') ?>

</div>