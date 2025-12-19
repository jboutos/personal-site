<?php

	function homePage() {

	   $infos = getHomeData();

		return view('infos', [
		   'title' => 'My web-dev journey',
		   'infos' => $infos,
	  ]);
	}

?>