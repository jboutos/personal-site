<?php

	function goalsPage() {

		$page = pageNameFromFunction(__FUNCTION__);
		$data = getJsonData($page);
	   $goals = getJsonData($page . 'data');

		return view('goals', [
		   'data' => $data,
		   'goals' => $goals
	  ]);
	}

?>