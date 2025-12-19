<?php

	function homepagePage() {

		return view('homepage', [
		   'title' => 'Portal',
		   'subtitle' => 'Booking sites',
		   'subtitle2' => 'Sports sites',
		   'subtitle3' => 'News sites',
		   'link' => 'Booking',
		   'link2' => 'Travala',
		   'link3' => 'Trivago',
		   'link4' => 'Hoopfellas',
		   'link5' => 'Amerikanos24',
		   'link6' => 'Gazzetta',
		   'link7' => 'Efsyn',
		   'link8' => 'Pronews',
	  ]);
	}

?>