<?php

	function detailsPage() {

		$page = pageNameFromFunction(__FUNCTION__);
		$projects = getJsonData($page . 'data');

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

		return view($page, [
			'detail' => $detail
		]);
	}

?>