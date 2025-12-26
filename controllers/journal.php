<?php

	function journalPage() {

		$page = pageNameFromFunction(__FUNCTION__);
		$journal = json_decode(file_get_contents('journal.json'), true);

		return view('generic', [
		   'title' => 'A rather short journal on my web-dev endeavours',
		   'links' => 'Introductory links',
		   'journal' => $journal,
		   'footer' => true
	  ]);
	}

?>