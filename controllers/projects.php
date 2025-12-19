<?php

	function projectsPage() {

	   $data = getJsonData('projectsdata');

		return view('projects', [
		   'title' => 'My web-dev journey',
		   'data' => $data,
	  ]);
	}

?>