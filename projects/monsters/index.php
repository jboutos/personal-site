<style>
	ol {
		display: flex;
		flex-direction: row;
		list-style-type: none;
	}

	monster-card {
		display: block;
		border: 2px solid red;
	}
</style>

<?php
	$dingus = [3, 4, 5, "one", "cat", "dog", 434, true];

	$cody = ["id" => 1856, "name" => "Codey", "favorite food" => "Mountain Dew Code Red", "age" => 7, "adopted" => true, "portrait" => "https://peprojects.dev/images/portrait.jpg"];
	$lima = ["id" => 1256, "name" => "Limabeam", "favorite food" => "Lima beans", "age" => 4, "adopted" => false, "portrait" => "https://peprojects.dev/images/portrait.jpg"];
	$reads = ["id" => 764, "name" => "Miss reads-a-lot", "favorite food" => "Madeline cookies and tea", "age" => 9, "adopted" => false, "portrait" => "https://peprojects.dev/images/portrait.jpg"];

	$monsters = [$cody, $lima, $reads];



	echo $dingus[3];
	echo "<p> I have " . $dingus[3] . " " . $dingus[4];
	$story = $cody["name"] . "'s" . " favorite food is " . $cody["favorite food"] . ".";
	echo "<p id=" . $cody["id"] . ">" . $cody["name"] . " is " . $cody["age"] . " years old." . " " . $story . "</p>";

	$fruitsArray = ["apple", "banana", "melon", "blueberries", "eggplant"];

	echo "<ol>";

	foreach ($fruitsArray as $fruit) {
		echo "<li>" . $fruit . "</li>";
	}

	echo "</ol>";

	foreach ($monsters as $monster) {
		echo $monster["name"];
	}

	foreach ($monsters as $monster) {
		$name = $monster["name"];
		echo "<li class='monster'>" . $name . "</li>";
	}

	foreach ($monsters as $monster) {
		$info = $monster["id"] . " " . $monster["name"] . " " . $monster["favorite food"] . " " . $monster["age"] . " " . $monster["adopted"];
		echo "<li class='all-info'>" . $info . "</li>";
	}

	echo "<ol>";
	foreach ($monsters as $monster) {
		$id = $monster["id"];
		$name = $monster["name"];
		$story = "My favorite food is " . $monster["favorite food"] . " and I am " . $monster["age"] . " years old.";
		$portrait = $monster["portrait"];
		$status = $monster["adopted"];

		//set human readable status
		if ($status == 1) {
			$status = "Adopted!";
		} else {
			$status = "Needs a home!";
		}

		echo "<li class='monster'>";

		echo 
			"<monster-card id='" . $id . "'>" .
				"<picture class='portrait'>" .
					"<img src='" . $portrait . "' width='200'>" .
				"</picture>" .
			   "<h2 class='name'>" . $name . "</h2>" .
				"<p class='story'>" . $story . "</p>" .
				"<p class='status'>" . $status . "</p>" .
			"</monster-card>";

		echo "</li>";
	}
	echo "</ol>";
?>