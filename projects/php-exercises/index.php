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

			<section>
				<button data-target='ex1'>Calculator</button>
				<button data-target='ex2'>Greeting</button>
				<button data-target='ex3'>Character Counting</button>
				<button data-target='ex4'>Quote Maker</button>
				<button data-target='ex5'>Madlib Creator</button>
				<button data-target='ex6'>Retirement Calculator</button>
				<button data-target='ex7'>Area Calculator</button>
				<button data-target='ex8'>Pizza Division</button>
				<button data-target='ex9'>Paint Calculator</button>
				<button data-target='ex10'>Checkout Calculator</button>
				<button data-target='ex11'>Currency Conversion</button>
				<button data-target='ex12'>Simple Interest Calculator</button>
				<button data-target='ex13'>Compound Interest Calculator</button>
				<button data-target='ex14'>Tax Calculator</button>
				<button data-target='ex15'>Password Validator</button>
				<button data-target='ex16'>Driving Age Calculator</button>
				<button data-target='ex17'>Blood Alcohol Calculator</button>
				<button data-target='ex18'>Temperature Converter</button>
				<button data-target='ex19'>BMI Calculator</button>
			</section>

			<partials>
				<div id='ex1' class='<?php echo ($_GET['show'] ?? '') === 'ex1' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-1/calculator.php') ?>
				</div>
				<div id='ex2' class='<?php echo ($_GET['show'] ?? '') === 'ex2' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-2/greeting.php') ?>
				</div>
				<div id='ex3' class='<?php echo ($_GET['show'] ?? '') === 'ex3' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-3/character-counting.php') ?>
				</div>
				<div id='ex4' class='<?php echo ($_GET['show'] ?? '') === 'ex4' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-4/quote-maker.php') ?>
				</div>
				<div id='ex5' class='<?php echo ($_GET['show'] ?? '') === 'ex5' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-5/madlib-creator.php') ?>
				</div>
				<div id='ex6' class='<?php echo ($_GET['show'] ?? '') === 'ex6' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-6/retirement-calculator.php') ?>
				</div>
				<div id='ex7' class='<?php echo ($_GET['show'] ?? '') === 'ex7' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-7/area-calculator.php') ?>
				</div>
				<div id='ex8' class='<?php echo ($_GET['show'] ?? '') === 'ex8' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-8/pizza-division.php') ?>
				</div>
				<div id='ex9' class='<?php echo ($_GET['show'] ?? '') === 'ex9' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-9/paint-calculator.php') ?>
				</div>
				<div id='ex10' class='<?php echo ($_GET['show'] ?? '') === 'ex10' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-10/checkout-calculator.php') ?>
				</div>
				<div id='ex11' class='<?php echo ($_GET['show'] ?? '') === 'ex11' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-11/currency-conversion.php') ?>
				</div>
				<div id='ex12' class='<?php echo ($_GET['show'] ?? '') === 'ex12' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-12/simple-interest-calculator.php') ?>
				</div>
				<div id='ex13' class='<?php echo ($_GET['show'] ?? '') === 'ex13' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-13/compound-interest-calculator.php') ?>
				</div>
				<div id='ex14' class='<?php echo ($_GET['show'] ?? '') === 'ex14' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-14/tax-calculator.php') ?>
				</div>
				<div id='ex15' class='<?php echo ($_GET['show'] ?? '') === 'ex15' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-15/password-validator.php') ?>
				</div>
				<div id='ex16' class='<?php echo ($_GET['show'] ?? '') === 'ex16' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-test/driving-age-calculator.php') ?>
				</div>
				<div id='ex17' class='<?php echo ($_GET['show'] ?? '') === 'ex17' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-17/blood-alcohol-calculator.php') ?>
				</div>
				<div id='ex18' class='<?php echo ($_GET['show'] ?? '') === 'ex18' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-18/temperature-converter.php') ?>
				</div>
				<div id='ex19' class='<?php echo ($_GET['show'] ?? '') === 'ex19' ? '' : 'hidden'; ?> form'>
					<?php include('exercise-19/bmi-calculator.php') ?>
				</div>
			</partials>

			<footer>
				<a href="?">
					<p>Reload page</p>
				</a>
			</footer>

		</inner-column>
		<script src='script.js'></script>
	</body>
</html>