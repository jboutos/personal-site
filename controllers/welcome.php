<?php

	function welcomePage() {

		$page = pageNameFromFunction(__FUNCTION__);
		$data = getJsonData('pages/welcome');

		return view('welcome', [
		   'data' => $data,
	  ]);
	}

?>