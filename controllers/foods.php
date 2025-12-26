<?php

	function foodsPage() {

		$page = pageNameFromFunction(__FUNCTION__);
	   $data = getJsonData($page . 'data');

		return view('generic', [
		   'title' => 'Favorite foods',
		   'subtitle' => 'Some of my favorite foods include:',
		   'data' => $data,
		   'links' => 'Introductory links',
		   'component' => 'food-card',
		   'footer' => true
	  ]);
	}

?>