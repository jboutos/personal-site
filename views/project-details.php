<?php include("projects/projects-data.php") ?>

<?php
	//needed the data as a partial, if it was kept in projects2 the array wouldnt load since index.php includes only this page and not projects2!

	$project_id = '';

	if (isset($_GET['project'])) {
		$project_id = $_GET['project'];
	
		foreach ($projects as $project) {
			if ($project_id == $project["id"]) {
				$detail = $project;
				break;
			}
		}
	}
?>

<?php if (isset($detail)) { ?>
    <?php component("project-detail", $detail); ?>
<?php } else { ?>
    <?php component("project-not-found"); ?>
<?php } ?>