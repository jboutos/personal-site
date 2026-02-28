<!doctype html>
<html lang='en'>
<?php
	$exercise = $_GET['ex'] ?? null;

	function pageSelect($exercise) {
		$exercises = ['bmi-calculator', 'currency-conversion', 'employee-list-removal', 'filtering-values', 'numbers-to-names', 'password-strength-indicator', 'temperature-converter', '404'];

		return in_array($exercise, $exercises) ? $exercise : '404';
	}

	function getScript($exercise) {
		if (!$exercise) {
      	return;
    	}

		$exercise = pageSelect($exercise);
		echo "<script src='{$exercise}/{$exercise}.js'></script>";
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
		<title>Js practice</title>
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
				<a href='?ex=bmi-calculator' class='index-button <?= ($_GET['ex'] ?? '') === 'bmi-calculator' ? 'active' : ''; ?>'>BMI Calculator</a>
				<a href='?ex=currency-conversion' class='index-button <?= ($_GET['ex'] ?? '') === 'currency-conversion' ? 'active' : ''; ?>'>Currency Conversion</a>
				<a href='?ex=employee-list-removal' class='index-button <?= ($_GET['ex'] ?? '') === 'employee-list-removal' ? 'active' : ''; ?>'>Employee List Removal</a>
				<a href='?ex=filtering-values' class='index-button <?= ($_GET['ex'] ?? '') === 'filtering-values' ? 'active' : ''; ?>'>Filtering Values</a>
				<a href='?ex=numbers-to-names' class='index-button <?= ($_GET['ex'] ?? '') === 'numbers-to-names' ? 'active' : ''; ?>'>Numbers to Names</a>
				<a href='?ex=password-strength-indicator' class='index-button <?= ($_GET['ex'] ?? '') === 'password-strength-indicator' ? 'active' : ''; ?>'>Password Strength Indicator</a>
				<a href='?ex=temperature-converter' class='index-button <?= ($_GET['ex'] ?? '') === 'temperature-converter' ? 'active' : ''; ?>'>Temperature Converter</a>
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
		<?php getScript($exercise); ?>
	</body>	
</html>