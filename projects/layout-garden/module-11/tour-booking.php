<?php 

	$cards = [
		["container" => "card", "backgroundClass" => "background", "priceContainer" => "bottom-right", "spanClass" => "miniscule-voice",
		"priceContent" => "From", "priceContainer2" => "bottom-right-2", "priceContent2" => "£60", "pictureContainer" => "container-1",
		"pictureContainerClass" => "picture", "imageSource" => "//peprojects.dev/images/square.jpg", "infoContainer" => "container-2",
		"headingContentClass" => "wise-voice", "headingContent" => "Heading level 3", "paragraphClass" => "calm-voice", "paragraphContent" => "This is a short paragraph", "calendarContainer" => "calendar date-info", "paragraphClass2" => "lesser-voice", "paragraphContent2" => "This is a date",
		"paragraphClass3" => "lesser-voice extra-info", "paragraphContent3" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...", "bookContainer" => "book",
		"bookContainer2" => "book-2", "durationContainer" => "calendar duration-info", "paragraphClass4" => "duration lesser-voice", "paragraphContent4" =>
		"Duration of event", "paragraphClass5" => "hidden lesser-voice", "paragraphContent5" => "From", "spanClass2" => "bold", "spanContent2" => "£60",
		"linkClass" => "hidden-2", "linkContent" => "BOOK NOW", "linkClass2" => "hidden-3", "linkContent2" => "BOOK NOW"
		],
		["container" => "card", "backgroundClass" => "background-2", "priceContainer" => "bottom-right", "spanClass" => "miniscule-voice",
		"priceContent" => "From", "priceContainer2" => "bottom-right-2", "priceContent2" => "£110", "pictureContainer" => "container-1",
		"pictureContainerClass" => "picture", "imageSource" => "//peprojects.dev/images/square.jpg", "infoContainer" => "container-2",
		"headingContentClass" => "wise-voice", "headingContent" => "Heading level 3", "paragraphClass" => "calm-voice", "paragraphContent" => "This is a short paragraph", "calendarContainer" => "calendar date-info", "paragraphClass2" => "lesser-voice", "paragraphContent2" => "This is a date",
		"paragraphClass3" => "lesser-voice extra-info", "paragraphContent3" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...", "bookContainer" => "book",
		"bookContainer2" => "book-2", "durationContainer" => "calendar duration-info", "paragraphClass4" => "duration lesser-voice", "paragraphContent4" =>
		"Duration of event", "paragraphClass5" => "hidden lesser-voice", "paragraphContent5" => "From", "spanClass2" => "bold", "spanContent2" => "£110",
		"linkClass" => "hidden-2", "linkContent" => "BOOK NOW", "linkClass2" => "hidden-3", "linkContent2" => "BOOK NOW"
		]
	];

?>

<tour-booking class='wrapper'>
	<inner-column>
		<h4 class=wise-voice>Tours</h4>
		<h1 class='loud-voice'>Heading level 1</h1>
		<p class='calm-voice introductory'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur.</p>
		<p class='calm-voice introductory-2'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor.</p>
		<h4 class='wise-voice'>Visit</h4>
		<h1 class='loud-voice'>Book a Tour</h1>
		<p class='calm-voice introductory-3'>Tours will load below. Please wait one moment for them to load, if they do not, refresh the page.</p>
		<?php foreach($cards as $card):
			extract($card); include('components/booking-card.php');
		endforeach; ?>
	</inner-column>
</tour-booking>