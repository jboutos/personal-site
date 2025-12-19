<?php

	function journalPage() {

		return view('journal', [
		   'title' => 'A rather short journal on my web-dev endeavours',
		   'links' => 'Introductory links',
	  ]);
	}

?>