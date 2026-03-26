<?php
$panels = [
   ['container' => 'contact', 'headingClass' => '', 
   'linkClass' => '', 'headingContent' => '', 'links' => ['Contact', 'Corporate responsibility', 'Informant system', 'Travel retail']
   ],
   ['container' => 'legal', 'headingClass' => '', 
   'linkClass' => '', 'headingContent' => '', 'links' => ['Imprint', 'Declaration of Accessibility', 'Privacy', 'Terms of use', 'Code of conduct']
   ]
];
?>

<footer-3 class='wrapper'>
	<inner-column>
		<div class='hyper-container'>
			<div class='mega-container'>
				<div class='container'>
					<?php foreach($panels as $panel):
						extract($panel); include('components/info-links.php');
					endforeach; ?>
				</div>
				<div class='button'>
					<select class='wise-voice' placeholder='International (English)'>
						<option value="">International (English)</option>
						<option value="french">French</option>
						<option value="german">German</option>
					</select>
					<?php include('images/chevron.svg') ?>
				</div>
			</div>
			<div class='footer'>
				<h5 class='mini-voice'>© Copyright</h5>
			</div>
		</div>
	</inner-column>
</footer-3>
