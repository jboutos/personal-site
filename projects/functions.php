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

	function getProjectsData() {
		if (file_exists("data/projectsdata.json")) {
			$projectsData = file_get_contents("data/projectsdata.json");
			$projects = json_decode($projectsData, true);
		} else {
			$projects = [];
		}

		return $projects;
	}

	function getFavoriteFoodsData() {
		if (file_exists("data/favoritefoodsdata.json")) {
			$foodsData = file_get_contents("data/favoritefoodsdata.json");
			$foods = json_decode($foodsData, true);
		} else {
			$foods = [];
		}

		return $foods;
	}

	function getGoalsData() {
		if (file_exists("data/goalsdata.json")) {
			$goalsData = file_get_contents("data/goalsdata.json");
			$goals = json_decode($goalsData, true);
		} else {
			$goals = [];
		}

		return $goals;
	}

	function view($template, $props = []) {
		extract($props);
		ob_start();
		include("views/{$template}.php");
		return ob_get_clean();
	}

?>