<?php
include('data/card-data.php');

foreach ($cards as $card) {
	$title = $card['title'];
	$info = $card['info'];
	$link = $card['link'];
?>

<info-card>
	<h2 class='subtle-voice'><?=$title?></h2>
	<p class='calm-voice'><?=$info?></p>
	<a href='#'><?=$link?></a>
</info-card>

<?php } ?>

	