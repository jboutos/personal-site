<?php

	function homePage() {

	   $data = getJsonData('homedata');

		return view('home', [
		   'title' => 'My web-dev journey',
		   'data' => $data,
	  ]);
	}

?>