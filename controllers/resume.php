<?php

	function resumePage() {

		$page = pageNameFromFunction(__FUNCTION__);
	   $data = getJsonData($page . 'data');

		return view($page, [
		   'data' => $data,
		   'component' => 'experience'
	  ]);
	}

?>