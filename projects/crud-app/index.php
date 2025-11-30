<!doctype html>

<?php 
	$page = null;
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 'home';
	}

	function getTemplate($page) {
		include($page . '.php');
	}
?>

<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<title>Simple crud app</title>
		<meta name='description' content='Testing crud'>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Lato|Prata" rel="stylesheet">
	</head>
	<body>

		<?php getTemplate($page); ?>
		
	</body>
</html>