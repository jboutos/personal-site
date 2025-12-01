<?php

    $make = $_POST['emake'] ?? '';
    $model = $_POST['emodel'] ?? '';

    if (isset($_POST['edit-submit'])) {

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }

        $carData = file_get_contents('carbrands.json');

        // Decode the json file into a php associative array
        $cars = json_decode($carData, true);

        function updateCar($array, $id, $value1, $value2) {
            foreach ($array as $index => $arr) {
                if ($id === $arr['Id']) {
                    $array[$index]['Make'] = $value1;
                    $array[$index]['Model'] = $value2;
                }
            }
            return $array;
        }

        $cars = updateCar($cars, $id, $make, $model);
        $carJson = json_encode($cars, JSON_PRETTY_PRINT);
        file_put_contents('carbrands.json', $carJson);
        
    }
    

?>

<h1 class='attention-voice'>Edit the info of a car in the list</h1>

<form method='POST'>

    <div class='field'>
        <label for='emake'>Make</label>
        <input id='emake' type='text' name='emake' value='<?php echo $make; ?>' required>
    </div>

    <div class='field'>
        <label for='emodel'>Model</label>
        <input id='emodel' type='text' name='emodel' value='<?php echo $model; ?>' required>
    </div>

    <button type='submit' name='edit-submit'>Submit</button>

</form>

<?php 

    if (isset($_POST['edit-submit'])) {
        echo "<p>Car was updated</p>"; 
} ?>

<a class='redirection' href=?page=home>Go back</a>
