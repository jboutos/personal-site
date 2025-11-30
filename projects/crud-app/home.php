<?php

if (file_exists("carbrands.json")) {
	$carData = file_get_contents("carbrands.json");
	$cars = json_decode($carData, true);
} else {
	$cars = []; 
}

?>

<h1 class='attention-voice'>Car List</h1>

<a href="?page=create">Add a new car</a>

<ul>
<?php foreach ($cars as $car) { ?>
    <li>
    	<list-manager>
        <?php echo "<p>" . $car['Make'] . " " . $car['Model'] . "</p>"; ?>
        <a href="?page=update&id=<?php echo $car['Id']; ?>">Edit</a>
        <a href="?page=delete&id=<?php echo $car['Id']; ?>">Delete</a>
      </list-manager>
    </li>
<?php } ?>
</ul>