<?php

	function foodsPage() {

	   $data = getJsonData('favoritefoodsdata');

		return view('foods', [
		   'title' => 'Favorite foods',
		   'subtitle' => 'Some of my favorite foods include:',
		   'data' => $data,
		   'links' => 'Introductory links',
	  ]);
	}

?>