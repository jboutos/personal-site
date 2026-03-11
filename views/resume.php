<resume>
	<inner-column>
		<section>
			<left-panel>

				<picture class='profile'>
					<img src='images/prof-pic2.jpg'>
				</picture>

				<qualifications>
					<h3 class='subtle-voice resume-heading'>CORE QUALIFICATIONS</h3>

					<ul class='resume-list'>

					<?php foreach ($data['qualifications'] as $quality) { ?>
						<li><?=$quality?></li>
					<?php } ?>

					</ul>
					
				</qualifications>

				<hr>

				<education>
					<h3 class='subtle-voice resume-heading'>EDUCATION</h3>
					<?php foreach ($data['education'] as $edu) { ?>
						<p class='calm-voice education'><?=$edu['school']?>
						<br><?=$edu['years']?></p>
					<?php } ?>
				</education>

			</left-panel>

			<right-panel>

				<personal-info>

					<h1 class='attention-voice'>IOANNIS BOUTOS</h1>

					<div class='contact'>
						<picture>
							<img src='images/phone.png'>
						</picture>
						<p class='calm-voice'>+306942930998</p>
					</div>

					<div class='contact'>
						<picture>
							<img src='images/email.png'>
						</picture>
						<p class='calm-voice'>jgbout89@gmail.com</p>
					</div>

					<div class='contact'>
						<picture>
							<img src='images/place.png'>
						</picture>
						<p class='calm-voice'>Olympou 47-49, Chalandri, Athens, Greece</p>
					</div>

				</personal-info>

				<?php
				$sections = ['WORK EXPERIENCE' => $data['experience'],'LANGUAGES' => $data['languages'],'HOBBIES' => $data['hobbies']];
				?>

				<experience>
				    <?php foreach ($sections as $title => $skills) { ?>
				        <?php require 'components/experience.php'; ?>
				    <?php } ?>
				</experience>

			</right-panel>
		</section>
	</inner-column>
<resume>