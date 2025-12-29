<!doctype html>
<html lang='en'>
	<head>
		<title>Super ultra responsive layout</title>
		<meta charset="UTF-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <meta name='description' content='Another responsive layout challenge'>
	   <meta property='og:image' content=''>
	   <link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<header>
			<inner-column>
				<?php include('modules/header.php');?>
			</inner-column>	
		</header>
		<main>
			<graphic-diptych>
				<inner-column>
					<?php include('modules/graphic-diptych.php');?>
				</inner-column>
			</graphic-diptych>
			<call-to-action>
				<inner-column>
					<?php include('modules/call-to-action.php');?>
				</inner-column>
			</call-to-action>
			<article-grid>
				<inner-column>
					<?php include('modules/article-grid.php');?>
				</inner-column>
			</article-grid>
			<call-to-action>
				<inner-column>
					<?php include('modules/call-to-action.php');?>
				</inner-column>
			</call-to-action>
		</main>
		<footer>
			<inner-column>
				<?php include('modules/footer.php');?>
			</inner-column>	
		</footer>
	</body>
</html>