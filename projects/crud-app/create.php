<?php
	
	$make = $_POST['make'] ?? '';
	$model = $_POST['model'] ?? '';

	if (isset($_POST['submit'])) {

		//create car
		$car = ["Id" => uniqid(), "Make" => $make, "Model" => $model];

		if (file_exists("carbrands.json")) {
			$carData = file_get_contents("carbrands.json");
			$cars = json_decode($carData, true);
		} else {
			$cars = [];
		}

		$cars[] = $car;
		
		//tranform it to json file
		$carJson = json_encode($cars, JSON_PRETTY_PRINT);

		//save json
		file_put_contents('carbrands.json', $carJson);

	}

?>

<h1 class='attention-voice'>Add a car to the list</h1>

<form method='POST'>

	<div class='field'>
		<label for='make'>Make</label>
		<input id='make' type='text' name='make' value='<?php echo $make; ?>' required>
	</div>

	<div class='field'>
		<label for='model'>Model</label>
		<input id='model' type='text' name='model' value='<?php echo $model; ?>' required>
	</div>

	<button type='submit' name='submit'>Submit</button>

</form>

<?php 

if (isset($_POST['submit'])) {
	echo "<p>Car was added</p>"; 
} ?>



<a class='redirection' href=?page=home>Go back</a>

