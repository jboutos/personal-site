<!doctype html>
<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<title>Php practice</title>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta name='description' content='A compilation of layouts'>
		<meta property='og:image' content='[[meta image source]]'>

		<style>

			inner-column {
				display: flex;
				flex-direction: column;
				gap: 50px;
			}

		</style>
	</head>
	<body>   
		<partials>
			<inner-column>
				<?php include('exercise-1/calculator.php') ?>
				<?php include('exercise-2/greeting.php') ?>
				<?php include('exercise-3/character-counting.php') ?>
				<?php include('exercise-4/quote-maker.php') ?>
				<?php include('exercise-5/madlib-creator.php') ?>
				<?php include('exercise-6/retirement-calculator.php') ?>
			</inner-column>
		</partials>
	</body>
</html>