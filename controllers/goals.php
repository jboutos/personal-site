<?php

	function goalsPage() {

		$page = pageNameFromFunction(__FUNCTION__);
		$data = getJsonData('pages/goals');

		return view('goals', [
		   'data' => $data,
	  ]);
	}

?>