<?php
$panels = [
   ['container' => 'choices', 'headingClass' => 'wise-voice', 
   'linkClass' => 'info', 'headingContent' => 'Choices', 'links' => ['Company', 'Services', 'Customers', 'Contact']
   ],
   ['container' => 'services', 'headingClass' => 'wise-voice', 
   'linkClass' => 'info', 'headingContent' => 'Services', 'links' => ['Something', 'Something', 'Something', 'Something']
   ]
];

$workItems = [
	['image' => 'images/square.png', 'container' => ''],
	['image' => 'images/square.png', 'container' => ''],
	['image' => 'images/square.png', 'container' => ''],
	['image' => 'images/square.png', 'container' => ''],
	['image' => 'images/square.png', 'container' => ''],
	['image' => 'images/square.png', 'container' => ''],
	['image' => 'images/square.png', 'container' => ''],
	['image' => 'images/square.png', 'container' => ''],
	['image' => 'images/square.png', 'container' => '']
];

$socialItems = [
	['image' => 'images/square.png', 'container' => ''],
	['image' => 'images/square.png', 'container' => '']
];
?>

<footer-1 class='wrapper'>
	<inner-column>
		<div class='container-2'>
			<div class='contact'>
				<h3 class='wise-voice'>Contact</h3>
				<p class='calm-voice'>address line 1<br>address line 2</p>
				<p class='calm-voice'>e-mail</p>
				<p class='calm-voice'>phone</p>
				<div class='socials'>
					<?php foreach($socialItems as $socialItem):
						extract($socialItem); include('components/square-image.php');
					endforeach; ?>
				</div>
			</div>
			<?php foreach($panels as $panel):
				extract($panel); include('components/info-links.php');
			endforeach; ?>
			<div class='our-work'>
				<h3 class='wise-voice'>Our work</h3>
				<div class='container'>
					<?php foreach($workItems as $workItem):
						extract($workItem); include('components/square-image.php');
					endforeach; ?>
				</div>
			</div>
		</div>
	</inner-column>
</footer-1>