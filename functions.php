<?php

	function component($template, $props = []) {
		extract($props);
		ob_start();
		include("components/{$template}.php");
		echo ob_get_clean();
	}

	function getJsonData($filename) {
		if (file_exists("data/{$filename}.json")) {
			$json = file_get_contents("data/$filename.json");
			$data = json_decode($json, true);
		} else {
			$data = [];
		}
		return $data;
	}

	function view($template, $props = []) {
		extract($props);
		ob_start();
		include("views/{$template}.php");
		return ob_get_clean();
	}

	function getCSS($page) {
		$filepath = "css/$page.css";
		return "<link rel='stylesheet' href='$filepath'>";
	}

	function getController($page) {

		$pages = ['home', 'projects', 'foods', 'goals', 'details', 'archive', 'contact',
		'homepage', 'journal', 'welcome', 'error404'];
	   if (!in_array($page, $pages)) {
	       $page = 'error404';
	   }

		require("controllers/$page.php");
	}

	function echoView($page) {

		$pages = ['home', 'projects', 'foods', 'goals', 'details', 'archive', 'contact',
		'homepage', 'journal', 'welcome', 'error404'];
	   if (!in_array($page, $pages)) {
	       $page = 'error404';
	   }

		$function = $page . 'Page';
		echo $function();
	}

?>