<div class ='column'>
	
	<h1 class='attention-voice food'><?= $title ?></h1>
	<h2 class='careful-voice'><?= $subtitle ?></p>
	
	<ul>
		<?php
			foreach ($data as $food) {
				component("food-card", $food);
			}
		?>
	</ul>

	<h2 class='careful-voice foods'><?= $links ?></h2>

	<?php include('footer.php') ?>
	
</div>