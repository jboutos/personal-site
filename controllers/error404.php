<?php

	function error404Page() {

		return view('error404', [
		   'title' => 'Error 404',
		   'subtitle' => 'Page not found!',
		   'link' => 'Go back',
	  ]);
	}

?>