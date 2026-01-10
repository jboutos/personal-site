<?php

	function casePage() {

		$page = pageNameFromFunction(__FUNCTION__);
	   $data = getJsonData($page . 'data');

		return view($page, [
		   'data' => $data,
		   'component' => 'case-card'
	  ]);
	}

?>