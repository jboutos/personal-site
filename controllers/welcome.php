<?php

	function welcomePage() {

		return view('welcome', [
		   'title' => 'Hello people!',
		   'description' => "I'm John and I'm trying to learn more about web development! I'm sort of introverted and have a difficult time finding anything to talk about regarding myself. Hopefully, given some time I will at very least be able to present myself through my work instead of words! In the meantime you can always check out my !",
		   'link' => 'substack',
		   'descriptioncompl' => '!',
		   'link2' => 'Introductory links',
	  ]);
	}

?>