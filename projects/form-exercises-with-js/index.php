<!doctype html>
<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<title>Php practice</title>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta name='description' content='A compilation of layouts'>
		<meta property='og:image' content='https://peprojects.dev/beta3/johnb/images/js.png'>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Monda" rel="stylesheet">
	</head>
	<body>   
		<inner-column>

			<header>
				<h1>A collection of exercises in Javascript to test the input form!</h1>
				<a href="?">
					<p>Reload page</p>
				</a>
			</header>

			<section>
				<button class='index-button' data-target='ex1'>BMI Calculator</button>
				<button class='index-button' data-target='ex2'>Currency Conversion</button>
				<button class='index-button' data-target='ex3'>Employee List Removal</button>
				<button class='index-button' data-target='ex4'>Filtering Values</button>
				<button class='index-button' data-target='ex5'>Numbers to Names</button>
				<button class='index-button' data-target='ex6'>Password Strength Indicator</button>
				<button class='index-button' data-target='ex7'>Temperature Converter</button>
			</section>

			<partials>
				<div id='ex1' class='hidden form'>
					<?php include('bmi-calculator/bmi-calculator.php') ?>
				</div>
				<div id='ex2' class='hidden form'>
					<?php include('currency-conversion/currency-conversion.php') ?>
				</div>
				<div id='ex3' class='hidden form'>
					<?php include('employee-list-removal/employee-list-removal.php') ?>
				</div>
				<div id='ex4' class='hidden form'>
					<?php include('filtering-values/filtering-values.php') ?>
				</div>
				<div id='ex5' class='hidden form'>
					<?php include('numbers-to-names/numbers-to-names.php') ?>
				</div>
				<div id='ex6' class='hidden form'>
					<?php include('password-strength-indicator/password-strength-indicator.php') ?>
				</div>
				<div id='ex7' class='hidden form'>
					<?php include('temperature-converter/temperature-converter.php') ?>
				</div>
			</partials>

			<footer>
				<a href="?">
					<p>Reload page</p>
				</a>
			</footer>

		</inner-column>
		<script src='script.js'></script>
		<script src="bmi-calculator/bmi.js"></script>
		<script src="currency-conversion/currency.js"></script>
		<script src="numbers-to-names/numbers.js"></script>
		<script src="password-strength-indicator/password.js"></script>
		<script src="temperature-converter/temperature.js"></script>
		<script src="filtering-values/filter.js"></script>
		<script src="employee-list-removal/employee.js"></script>
	</body>	
</html>