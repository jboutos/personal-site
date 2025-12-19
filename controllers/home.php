<?php

	function homePage() {

	   $data = getHomeData();

		return view('home', [
		   'title' => 'My web-dev journey',
		   'data' => $data,
	  ]);
	}

?>