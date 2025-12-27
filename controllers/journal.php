<?php

	function journalPage() {

		$page = pageNameFromFunction(__FUNCTION__);
		$journal = getJsonData($page . 'data');

		return view('generic', [
		   'title' => 'A rather short journal on my web-dev endeavours',
		   'links' => 'Introductory links',
		   'journal' => $journal,
		   'footer' => true
	  ]);
	}

?>