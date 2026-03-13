<?php

	function goalsPage() {

		$page = pageNameFromFunction(__FUNCTION__);
		$data = getJsonData('pages/goals');
	   $goals = getJsonData($page . 'data');

		return view('goals', [
		   'data' => $data,
		   'goals' => $goals
	  ]);
	}

?>