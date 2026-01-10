<?php

	function component($template, $props = []) {
		extract($props);
		ob_start();
		include("components/{$template}.php");
		return ob_get_clean();
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

	function getCSS($page) {
		$filepath = "css/$page.css";
		return "<link rel='stylesheet' href='$filepath'>";
	}

	function pageSelect($page) {
		$pages = ['home', 'projects', 'foods', 'goals', 'details', 'archive', 'contact',
		'homepage', 'journal', 'welcome', 'error404', 'case'];

		return in_array($page, $pages) ? $page : 'error404';
	}

	function getController($page) {
		$page = pageSelect($page);

		require("controllers/$page.php");
	}

	function view($template, $props = []) {
		extract($props);
		ob_start();
		include("views/{$template}.php");
		return ob_get_clean();
	}

	function echoView($page) {
		$page = pageSelect($page);

		$function = $page . 'Page';
		echo $function();
	}

	function getPageMeta($page) {
		$page = pageSelect($page);
		$pages = getJsonData('pages');

		$default = [
			'title' => 'Index',
			'description' => 'An amalgamation of everything unholy created at PE so far',
			'image' => 'https://peprojects.dev/beta3/johnb/images/metadata-share-image.png'
		];

		return $pages[$page] ?? $default;
	}

	function pageNameFromFunction($function) {
	   return str_replace('Page', '', $function);
	}

?>