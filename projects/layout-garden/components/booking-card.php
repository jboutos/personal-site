<div class='<?= $container ?>'>
	<div class='<?= $backgroundClass ?>'>
		<div class="<?= $priceContainer ?>"><span class='<?= $spanClass ?>'><?= $priceContent ?></span></div>
		<div class="<?= $priceContainer2 ?>"><?= $priceContent2 ?></div>
	</div>
	<div class='<?= $pictureContainer ?>'>
		<picture class='<?= $pictureContainerClass ?>'>
			<img src='<?= $imageSource ?>'>
		</picture>
	</div>
	<div class='<?= $infoContainer ?>'>
		<h4 class='<?= $headingContentClass ?>'><?= $headingContent ?></h4>
		<p class='<?= $paragraphClass ?>'><?= $paragraphContent ?></p>
		<hr>
		<div class='<?= $calendarContainer ?>'>
			<picture>
				<?php include('images/calendar.svg'); ?>
			</picture>
			<p class='<?= $paragraphClass2 ?>'><?= $paragraphContent2 ?></p>
		</div>
		<p class='<?= $paragraphClass3 ?>'><?= $paragraphContent3 ?></p>
		<div class='<?= $bookContainer ?>'>
			<div class='<?= $bookContainer2 ?>'>
				<div class='<?= $durationContainer ?>'>
					<picture>
						<?php include('images/clock-2.svg'); ?>
					</picture>
					<p class='<?= $paragraphClass4 ?>'><?= $paragraphContent4 ?></p>
					<p class='<?= $paragraphClass5 ?>'><?= $paragraphContent5 ?> <span class='<?= $spanClass2 ?>'><?= $spanContent2 ?></span></p>
				</div>
			</div>
			<a class='<?= $linkClass ?>' href='#'><?= $linkContent ?></a>
		</div>
	</div>
	<a class ='<?= $linkClass2 ?>' href='#'><?= $linkContent2 ?></a>
</div>