<?php

	function welcomePage() {

		$page = pageNameFromFunction(__FUNCTION__);
		$data = getJsonData($page);

		return view('welcome', [
		   'data' => $data,
	  ]);
	}

?>