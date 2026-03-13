<?php

	function projectsPage() {

		$page = pageNameFromFunction(__FUNCTION__);
	   $data = getJsonData('pages/projects');

		return view('projects', [
		   'data' => $data,
	  ]);
	}

?>