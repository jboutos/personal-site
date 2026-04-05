<h2 class='subtle-voice resume-heading'><?= $title ?></h2>

<?php foreach ($education as $edu) { ?>
	<p class='calm-voice education'><?=$edu['school']?>
	<br><?=$edu['years']?></p>
<?php } ?>