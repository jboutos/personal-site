<?php

	function component($template, $props = []) {
		extract($props);
		ob_start();
		include("components/{$template}.php");
		echo ob_get_clean();
	}

	function getHomeData() {
		if (file_exists("data/homedata.json")) {
			$homeData = file_get_contents("data/homedata.json");
			$home = json_decode($homeData, true);
		} else {
			$home = [];
		}

		return $home;
	}

	function view($template, $props = []) {
		extract($props);
		ob_start();
		include("projects/components/{$template}.php");
		return ob_get_clean();
	}

?>