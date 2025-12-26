<?php

	function projectsPage() {

	   $data = getJsonData('projectsdata');

		return view('projects', [
		   'title' => 'A list of completed PE projects thus far',
		   'subtitle' => 'The list will be updated as more projects are added',
		   'data' => $data,
	  ]);
	}

?>