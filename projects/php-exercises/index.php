<!doctype html>
<html lang='en'>
<?php
	$exercise = $_GET['ex'] ?? null;

	function pageSelect($exercise) {
		$exercises = ['calculator', 'greeting', 'character-counting', 'quote-maker', 'madlib-creator', 'retirement-calculator', 'area-calculator', 'pizza-division',
		 'paint-calculator', 'checkout-calculator', 'currency-conversion', 'simple-interest-calculator', 'compound-interest-calculator', 'tax-calculator', 'password-validator', 'driving-age-calculator','blood-alcohol-calculator', 'temperature-converter', 'bmi-calculator', '404'];

		return in_array($exercise, $exercises) ? $exercise : '404';
	}

	function getTemplate($exercise) {

		if (!$exercise) {
      	return;
    	}

		$exercise = pageSelect($exercise);
		include($exercise . '/' . $exercise . '.php');
	}
?>
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
				<a href='?ex=calculator' class='index-button <?= ($_GET['ex'] ?? '') === 'calculator' ? 'active' : ''; ?>'>Calculator</a>
				<a href='?ex=greeting' class='index-button <?= ($_GET['ex'] ?? '') === 'greeting' ? 'active' : ''; ?>'>Greeting</a>
				<a href='?ex=character-counting' class='index-button <?= ($_GET['ex'] ?? '') === 'character-counting' ? 'active' : ''; ?>'>Character Counting</a>
				<a href='?ex=quote-maker' class='index-button <?= ($_GET['ex'] ?? '') === 'quote-maker' ? 'active' : ''; ?>'>Quote Maker</a>
				<a href='?ex=madlib-creator' class='index-button <?= ($_GET['ex'] ?? '') === 'madlib-creator' ? 'active' : ''; ?>'>Madlib Creator</a>
				<a href='?ex=retirement-calculator' class='index-button <?= ($_GET['ex'] ?? '') === 'retirement-calculator' ? 'active' : ''; ?>'>Retirement Calculator</a>
				<a href='?ex=area-calculator' class='index-button <?= ($_GET['ex'] ?? '') === 'area-calculator' ? 'active' : ''; ?>'>Area Calculator</a>
				<a href='?ex=pizza-division' class='index-button <?= ($_GET['ex'] ?? '') === 'pizza-division' ? 'active' : ''; ?>'>Pizza Division</a>
				<a href='?ex=paint-calculator' class='index-button <?= ($_GET['ex'] ?? '') === 'paint-calculator' ? 'active' : ''; ?>'>Paint Calculator</a>
				<a href='?ex=checkout-calculator' class='index-button <?= ($_GET['ex'] ?? '') === 'checkout-calculator' ? 'active' : ''; ?>'>Checkout Calculator</a>
				<a href='?ex=simple-currency-conversion' class='index-button <?= ($_GET['ex'] ?? '') === 'currency-conversion' ? 'active' : ''; ?>'>Currency Conversion</a>
				<a href='?ex=simple-interest-calculator' class='index-button <?= ($_GET['ex'] ?? '') === 'simple-interest-calculator' ? 'active' : ''; ?>'>Simple Interest Calculator</a>
				<a href='?ex=compound-interest-calculator' class='index-button <?= ($_GET['ex'] ?? '') === 'compound-interest-calculator' ? 'active' : ''; ?>'>Compound Interest Calculator</a>
				<a href='?ex=tax-calculator' class='index-button <?= ($_GET['ex'] ?? '') === 'tax-calculator' ? 'active' : ''; ?>'>Tax Calculator</a>
				<a href='?ex=password-validator' class='index-button <?= ($_GET['ex'] ?? '') === 'password-validator' ? 'active' : ''; ?>'>Password Validator</a>
				<a href='?ex=driving-age-calculator' class='index-button <?= ($_GET['ex'] ?? '') === 'driving-age-calculator' ? 'active' : ''; ?>'>Driving Age Calculator</a>
				<a href='?ex=blood-alcohol-calculator' class='index-button <?= ($_GET['ex'] ?? '') === 'blood-alcohol-calculator' ? 'active' : ''; ?>'>Blood Alcohol Calculator</a>
				<a href='?ex=temperature-converter' class='index-button <?= ($_GET['ex'] ?? '') === 'temperature-converter' ? 'active' : ''; ?>'>Temperature Converter</a>
				<a href='?ex=bmi-calculator' class='index-button <?= ($_GET['ex'] ?? '') === 'bmi-calculator' ? 'active' : ''; ?>'>BMI Calculator</a>
			</section>

			<partials>
				<?php getTemplate($exercise); ?>
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