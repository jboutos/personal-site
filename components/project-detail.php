<description>

	<container>

		<div class='container-details'>

			<div class='image-description'>
				<picture class='details-image'>
					<img src='<?= $image ?>' alt='<?= $title ?> image'>
				</picture>

				<div class='description'>
					<h1 class='attention-voice'><?= $title ?></h1>
					<p class='calm-voice'><?= $description ?></p>
					<a href='<?= $link ?>' target='<?= $target ?>'>Go to exercise</a>
					<?php if (!empty($caseStudyLink)) : ?>
		             <a href='<?= $caseStudyLink ?>' target='<?= $target ?>'>Go to case study</a>
		         <?php endif; ?>
				</div>
			</div>

			<div class='remarks'>
				<?php if (!empty($remarksOnExercise)) : ?>
					<h2 class='attention-voice remarks-title'>Remarks</h2>
					<div class='remarks-content'>
		            <p class='calm-voice'><?= $remarks['parOne'] ?></p>
		            <p class='calm-voice'><?= $remarks['parTwo'] ?></p>
		            <div class='remarks-img'>
			            <picture>
			            	<img src='<?= $remarks['pictureOne'] ?>' alt=''>
			            </picture>
			            <picture>
			            	<img src='<?= $remarks['pictureTwo'] ?>' alt=''>
			            </picture>
		          	</div>
		            <p class='calm-voice'><?= $remarks['parThree'] ?></p>
	         	</div>
	         <?php endif; ?>
			</div>
		</div>

	</container>
	
</description>