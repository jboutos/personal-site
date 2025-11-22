<retirement>
	<a id='retirement'></a>

	<form action='index.php#retirement' method='POST'>

		<h3>Retirement calculator</h3>
		<p>Calculates your retirement age based on user input</p>

		<div class='field'>
			<label for='age23'>Age</label>
			<input id='age23' type='number' name='age' value='<?=$age?>' min='1' value="<?php echo $_POST['age'] ?? ''; ?>">
		</div>

		<div class='field'>
			<label for='retirement11'>Ideal retirement age</label>
			<input id='retirement11' type='number' name='retirement-age' value='<?=$retirement_Age?>' min='1' value="<?php echo $_POST['retirement-age'] ?? ''; ?>">
		</div>

		<button type='submit' name='retirement-submit'>Submit</button>

	</form>


	<?php

		if (isset($_POST['retirement-submit'])) {
			
			if (isset($_POST['age'])) {
				$age = $_POST['age'];
			}

			if (isset($_POST['retirement-age'])) {
				$retirement_Age = $_POST['retirement-age'];
			}

			if (!is_numeric($age) || !is_numeric($retirement_Age)) {
	        echo "<p>Make sure you entered numbers in both fields!</p>";
	        return;
	    	}	

			$year = date("Y"); 
			$years_Remaining = $retirement_Age - $age;
			$year_Of_Retirement = $year + $years_Remaining;
			
			if ( $years_Remaining <= 0) {
				$output = "<p>You can already retire!</p>";
				echo $output;
			} else {
				$output = "<p>You have " . $years_Remaining . " years left until you can retire.<br>It's " . $year . ", so you can retire in " . $year_Of_Retirement . ".";
				echo $output;

				$myAudioFile = "exercise-6/sounds/losing-horn-313723.mp3";
				echo '<audio autoplay="true" style="display:none;">
	         		<source src="'.$myAudioFile.'" type="audio/mp3">
	      			</audio>';
			}
		}

	?>
</retirement>