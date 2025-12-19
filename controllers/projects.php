<?php

	function projectsPage() {

	   $data = getProjectsData();

		return view('projects', [
		   'title' => 'My web-dev journey',
		   'data' => $data,
	  ]);
	}

?>