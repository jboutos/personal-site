<style>

	.field {
		display: flex;
		flex-direction: column;
	}

	form {
		max-width: 300px;
		background-color: lightgray;
		padding: 1em;
		border: 2px solid black;
	}

	button[type='submit'] {
		margin-top: 20px;
	}

	label {
		margin-bottom: 10px;
	}

	h3 {
		color: brown;
	}

</style>

<?php
$age = 1;
$retirement_Age = 1;
?>

<a href="?">
	<p>Reload page</p>
</a>

<form method='POST'>

	<h3>Retirement calculator</h3>
	<p>What is your current age?</p>

	<div class='field'>
		<label></label>
		<input type='number' name='age' value='<?=$age?>' min='1'>
	</div>

	<p>At what age would you like to retire?</p>

	<div class='field'>
		<label></label>
		<input type='number' name='retirement-age' value='<?=$retirement_Age?>' min='1'>
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
        echo "<p>Please enter numbers in both fields.</p>";
        exit;
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