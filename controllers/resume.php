<?php

	function resumePage() {

		$page = pageNameFromFunction(__FUNCTION__);
	   $data = getJsonData('pages/resume');

		return view($page, [
		   'data' => $data,
	   ]);
	}

?>