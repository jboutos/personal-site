<currency>
	<a id='conversion'></a>

	<form action='index.php?ex=currency-conversion' method='POST'>

		<h3>Currency conversion</h3>
		<p>Converts euros to dollars</p>

		<div class='field'>
			<label for='euros'>Amount eur</label>
			<input id='euros' type='number' name='euros' step='0.01' min='0.01' value="<?php echo $_POST['euros'] ?? ''; ?>">
		</div>

		<div class='field'>
			<label for='rate'>Exchange rate</label>
			<input id='rate' type='number' name='euro-rate' step='0.0001' min='0' value = "<?php echo $_POST['euro-rate'] ?? ''; ?>">
		</div>

		<button type='submit' name='currency-submit'>Submit</button>

	</form>

	<?php

		if (isset($_POST['currency-submit'])) {

			if (isset($_POST['euros'])) {
				$euros = $_POST['euros'];
			}

			if (isset($_POST['euro-rate'])) {
				$euroRate = $_POST['euro-rate'];
			}

			if (strlen($euros) == 0 || strlen($euroRate) == 0) {
				$output = "<p>All fields must have values!</p>";
				echo $output;
				return;
			}

			$dollarRate = 1;

			$dollars = round(($euros * $euroRate) / $dollarRate, 2);

			echo "<p>" . $euros . " euros at an exchange rate of " . $euroRate . " is " . $dollars . " U.S. dollars.</p>";

		}
	?>
</currency>