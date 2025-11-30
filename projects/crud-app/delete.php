<?php

	$carData = file_get_contents('carbrands.json');

	// Decode the json file into a php array
	$cars = json_decode($carData, true);

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		function deleteCar($array, $id) {
			foreach ($array as $index => $arr) {
				if ($id === $arr['Id']) {
					unset($array[$index]);
				}
			}
			return $array;
		}

		$cars = deleteCar($cars, $id);
		$carJson = json_encode($cars, JSON_PRETTY_PRINT);
      file_put_contents('carbrands.json', $carJson);
       
	}

?>

<h1 class='attention-voice'>Car was deleted from the list</h1>

<a class='redirection' href=?page=home>Go back</a>