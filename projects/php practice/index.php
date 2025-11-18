<?php

$favoriteBands = ["band1", "band2", "band3", "band4", "band5", "band6"];
$favoriteNumbers = [23, 16, 13, 38, 100, 11, 1, 4];

foreach ($favoriteBands as $band) {
	echo "<li> $band </li>";
}


for ($i = 0; $i <= 34; $i++) {
	if ($i != 12 && $i != 17 && $i != 23) {
		echo "$i ";
	}
}

foreach ($favoriteNumbers as $number) {
	if ($number < 20) {
		echo "$number ";
	}
}













































?>