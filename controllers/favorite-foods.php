<?php

	function favoriteFoodsPage() {

	   $data = getJsonData('favoritefoodsdata');

		return view('favorite-foods', [
		   'title' => 'Favorite foods',
		   'subtitle' => 'Some of my favorite foods include:',
		   'data' => $data,
		   'links' => 'Introductory links',
	  ]);
	}

?>