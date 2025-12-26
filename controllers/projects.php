<?php

	function projectsPage() {

		$page = pageNameFromFunction(__FUNCTION__);
	   $data = getJsonData($page . 'data');

		return view('generic', [
		   'title' => 'A list of completed PE projects thus far',
		   'subtitle' => 'The list will be updated as more projects are added',
		   'data' => $data,
		   'component' => 'project-card'
	  ]);
	}

?>