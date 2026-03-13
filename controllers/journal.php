<?php

	function journalPage() {

		$page = pageNameFromFunction(__FUNCTION__);
		$data = getJsonData($page);
		$journal = getJsonData($page . 'data');

		return view('journal', [
		   'data' => $data,
		   'journal' => $journal
	  ]);
	}

?>