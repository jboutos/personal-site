<?php

	function contactPage() {

		$page = pageNameFromFunction(__FUNCTION__);

		return view($page, [
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