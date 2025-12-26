<?php

	function welcomePage() {

		$page = pageNameFromFunction(__FUNCTION__);

		return view('generic', [
		   'title' => 'Hello people!',
		   'welcome' => true,
		   'description' => "I'm John and I'm trying to learn more about web development! I'm sort of introverted and have a difficult time finding anything to talk about regarding myself. Hopefully, given some time I will at very least be able to present myself through my work instead of words! In the meantime you can always check out my ",
		   'linkText' => 'substack',
		   'linkUrl' => 'https://substack.com/@mrmusicvibe?utm_source=user-menu',
		   'descriptionCompl' => '!',
		   'link2' => 'Introductory links',
		   'footer' => true
	  ]);
	}

?>