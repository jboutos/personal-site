<?php

	function goalsPage() {

		$page = pageNameFromFunction(__FUNCTION__);
	   $goals = getJsonData($page . 'data');

		return view('generic', [
		   'title' => 'Goals',
		   'subtitle1' => 'End of course goals',
		   'subtitle2' => '5 years in goals',
		   'goals' => $goals
	  ]);
	}

?>