<?php

	function detailsPage() {

		$page = pageSelect($_GET['page'] ?? 'home');
		$projects = getJsonData('projectsdata');

		//needed the data as a partial, if it was kept in projects2 the array wouldnt load since index.php includes only this page and not projects2!
		$project_id = $_GET['project'] ?? '';

		$detail = null;
		if ($project_id) {
		
			foreach ($projects as $project) {
				if ($project_id == $project["id"]) {
					$detail = $project;
					break;
				}
			}
		}

		if ($detail) {
		    $detail['description'] = "In " . strtolower($detail['title']) . " " . $detail['description'];
		}

		$caseStudyLink = isset($detail['caseStudyLink']) ? BASE_URL . $detail['caseStudyLink'] : '';

		return view($page, [
			'detail' => $detail
		]);
	}

?>