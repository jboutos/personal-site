<?php

	function contactPage() {

		return view('contact', [
		   'title' => 'Contact information',
		   'subtitle' => 'You can contact me at jgbout@yahoo.com',
		   'subtitle2' => 'Alternatively you can drop a message below (be kind)',
		   'name' => 'Name',
		   'name' => 'Name',
		   'label' => '(Any subject but shoelaces)',
		   'button' => 'Send message',
		   'links' => 'Introductory links',
	  ]);
	}

?>