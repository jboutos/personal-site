<?php

	function error404Page() {

		$page = pageNameFromFunction(__FUNCTION__);
		$data = getJsonData('pages/error404');

		return view($page, [
		   'data' => $data
	  ]);
	}

?>