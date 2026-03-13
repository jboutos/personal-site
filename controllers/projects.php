<?php

	function projectsPage() {

		$page = pageNameFromFunction(__FUNCTION__);
	   $data = getJsonData($page);

		return view('projects', [
		   'data' => $data,
	  ]);
	}

?>