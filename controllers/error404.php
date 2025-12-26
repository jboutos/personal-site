<?php

	function error404Page() {

		$page = pageNameFromFunction(__FUNCTION__);

		return view($page, [
		   'title' => 'Error 404',
		   'subtitle' => 'Page not found!',
		   'link' => 'Go back',
	  ]);
	}

?>