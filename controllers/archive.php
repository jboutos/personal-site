<?php

	function archivePage() {

		return view('archive', [
		   'title' => 'A list of older PE projects',
		   'subtitle' => 'Older exercises (go to heaven)',
		   'link' => 'Google doc',
		   'link2' => 'Google doc styled',
		   'link3' => 'Details element example',
		   'link4' => 'Html audio',
		   'link5' => 'Base',
		   'link6' => 'Portal',
		   'link7' => 'Adventure game',
	  ]);
	}

?>