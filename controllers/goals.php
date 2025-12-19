<?php

	function goalsPage() {

	   $data = getJsonData('goalsdata');

		return view('goals', [
		   'title' => 'Goals',
		   'subtitle1' => 'End of course goals',
		   'subtitle2' => '5 years in goals',
		   'data' => $data,
	  ]);
	}

?>