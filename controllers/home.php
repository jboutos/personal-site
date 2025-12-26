<?php

	function homePage() {

		$page = pageNameFromFunction(__FUNCTION__);
	   $data = getJsonData($page . 'data');

		return view('generic', [
		   'title' => 'My web-dev journey',
		   'data' => $data,
		   'component' => 'info-card'
	  ]);
	}

?>