<!doctype html>
<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<title>Php practice</title>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta name='description' content='A compilation of layouts'>
		<meta property='og:image' content='[[meta image source]]'>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Monda" rel="stylesheet">
	</head>
	<body>   
		<inner-column>

			<header>
				<h1>A collection of exercises in php to test the input form!</h1>
				<a href="?">
					<p>Reload page</p>
				</a>
			</header>

			<partials>
				<div>
					<?php include('exercise-1/calculator.php') ?>
				</div>
				<div>
					<?php include('exercise-2/greeting.php') ?>
				</div>
				<div>
					<?php include('exercise-3/character-counting.php') ?>
				</div>
				<div>
					<?php include('exercise-4/quote-maker.php') ?>
				</div>
				<div>
					<?php include('exercise-5/madlib-creator.php') ?>
				</div>
				<div>
					<?php include('exercise-6/retirement-calculator.php') ?>
				</div>
				<div>
					<?php include('exercise-7/area-calculator.php') ?>
				</div>
				<div>
					<?php include('exercise-8/pizza-division.php') ?>
				</div>
				<div>
					<?php include('exercise-9/paint-calculator.php') ?>
				</div>
				<div>
					<?php include('exercise-10/checkout-calculator.php') ?>
				</div>
				<div>
					<?php include('exercise-11/currency-conversion.php') ?>
				</div>
				<div>
					<?php include('exercise-12/simple-interest-calculator.php') ?>
				</div>
				<div>
					<?php include('exercise-13/compound-interest-calculator.php') ?>
				</div>
				<div>
					<?php include('exercise-14/tax-calculator.php') ?>
				</div>
				<div>
					<?php include('exercise-15/password-validator.php') ?>
				</div>
				<div>
					<?php include('exercise-16/driving-age-calculator.php') ?>
				</div>
			</partials>

			<footer>
				<a href="?">
					<p>Reload page</p>
				</a>
			</footer>

		</inner-column>
	</body>
</html>